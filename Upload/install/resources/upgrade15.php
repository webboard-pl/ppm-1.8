<?php
/**
 * MyBB 1.8
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 * Website: http://www.mybb.com
 * License: http://www.mybb.com/about/license
 *
 */

/**
 * Upgrade Script: 1.4.4
 */

$upgrade_detail = array(
	"revert_all_templates" => 0,
	"revert_all_themes" => 0,
	"revert_all_settings" => 0
);

@set_time_limit(0);

function upgrade15_dbchanges()
{
	global $db, $output, $mybb, $cache;

	$output->print_header("Wykonywanie zapytań");

	echo "<p>Trwa wykonywanie wymaganych zapytań do bazy danych...</p>";
	flush();
	
	if($db->type != "pgsql")
	{
		$db->update_query("settinggroups", array('isdefault' => '1'), "isdefault='yes'");
		$db->update_query("settinggroups", array('isdefault' => '0'), "isdefault='no'");
		
		$db->write_query("ALTER TABLE ".TABLE_PREFIX."events CHANGE timezone timezone varchar(4) NOT NULL default '0'");
	}
	
	if($db->type == "pgsql")
	{
		$db->write_query("ALTER TABLE ".TABLE_PREFIX."warnings ALTER COLUMN revokereason SET default ''");
		$db->write_query("ALTER TABLE ".TABLE_PREFIX."warnings ALTER COLUMN notes SET default ''");
	}
	
	$cache->update("internal_settings", array('encryption_key' => random_str(32)));
	
	if($db->type != "sqlite")
	{
		$ip_index = $db->index_exists("sessions", "ip");

		if($ip_index == false)
		{
			if($db->type == "pgsql")
			{
				$db->write_query("CREATE INDEX ip ON ".TABLE_PREFIX."sessions (ip)");
			}
			else
			{
				$db->write_query("ALTER TABLE ".TABLE_PREFIX."sessions ADD INDEX (`ip`)");
			}
		}
	}
	
	$contents .= "Naciśnij przycisk Dalej, aby kontynuować proces aktualizacji.</p>";
	$output->print_contents($contents);
	$output->print_footer("15_usernameverify");
}

function upgrade15_usernameverify()
{
	global $db, $output, $mybb;

	$output->print_header("Wykonywanie zapytań");

	echo "<p><span style=\"font-size: xx-large\">OSTRZEŻENIE - PRZECZYTAJ PONIŻSZĄ INFORMACJĘ:</span> Następny krok usunie <strong>wszystkie</strong> przecinki (,) z <i>loginów</i> na Twoim forum. Ta operacja musi zostać przeprowadzona, gdyż bez niej wysyłanie prywatnych wiadomości do użytkowników z loginami, które zawierają przecinki stanie się utrudnione lub niemożliwe.</p>";
	flush();
	
	$contents .= "Naciśnij dalej, jeżeli powyższa informacja została przeczytana i chcesz kontynuować proces aktualizacji.</p>";
	$output->print_contents($contents);
	$output->print_footer("15_usernameupdate");
}

function upgrade15_usernameupdate()
{
	global $db, $output, $mybb, $plugins;

	$output->print_header("Wykonywanie zapytań");

	echo "<p>Trwa wykonywanie wymaganych zapytań do bazy danych...</p>";
	flush();
	
	require_once MYBB_ROOT."inc/datahandler.php";
	require_once MYBB_ROOT."inc/datahandlers/user.php";
	// Load plugin system for datahandler
	require_once MYBB_ROOT."inc/class_plugins.php";
	$plugins = new pluginSystem;
	
	$not_renameable = array();
	
	// Because commas can cause some problems with private message sending in usernames we have to remove them
	$query = $db->simple_select("users", "uid, username", "username LIKE '%,%'");
	while($user = $db->fetch_array($query))
	{
		$prefix = '';
		$userhandler = new UserDataHandler('update');
		
		do
		{
			$username = str_replace(',', '', $user['username']).'_'.$prefix;
			
			$updated_user = array(
				"uid" => $user['uid'],
				"username" => $username
			);
			$userhandler->set_data($updated_user);
			
			++$prefix;
		}
		while(!$userhandler->verify_username() || $userhandler->verify_username_exists());
		
		if(!$userhandler->validate_user())
		{
			$not_renameable[] = htmlspecialchars_uni($user['username']);
		}
		else
		{
			$db->update_query("users", array('username' => $db->escape_string($username)), "uid='{$user['uid']}'");
			$db->update_query("posts", array('username' => $db->escape_string($username)), "uid='{$user['uid']}'");
			$db->update_query("threads", array('username' => $db->escape_string($username)), "uid='{$user['uid']}'");
			$db->update_query("threads", array('lastposter' => $db->escape_string($username)), "lastposteruid='{$user['uid']}'");
			$db->update_query("forums", array('lastposter' => $db->escape_string($username)), "lastposteruid='{$user['uid']}'");
			
			update_stats(array("numusers" => "+0"));
		}
	}
	
	if(!empty($not_renameable))
	{
		echo "<span style=\"color: red;\">OSTRZEŻENIE:</span> Poniższe loginy nie mogły zostać zmienione automatycznie. Zmień je ręcznie po zakończeniu procesu aktualizacji.<br />
		<ul>
		<li>";
		echo implode('</li>\n<li>', $not_renameable);
		echo "</li>
		</ul>";
	}
	
	$contents .= "Naciśnij przycisk Dalej, aby kontynuować proces aktualizacji.</p>";
	$output->print_contents($contents);
	$output->print_footer("15_done");
}
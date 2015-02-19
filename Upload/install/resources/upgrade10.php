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
 * Upgrade Script: 1.2.7, 1.2.8, lub 1.2.9
 */


$upgrade_detail = array(
	"revert_all_templates" => 0,
	"revert_all_themes" => 0,
	"revert_all_settings" => 0
);

@set_time_limit(0);

function upgrade10_dbchanges()
{
	global $db, $output, $mybb;

	$output->print_header("Wykonywanie zapytań");

	echo "<p>Trwa wykonywanie wymaganych zapytań do bazy danych...</p>";

	$db->write_query("UPDATE ".TABLE_PREFIX."templates SET version='0' WHERE version=''");
	$db->write_query("ALTER TABLE ".TABLE_PREFIX."templates CHANGE version version int unsigned NOT NULL default '0'");

	$contents .= "Naciśnij przycisk Dalej, aby kontynuować proces aktualizacji.</p>";
	$output->print_contents($contents);
	$output->print_footer("10_done");
}


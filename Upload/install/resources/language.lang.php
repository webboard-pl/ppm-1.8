<?php
/**
 * MyBB 1.8 English Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

/* INSTALL LANGUAGE VARIABLES */
$l['none'] = 'brak';
$l['not_installed'] = 'nie zainstalowano';
$l['installed'] = 'zainstalowano';
$l['not_writable'] = 'niezapisywalny';
$l['writable'] = 'zapisywalny';
$l['done'] = ' gotowe';
$l['next'] = 'Dalej';
$l['error'] = 'Błąd';
$l['multi_byte'] = 'multi-byte';
$l['recheck'] = 'Sprawdź ponownie';

$l['title'] = "Kreator instalacji MyBB";
$l['welcome'] = 'Rozpoczęcie';
$l['license_agreement'] = 'Umowa licencyjna';
$l['req_check'] = 'Sprawdzenie wymagań';
$l['db_config'] = 'Konfiguracja bazy danych';
$l['table_creation'] = 'Tworzenie tabel';
$l['data_insertion'] = 'Wprowadzanie danych';
$l['theme_install'] = 'Instalacja stylów';
$l['board_config'] = 'Wstępna konfiguracja forum';
$l['admin_user'] = 'Konto administratora';
$l['finish_setup'] = 'Zakończenie instalacji';

$l['table_population'] = 'Wypełnienie tabel domyślnymi danymi';
$l['theme_installation'] = 'Instalacja stylów';
$l['create_admin'] = 'Tworzenie konta administratora';

$l['already_installed'] = "MyBB jest już zainstalowane";
$l['mybb_already_installed'] = "<p>Witaj w instalatorze MyBB {1}. Kreator instalacji MyBB wykrył, że MyBB zostało już zainstalowane.</p>
<p>Wybierz jedną z akcji poniżej:</p>

<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>Zaktualizuj istniejącą instalację MyBB do wersji {1} <span style=\"font-size: 80%; color: maroon;\">(zalecane)</span></h3>
	<p>Zaktualizuj istniejącą instalację MyBB do wersji {1}, z zachowaniem istniejących wątków, postów i użytkowników.</p>

	<form method=\"post\" action=\"upgrade.php\">
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Aktualizuj do MyBB {1} &raquo;\" /></div>
	</form>
</div>

<div style=\"padding: 4px;\">
	<h3>Zainstaluj nową kopię MyBB</h3>
	<p><span style=\"color: red;\">Usuń istniejące już forum</span> i zainstaluj nową kopię MyBB.</p>
	
	<form method=\"post\" action=\"index.php\" onsubmit=\"return confirm('Czy na pewno chcesz zainstalować nową kopię MyBB?\\n\\nIstniejące forum zostanie usunięte! Tej operacji nie można cofnąć.');\">
		<input type=\"hidden\" name=\"action\" value=\"intro\" />
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Zainstaluj MyBB {1} &raquo;\" /></div>
	</form>
</div>";

$l['mybb_incorrect_folder'] = "<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>Kreator instalacji MyBB wykrył, że instalator uruchomiony jest z katalogu \"Upload\".</h3>
	<p>Nie ma w tym nic złego, ale zalecane jest, aby na serwerze znajdowała się zawartość katalogu \"Upload\" a nie sam katalog.<br /><br />Aby uzyskać więcej informacji odwiedź <a href=\"http://wiki.mybboard.net/index.php/Help:Upload_Directory\" target=\"_blank\">stronę wiki</a>.</p>
</div>";

$l['welcome_step'] = '<p>Witaj w kreatorze instalacji MyBB {1}. Ten kreator pomoże Ci zainstalować i skonfigurować MyBB na Twoim serwerze.</p>
<p>Teraz, gdy pliki znajdują się na serwerze należy skonfigurować bazę danych i ustawienia. Poniżej znajduje się lista kroków, jakie należy wykonać, aby zainstalować MyBB.</p>
<ul>
	<li>Sprawdzenie wymagań</li>
	<li>Konfiguracja silnika bazy danych</li>
	<li>Utworzenie tabel w bazie danych</li>
	<li>Wprowadzenie domyślnych danych</li>
	<li>Zainstalowanie domyślnych stylów i szablonów</li>
	<li>Utworzenie konta administratora do zarządzania forum</li>
	<li>Wstępna konfiguracja forum</li>
</ul>
<p>Po pomyślnym zakończeniu każdego z kroków naciśnij przycisk Dalej na dole strony, aby przejść do następnego kroku.</p>
<p>Naciśnij przycisk Dalej, aby przeczytać licencję MyBB.</p>
<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> Wyślij anonimowe statystyki dotyczące konfiguracji serwera do twórców MyBB</label> (<a href="http://docs.mybb.com/Anonymous_Statistics.html" style="color: #555;" target="_blank"><small>Jakie informacje zostaną wysłane?</small></a>)</p>';

$l['license_step'] = '<div class="license_agreement">
{1}
</div>
<p><strong>Poprzez naciśnięcie przycisku Dalej oświadczasz, że zgadzasz się z warunkami umowy licencyjnej MyBB i zobowiązujesz się ich przestrzegać.</strong></p>';


$l['req_step_top'] = '<p>Zanim będzie możliwe zainstalowanie MyBB kreator sprawdzi, czy Twój serwer spełnia minimalne wymagania do instalacji.</p>';
$l['req_step_reqtable'] = '<div class="border_wrapper">
			<div class="title">Sprawdzenie wymagań</div>
		<table class="general" cellspacing="0">
		<thead>
			<tr>
				<th colspan="2" class="first last">Kryteria</th>
			</tr>
		</thead>
		<tbody>
		<tr class="first">
			<td class="first">Wersja PHP:</td>
			<td class="last alt_col">{1}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Obsługiwane rozszerzenia bazy danych:</td>
			<td class="last alt_col">{2}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Obsługiwane rozszerzenia translacji:</td>
			<td class="last alt_col">{3}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Rozszerzenia PHP XML:</td>
			<td class="last alt_col">{4}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Plik konfiguracyjny:</td>
			<td class="last alt_col">{5}</td>
		</tr>
		<tr>
			<td class="first">Plik ustawień:</td>
			<td class="last alt_col">{6}</td>
		</tr>
		<tr>
			<td class="first">Katalog pamięci podręcznej:</td>
			<td class="last alt_col">{7}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Katalog z załącznikami:</td>
			<td class="last alt_col">{8}</td>
		</tr>
		<tr class="last">
			<td class="first">Katalog z awatarami użytkowników:</td>
			<td class="last alt_col">{9}</td>
		</tr>
		</tbody>
		</table>
		</div>';
$l['req_step_reqcomplete'] = '<p><strong>Gratulacje, Twój serwer spełnia wymagania MyBB.</strong></p>
<p>Naciśnij przycisk Dalej, aby kontynuować proces instalacji.</p>';

$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'Minimalna wersja PHP wymagana do instalacji MyBB to 5.2.0 lub nowsza. Posiadasz zainstalowaną wersję {1}.';
$l['req_step_error_dboptions'] = 'MyBB wymaga zainstalowanej co najmniej jednej kompatybilnej bazy danych. Twój serwer informuje, że żadna z nich nie jest dostępna.';
$l['req_step_error_xmlsupport'] = 'MyBB wymaga, aby PHP zostało skompilowane z obsługą danych XML. Odwiedź stronę <a href="http://www.php.net/xml" target="_blank">PHP.net</a>, aby uzyskać więcej informacji.';
$l['req_step_error_configdefaultfile'] = 'Nazwa pliku konfiguracyjnego (inc/config.default.php) nie mogła zostać zmieniona. Zmień nazwę ręcznie z <u>config.default.php</u> na <u>config.php</u> i zezwól na zapis do tego pliku lub skontaktuj się <a href="http://www.mybb.com/support" targert="_blank">z pomocą techniczną MyBB.</a>';
$l['req_step_error_configfile'] = 'Nie można zapisywać do pliku konfiguracyjnego (inc/config.php). Nadaj mu odpowiednie uprawnienia <a href="http://wiki.mybboard.net/index.php/CHMOD%20Files" target="_blank">chmod</a> i spróbuj ponownie.';
$l['req_step_error_settingsfile'] = 'Nie można zapisywać do pliku ustawień (inc/settings.php). Nadaj mu odpowiednie uprawnienia <a href="http://wiki.mybboard.net/index.php/CHMOD%20Files" target="_blank">chmod</a> i spróbuj ponownie.';
$l['req_step_error_cachedir'] = 'Nie można zapisywać do katalogu z pamięcią podręczną (cache/). Nadaj mu odpowiednie uprawnienia <a href="http://wiki.mybboard.net/index.php/CHMOD%20Files" target="_blank">chmod</a> i spróbuj ponownie.';
$l['req_step_error_uploaddir'] = 'Nie można zapisywać do katalogu z plikami nadesłanymi przez użytkowników (uploads/). Nadaj mu odpowiednie uprawnienia <a href="http://wiki.mybboard.net/index.php/CHMOD%20Files" target="_blank">chmod</a> i spróbuj ponownie.';
$l['req_step_error_avatardir'] = 'Nie można zapisywać do folderu z awatarami (uploads/avatars/). Nadaj mu odpowiednie uprawnienia <a href="http://wiki.mybboard.net/index.php/CHMOD%20Files" target="_blank">chmod</a> i spróbuj ponownie.';
$l['req_step_error_cssddir'] = 'Nie można zapisywać do folderu z arkuszami stylów CSS (css/). Nadaj mu odpowiednie uprawnienia <a href="http://wiki.mybboard.net/index.php/CHMOD%20Files" target="_blank">chmod</a> i spróbuj ponownie.';
$l['req_step_error_tablelist'] = '<div class="error">
<h3>Błąd</h3>
<p>Sprawdzenie wymagań nie powiodło się. Nie można kontynuować instalacji MyBB dopóki poniższe problemy nie zostaną naprawione:</p>
{1}
</div>';


$l['db_step_config_db'] = '<p>Nadszedł czas na ustawienie bazy danych, której MyBB będzie używało do przechowywania danych. Uzupełnij pola danymi udostępnionymi przez Twojego hostingodawcę.</p>';
$l['db_step_config_table'] = '<div class="border_wrapper">
<div class="title">Konfiguracja bazy danych</div>
<table class="general" cellspacing="0">
<tr>
	<th colspan="2" class="first last">Ustawienia bazy danych</th>
</tr>
<tr class="first">
	<td class="first"><label for="dbengine">Silnik bazy danych:</label></td>
	<td class="last alt_col"><select name="dbengine" id="dbengine" onchange="updateDBSettings();">{1}</select></td>
</tr>
{2}
</table>
</div>
<p>Po wypełnieniu wszystkich pól naciśnij przycisk Dalej.</p>';

$l['database_settings'] = "- ustawienia bazy danych";
$l['database_path'] = "Ścieżka do bazy danych:";
$l['database_host'] = "Serwer bazy danych:";
$l['database_user'] = "Nazwa użytkownika:";
$l['database_pass'] = "Hasło:";
$l['database_name'] = "Nazwa bazy danych:";
$l['table_settings'] = " - ustawienia tabel";
$l['table_prefix'] = "Prefiks tabel:";
$l['table_encoding'] = "Kodowanie tabel:";

$l['db_step_error_config'] = '<div class="error">
<h3>Błąd</h3>
<p>Wystąpił jeden lub kilka błędów w konfiguracji bazy danych z informacjami, które podano:</p>
{1}
<p>Po poprawieniu odpowiednich pól możesz kontynuować instalację.</p>
</div>';
$l['db_step_error_invalidengine'] = 'Wybrano niepoprawny silnik bazy danych. Wybierz silnik bazy danych z listy poniżej.';
$l['db_step_error_noconnect'] = 'Nie można połączyć się z bazą danych na serwerze \'{1}\' z podaną nazwą użytkownika i hasłem. Czy na pewno te dane są poprawne?';
$l['db_step_error_nodbname'] = 'Nie można wybrać bazy danych \'{1}\'. Czy na pewno baza danych o tej nazwie istnieje i podany użytkownik ma do niej dostęp?';
$l['db_step_error_missingencoding'] = 'Nie wybrano kodowania tabel. Wybierz kodowanie przed kontynuowaniem. (Jeżeli nie masz pewności co do wyboru, wybierz \'UTF-8 Unicode\')';
$l['db_step_error_sqlite_invalid_dbname'] = 'Nie można używać relatywnych adresów URL dla baz danych SQLite. Użyj ścieżki systemowej (na przykład: /home/user/database.db) dla bazy danych SQLite.';
$l['db_step_error_invalid_tableprefix'] = 'W prefiksie tabel można używać tylko liter, cyfr i znaku podkreślenia (_). Popraw prefiks i spróbuj ponownie.';
$l['db_step_error_tableprefix_too_long'] = 'Wpisany prefiks jest zbyt długi. Maksymalna długość prefiksu to 40 znaków.';
$l['db_step_error_utf8mb4_error'] = 'Aby używać 4-bajtowego kodowania UTF-8 wymagany jest serwer MySQL w wersji 5.5.3 lub nowszej. Wybierz kodowanie, które jest kompatybilne z używanym przez ciebie serwerem MySQL.';

$l['tablecreate_step_connected'] = '<p>Połączenie z bazą danych powiodło się.</p>
<p>Silnik bazy danych: {1} {2}</p>
<p>Zostaną teraz utworzone tabele w bazie danych.</p>';
$l['tablecreate_step_created'] = 'Tworzenie tabeli {1}...';
$l['tablecreate_step_done'] = '<p>Wszystkie tabele zostały utworzone. Naciśnij przycisk Dalej, aby wypełnić je domyślnymi danymi.</p>';

$l['populate_step_insert'] = '<p>Po utworzeniu tabel należy wprowadzić do nich domyślne dane.</p>';
$l['populate_step_inserted'] = '<p>Domyślne dane zostały zapisane w bazie danych. Naciśnij przycisk Dalej, aby zainstalować domyślne style i szablony.</p>';


$l['theme_step_importing'] = '<p>Załadowano i zaimportowano plik domyślnego stylu.</p>';
$l['theme_step_imported'] = '<p>Domyślny styl i szablony zostały zainstalowane. Naciśnij przycisk Dalej, aby ustawić podstawowe opcje Twojego forum.</p>';

$l['config_step_table'] = '<p>Skonfiguruj podstawowe ustawienia takie jak nazwa forum, jego adres a także informacje o Twojej stronie. Te ustawienia mogą później zostać łatwo zmienione w panelu administratora (ACP).</p>
		<div class="border_wrapper">
			<div class="title">Konfiguracja forum</div>
			<table class="general" cellspacing="0">
				<tbody>
				<tr>
					<th colspan="2" class="first last">Szczegóły forum</th>
				</tr>
				<tr class="first">
					<td class="first"><label for="bbname">Nazwa forum:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bbname" id="bbname" value="{1}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="bburl">Adres forum (bez / na końcu):</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bburl" id="bburl" value="{2}" onkeyup="warnUser(this, \'To pole zostało wypełnione automatycznie. Nie zmieniaj jego zawartości, jeśli nie jesteś absolutnie pewny co do zawartości; w przeciwnym razie odnośniki na Twoim forum mogą nie działać poprawnie.\')" onchange="warnUser(this, \'To pole zostało wypełnione automatycznie. Nie zmieniaj jego zawartości, jeśli nie jesteś absolutnie pewny co do zawartości; w przeciwnym razie odnośniki na Twoim forum mogą nie działać poprawnie.\')"/></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Informacje o stronie internetowej</th>
				</tr>
				<tr>
					<td class="first"><label for="websitename">Nazwa strony:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websitename" id="websitename" value="{3}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="websiteurl">Adres strony:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websiteurl" id="websiteurl" value="{4}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Ustawienia ciasteczek (cookie) <a title="Co to jest?" target="_blank" href="http://wiki.mybboard.net/index.php/Cookie_Settings">(?)</a></th>
				</tr>
				<tr>
					<td class="first"><label for="cookiedomain">Domena cookie:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiedomain" id="cookiedomain" value="{5}" onkeyup="warnUser(this, \'To pole zostało wypełnione automatycznie. Nie zmieniaj jego zawartości, jeśli nie jesteś absolutnie pewny co do zawartości; w przeciwnym razie logowanie na Twoim forum może nie działać poprawnie.\')" onchange="warnUser(this, \'To pole zostało wypełnione automatycznie. Nie zmieniaj jego zawartości, jeśli nie jesteś absolutnie pewny co do zawartości; w przeciwnym razie odnośniki na Twoim forum mogą nie działać poprawnie.\')"/></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="cookiepath">Ścieżka cookie:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiepath" id="cookiepath" value="{6}" onkeyup="warnUser(this, \'To pole zostało wypełnione automatycznie. Nie zmieniaj jego zawartości, jeśli nie jesteś absolutnie pewny co do zawartości; w przeciwnym razie logowanie na Twoim forum może nie działać poprawnie.\')" onchange="warnUser(this, \'To pole zostało wypełnione automatycznie. Nie zmieniaj jego zawartości, jeśli nie jesteś absolutnie pewny co do zawartości; w przeciwnym razie odnośniki na Twoim forum mogą nie działać poprawnie.\')"/></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Dane kontaktowe</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="contactemail">Adres email:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="contactemail" id="contactemail" value="{7}" /></td>
				</tr>
				<tr>
				<th colspan="2" class="first last">Ustawienia zabezpieczeń</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="acppin">PIN ACP:</label><br />Pozostaw to pole puste, jeśli nie zamierzasz korzystać z numeru PIN podczas logowania do panelu administratora.</td>
					<td class="last alt_col"><input type="password" class="text_input" name="pin" id="acppin" value="" /></td>
				</tr>
				</tbody>
			</table>
		</div>

	<p>Po uzupełnieniu wszystkich pól naciśnij przycisk Dalej.</p>';

$l['config_step_error_config'] = '<div class="error">
<h3>Błąd</h3>
<p>Wystąpił jeden lub kilka błędów w danych konfiguracyjnych, które podano:</p>
{1}
<p>Po poprawieniu odpowiednich pól możesz kontynuować instalację.</p>
</div>';
$l['config_step_error_url'] = 'Nie podano adresu forum.';
$l['config_step_error_name'] = 'Nie podano nazwy forum.';
$l['config_step_revert'] = 'Kliknij aby przywrócić wstępne wartości.';


$l['admin_step_setupsettings'] = '<p>Zapisano wstępną konfigurację.</p>';
$l['admin_step_insertesettings'] = '<p>Zapisano {1} ustawień w {2} grupach.</p>
<p>Zaktualizowano ustawienia danymi podanymi przez użytkownika.</p>';
$l['admin_step_insertedtasks'] = '<p>Zapisano {1} zaplanowanych zadań.</p>';
$l['admin_step_insertedviews'] = '<p>Zapisano {1} widoków panelu administratora.</p>';
$l['admin_step_createadmin'] ='<p>Należy utworzyć konto administratora do zarządzania forum. Wypełnij poniższy formularz, aby to uczynić.</p>';
$l['admin_step_admintable'] = '<div class="border_wrapper">
			<div class="title">Szczegóły konta administratora</div>

		<table class="general" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2" class="first last">Szczegóły</th>
		</tr>
		</thead>
		<tr class="first">
			<td class="first"><label for="adminuser">Nazwa użytkownika:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminuser" id="adminuser" value="{1}" /></td>
		</tr>
		<tr class="alt_row">
			<td class="first"><label for="adminpass">Hasło:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass" id="adminpass" value="" autocomplete="off" onchange="comparePass()" /></td>
		</tr>
		<tr class="last">
			<td class="first"><label for="adminpass2">Powtórz hasło:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass2" id="adminpass2" value="" autocomplete="off" onchange="comparePass()" /></td>
		</tr>
		<tr>
			<th colspan="2" class="first last">Dane kontaktowe</th>
		</tr>
		<tr class="first last">
			<td class="first"><label for="adminemail">Adres email:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminemail" id="adminemail" value="{2}" /></td>
		</tr>
	</table>
	</div>

	<p>Po uzupełnieniu wszystkich pól naciśnij przycisk Dalej.</p>';

$l['admin_step_error_config'] = '<div class="error">
<h3>Błąd</h3>
<p>Wystąpił jeden lub kilka błędów w danych konta administratora, które podano:</p>
{1}
<p>Po poprawieniu odpowiednich pól możesz kontynuować instalację.</p>
</div>';
$l['admin_step_error_nouser'] = 'Nie podano nazwy użytkownika.';
$l['admin_step_error_nopassword'] = 'Nie podano hasła dla konta administratora.';
$l['admin_step_error_nomatch'] = 'Podane hasła nie są jednakowe.';
$l['admin_step_error_noemail'] = 'Nie podano adresu email dla konta administratora.';
$l['admin_step_nomatch'] = 'Powtórzone hasło nie jest identyczne z tym wpisanym w pierwszym polu. Popraw je aby kontynuować.';

$l['done_step_usergroupsinserted'] = "<p>Importowanie grup użytkowników -";
$l['done_step_admincreated'] = '<p>Tworzenie konta administratora -';
$l['done_step_adminoptions'] = '<p>Zapisywanie uprawnień administratora -';
$l['done_step_cachebuilding'] = '<p>Tworzenie pamięci podręcznej -';
$l['done_step_success'] = '<p class="success">MyBB zostało poprawnie zainstalowane i skonfigurowane.</p>
<p>Dziękujemy za wybranie MyBB. Mamy nadzieję, że zechcesz dołączyć do grona społeczności skupionej wokół MyBB. Jeżeli szukasz pomocy w swoim ojczystym języku odwiedź <a href="http://www.mybboard.pl" title="Polski Support MyBB" target="_blank">Polski Support MyBB</a>.</p>';
$l['done_step_locked'] = '<p>Instalator został zablokowany. Aby go odblokować usuń plik \'lock\' z folderu instalatora.</p><p>Możesz teraz przejść do <a href="../index.php">strony głównej swojego forum</a> lub <a href="../admin/index.php">panelu administratora</a>.</p>';
$l['done_step_dirdelete'] = '<p><strong><span style="colour:red">Usuń ten katalog przed przeglądaniem swojego forum.</span></strong></p>';
$l['done_whats_next'] = '<div class="error"><p><strong>Przenosisz się z innego silnika?</strong></p><p>MyBB oferuje pakiet, który umożliwia łatwe przenoszenie danych z innych silników, a także łączenie wielu forów w jedno. Jeśli dopiero zamierzasz dokonać konwersji, szukasz w dobrym miejscu. Odwiedź stronę <a target="_blank" href="http://www.mybb.com/downloads/merge-system">systemu Merge System</a> aby uzyskać więcej informacji.</p>';

/* UPGRADE LANGUAGE VARIABLES */
$l['upgrade'] = "Aktualizacja";
$l['upgrade_welcome'] = "<p>Witaj w kreatorze aktualizacji MyBB {1}.</p><p>Przed kontynuowaniem upewnij się, że znasz wersję MyBB z której chcesz dokonać aktualizacji.</p><p><strong>Zalecane jest wykonanie pełnej kopii bazy danych zanim przystąpisz do procesu aktualizacji</strong>. W przypadku, gdy coś pójdzie nie tak, będzie można łatwo przywrócić forum do poprzedniego stanu. Upewnij się, że Twoje kopie zapasowe są kompletne.</p><p>Naciśnij przycisk Dalej dokładnie JEDEN RAZ, aby rozpocząć proces aktualizacji. Załadowanie strony może zająć trochę czasu w zależności od wielkości Twojego forum.</p><p>Wybierz posiadaną <strong>aktualnie</strong> wersję MyBB i kliknij przycisk Dalej, aby kontynuować.</p>";
$l['upgrade_templates_reverted'] = 'Przywrócono szablony';
$l['upgrade_templates_reverted_success'] = "<p>Niektóre szablony zostały zastąpione przez te dostępne w tej wersji. Naciśnij przycisk Dalej, aby kontynouwać proces aktualizacji.</p>";
$l['upgrade_settings_sync'] = 'Synchronizacja ustawień';
$l['upgrade_settings_sync_success'] = "<p>Ustawienia forum zostały zsynchronizowane z tymi dostępnymi w najnowszej wersji MyBB.</p><p>Wprowadzono {1} nowych ustawień do {2} grup.</p><p>Aby zakończyć proces aktualizacji naciśnij przycisk Dalej.</p>";
$l['upgrade_datacache_building'] = 'Tworzenie pamięci podręcznej';
$l['upgrade_building_datacache'] = '<p>Tworzenie nowej pamięci podręcznej...';
$l['upgrade_continue'] = 'Naciśnij przycisk Dalej, aby kontynuować';
$l['upgrade_locked'] = "<p>Instalator został zablokowany. Aby go odblokować, usuń plik 'lock' z folderu instalatora.</p><p>Możesz teraz przejść do <a href=\"../index.php\">strony głównej swojego forum</a> lub <a href=\"../{1}/index.php\">panelu administratora</a>.</p>";
$l['upgrade_removedir'] = 'Usuń ten katalog przed przeglądaniem zaktualizowanej wersji MyBB.';
$l['upgrade_congrats'] = "<p>MyBB zostało zaktualizowane do wersji {1}.</p>{2}<p><strong>Co dalej?</strong></p><ul><li>Użyj narzędzia 'Znajdź zmienione' w sekcji Style i szablony w panelu administratora, aby odnaleźć szablony przywrócone do wersji pierwotnej podczas procesu aktualizacji. Możesz je zmienić według własnych potrzeb lub przywrócić do stanu oryginalnego.</li><li>Upewnij się, że forum jest w pełni funkcjonalne.</li></ul>";
$l['upgrade_template_reversion'] = "Ostrzeżenie procesu przywracania szablonów";
$l['upgrade_template_reversion_success'] = "<p>Wszystkie potrzebne zmiany w bazie danych zostały wykonane.</p><p>Ten proces aktualizacji wymaga, aby wszystkie szablony zostały zamienione na te dostępne w paczce z aktualizacją. Wykonaj kopię zmienionych szablonów przed kliknięciem przycisku Dalej.";
$l['upgrade_send_stats'] = "<p><input type=\"checkbox\" name=\"allow_anonymous_info\" value=\"1\" id=\"allow_anonymous\" checked=\"checked\" /> <label for=\"allow_anonymous\"> Wyślij anonimowe statystyki dotyczące konfiguracji serwera do twórców MyBB</label> (<a href=\"http://docs.mybb.com/Anonymous_Statistics.html\" style=\"color: #555;\" target=\"_blank\"><small>Jakie informacje zostaną wysłane?</small></a>)</p>";

$l['please_login'] = "Wymagane zalogowanie";
$l['login'] = "Zaloguj się";
$l['login_desc'] = "Wpisz login i hasło, aby rozpocząć proces aktualizacji. Do wykonania tej operacji wymagane jest posiadanie praw administratora.";
$l['login_username'] = "Login";
$l['login_password'] = "Hasło";
$l['login_password_desc'] = "Wielkość liter ma znaczenie.";

/* Error messages */
$l['development_preview'] = "<div class=\"error\"><h2 class=\"fail\">Ostrzeżenie</h2><p>Ta wersja MyBB jest oznaczona jako developer preview i powinna być używana jedynie w celach testowych.</p><p>W związku z tym oficjalne wsparcie techniczne dla tej wersji MyBB, oprócz używanych wtyczek i styli, nie jest zapewnione. Poprzez kontynuowanie instalacji/aktualizacji godzisz się na korzystanie z forum na własne ryzyko.</p></div>";
$l['locked'] = 'Instalator jest zablokowany. Aby go odblokować usuń plik \'lock\' z folderu instalatora';
$l['no_permision'] = "Do wykonania tej operacji wymagane są uprawnienia administratora, których nie posiadasz.<br /><br />Jeśli chcesz spróbować ponownie, <a href=\"upgrade.php?action=logout&amp;logoutkey={1}\">wyloguj się</a> i zaloguj ponownie na konto z uprawnieniami administratora.";

$l['task_versioncheck_ran'] = "Zadanie sprawdzania aktualności wersji zostało pomyślnie uruchomione.";



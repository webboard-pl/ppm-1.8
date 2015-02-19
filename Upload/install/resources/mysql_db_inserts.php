<?php
/**
 * MyBB 1.8
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 * Website: http://www.mybb.com
 * License: http://www.mybb.com/about/license
 *
 */

$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (1, 'Archiwum ZIP', 'application/zip', 'zip', 1024, 'images/attachtypes/zip.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (2, 'Obraz JPG', 'image/jpeg', 'jpg', 500, 'images/attachtypes/image.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (3, 'Dokument tekstowy', 'text/plain', 'txt', 200, 'images/attachtypes/txt.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (4, 'Obraz GIF', 'image/gif', 'gif', 500, 'images/attachtypes/image.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (5, 'Plik Adobe Photoshop', 'application/x-photoshop', 'psd', 1024, 'images/attachtypes/psd.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (6, 'Plik PHP', 'application/octet-stream', 'php', 500, 'images/attachtypes/php.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (7, 'Obraz PNG', 'image/png', 'png', 500, 'images/attachtypes/image.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (8, 'Dokument Microsoft Word', 'application/msword', 'doc', 1024, 'images/attachtypes/doc.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (9, 'Plik HTM', 'application/octet-stream', 'htm', 100, 'images/attachtypes/html.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (10, 'Plik HTML', 'application/octet-stream', 'html', 100, 'images/attachtypes/html.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (11, 'Obraz JPEG', 'image/jpeg', 'jpeg', 500, 'images/attachtypes/image.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (12, 'Archiwum GZIP', 'application/x-gzip', 'gz', 1024, 'images/attachtypes/tar.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (13, 'Archiwum TAR', 'application/x-tar', 'tar', 1024, 'images/attachtypes/tar.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (14, 'Arkusz stylów CSS', 'text/css', 'css', 100, 'images/attachtypes/css.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (15, 'Dokument Adobe PDF', 'application/pdf', 'pdf', 2048, 'images/attachtypes/pdf.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (16, 'Mapa bitowa', 'image/bmp', 'bmp', 500, 'images/attachtypes/image.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (17, 'Dokument Microsoft Word 2007', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'docx', 1024, 'images/attachtypes/doc.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (18, 'Arkusz kalkulacyjny Microsoft Excel', 'application/vnd.ms-excel', 'xls', 1024, 'images/attachtypes/xls.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (19, 'Arkusz kalkulacyjny Microsoft Excel 2007', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'xlsx', 1024, 'images/attachtypes/xls.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (20, 'Prezentacja Microsoft PowerPoint', 'application/vnd.ms-powerpoint', 'ppt', 1024, 'images/attachtypes/ppt.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (21, 'Prezentacja PowerPoint 2007', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'pptx', 1024, 'images/attachtypes/ppt.png');";

$inserts[] = "INSERT INTO mybb_calendars (name,disporder,startofweek,showbirthdays,eventlimit,moderation,allowhtml,allowmycode,allowimgcode,allowvideocode,allowsmilies) VALUES ('Domyślny kalendarz',1,0,1,4,0,0,1,1,1,1);";

$inserts[] = "INSERT INTO mybb_forums (fid, name, description, linkto, type, pid, parentlist, disporder, active, open, threads, posts, lastpost, lastposter, lastposttid, allowhtml, allowmycode, allowsmilies, allowimgcode, allowvideocode, allowpicons, allowtratings, usepostcounts, usethreadcounts, password, showinjump, style, overridestyle, rulestype, rulestitle, rules) VALUES (1, 'Kategoria', '', '', 'c', 0, '1', 1, 1, 1, 0, 0, 0, '0', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 0, 0, 0, '', '');";
$inserts[] = "INSERT INTO mybb_forums (fid, name, description, linkto, type, pid, parentlist, disporder, active, open, threads, posts, lastpost, lastposter, lastposttid, allowhtml, allowmycode, allowsmilies, allowimgcode, allowvideocode, allowpicons, allowtratings, usepostcounts, usethreadcounts, password, showinjump, style, overridestyle, rulestype, rulestitle, rules) VALUES (2, 'Dział', '', '', 'f', 1, '1,2', 1, 1, 1, 0, 0, 0, '0', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 0, 0, 0, '', '');";

$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (1, 1, 'Rejestracja', 'Obowiązki i przywileje zarejestrowanych.', 'Większość funkcji forum jest dostępne tylko dla osób zarejestrowanych. Rejestracja jest darmowa i trwa niecałe 5 minut. Po rejestracji możesz pisać wiadomości, ustawiać opcje dotyczące wyglądu i zarządzać swoim profilem. Do korzystania z niektórych funkcji wymagana jest rejestracja - są to: subskrypcje, zmienianie stylów, dostęp do prywatnego notatnika, pisanie prywatnych wiadomości do innych użytkowników.', 1, 1, 1);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (2, 1, 'Aktualizowanie profilu', 'Zmienianie ustawień profilu.', 'Po rejestracji na forum, możesz zmieniać informacje osobiste w profilu, takie jak: komunikatory, Twoje hasło, lub - jeśli potrzeba - adres e-mail. Wszystkie z tych informacji i ustawień można ustawić w [panelu użytkownika] znajdującym się u góry po prawej. Następnie kliknij [Edytuj profil] i aktualizuj swoje ustawienia. Pamiętaj o kliknięciu w przycisk [Zatwierdź], aby zmiany zostały zachowane.', 1, 1, 2);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (3, 1, 'Ciasteczka w MyBB', 'MyBB używa ciasteczek do przechowywania Twoich informacji o zalogowaniu.', 'MyBulletinBoard tworzy ciasteczka (cookies) w których przechowuje informacje o zalogowaniu. Ciasteczka to małe pliki przechowywane na Twoim komputerze; ciasteczka utworzone przez daną stronę działają tylko na tej stronie. Ciasteczka MyBB sprawdzają kiedy ostatnio i czy w ogóle przeczytano poszczególne wątki. Aby wyczyścić wszystkie ciasteczka, kliknij <a href=\"misc.php?action=clearcookies&amp;my_post_key={1}\">tutaj</a>.', 1, 1, 3);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (4, 1, 'Logowanie i wylogowywanie', 'Jak się zalogować i wylogować.', 'Gdy się zalogujesz, ciasteczka na Twoim komputerze zostaną ustawione tak, abyś mógł przeglądać forum zalogowany bez ciągłej potrzeby logowania. Wylogowanie czyści Twoje ciasteczka dotyczące logowania. Aby zalogować, kliknij [Logowanie] u góry, pod nawigacją. Aby się wylogować, kliknij [Wyloguj] w tym samym miejscu. Wyczyszczenie ciasteczek w Twojej przeglądarce da ten sam efekt.', 1, 1, 4);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (5, 2, 'Pisanie nowego wątku', 'Rozpoczynanie wątku na forum.', 'Jeśli chcesz utworzyć nowy wątek na forum, wybierz dział w którym chcesz go napisać, a następnie kliknij na przycisk [Nowy wątek]. Jeśli zobaczysz komunikat \"Nie masz uprawnień\" oznacza to, że nie masz uprawnień na pisanie w danym dziale.', 1, 1, 1);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (6, 2, 'Odpowiadanie w wątku', 'Odpowiadanie na forum.', 'Wybierz wątek, w którym chcesz odpowiedzieć. Kliknij na przycisk [Odpowiedz] znajdujący się u góry ekranu. Pamiętaj również, że administrator mógł nałożyć restrykcje, więc możliwe, że nie będziesz mieć możliwości odpowiadania w niektórych działach. Moderator może usunąć wątek, w którym przez określony czas nie będzie odpowiedzi.', 1, 1, 2);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (7, 2, 'MyCode', 'Wszystko o MyCode.', 'Możesz używać MyCode - to uproszczona wersja HTML. <p>\n\r[b]Pogrubiony tekst[/b]\n\r&nbsp;&nbsp;&nbsp;<b>Pogrubiony tekst</b> <p>[i]Kursywa[/i]\n\r&nbsp;&nbsp;&nbsp;<i>Kursywa</i> <p>[u]Podkreślenie[/u]\n\r&nbsp;&nbsp;&nbsp;<u>Podkreślenie</u> <p>[s]Przekreślenie[/s]\n\r&nbsp;&nbsp;&nbsp;<strike>Przekreślenie</strike> <p>\n\r[url]http://www.przykladowy.adres.pl/[/url]\n\r&nbsp;&nbsp;&nbsp;<a href=\"http://www.przykladowy.adres.pl/\">http://www.przykladowy.adres.pl/</a> <p>[url=http://www.strona.pl/]Tytuł[/url]\n\r&nbsp;&nbsp;&nbsp;<a href=\"http://www.strona.pl/\">Tytuł</a> <p>[email]mojemail@serwer.pl[/email]\n\r&nbsp;&nbsp;&nbsp;<a href=\"mailto:mojemail@serwer.pl\">mojemail@serwer.pl</a> <p>[email=mojemail@serwer.pl]Napisz do mnie![/email]\n\r&nbsp;&nbsp;&nbsp;<a href=\"mailto:mojemail@serwer.pl\">Napisz do mnie!</a> <p>[email=mojemail@serwer.pl?subject=temat]e-mail z tematem[/email]\n\r&nbsp;&nbsp;&nbsp;<a href=\"mailto:mojemail@serwer.pl?subject=temat\">email z tematem</a> <p>\n\r[quote]Cytat[/quote]\n\r&nbsp;&nbsp;&nbsp;<quote>Cytat</quote> <p>[code]kod[/code]\n\r&nbsp;&nbsp;&nbsp;<code>kod</code> <p>\n\r[img]http://www.php.net/images/php.gif[/img]\n\r&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\"> <p>[img=50x50]http://www.php.net/images/php.gif[/img]\n\r&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\" width=\"50\" height=\"50\"> <p>\n\r[color=red]Czerwony kolor[/color]\n\r&nbsp;&nbsp;&nbsp;<font color=\"red\">Czerwony kolor</font> <p>[size=medium]Rozmiar medium[/size]\n\r&nbsp;&nbsp;&nbsp;<span style=\"font-size: medium;\">Rozmiar medium</span> <p>[font=Tahoma]Czcionka Tahoma[/font]\n\r&nbsp;&nbsp;&nbsp;<font face=\"Tahoma\">Czcionka Tahoma</font> <p>\n\r[align=center]Wycentrowany[/align]<div align=\"center\">Wycentrowany</div> <p>[align=right]Wyrównany do prawej[/align]<div align=\"right\">Wyrównany do prawej</div> <p>\n\r[list]<br />[*]Punkt #1\n\r[*]Punkt #2\n\r[*]Punkt #3\n\r[/list]\n\r<ul><li>Punkt #1</li><li>Punkt #2</li><li>Punkt #3</li> </ul> <p>Możesz również ustalić typ punktowania - dostępne typy: liczbowy [list=1] i alfabetyczny [list=a].</p>', 1, 1, 3);";

$inserts[] = "INSERT INTO mybb_helpsections (sid, name, description, usetranslation, enabled, disporder) VALUES (1, 'Rejestracja i podstawy', 'Podstawowe informacje, pomocne w rejestracji i tworzeniu profilu.', 1, 1, 1);";
$inserts[] = "INSERT INTO mybb_helpsections (sid, name, description, usetranslation, enabled, disporder) VALUES (2, 'Pisanie', 'Podstawy używania forum - tworzenie wątków, odpowiadanie itp.', 1, 1, 2);";

$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(1, 'Błąd', 'images/icons/bug.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(2, 'Ostrzeżenie', 'images/icons/exclamation.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(3, 'Pytanie', 'images/icons/question.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(4, 'Uśmiech', 'images/icons/smile.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(5, 'Smutek', 'images/icons/sad.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(6, 'Oczko', 'images/icons/wink.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(7, 'Duży uśmiech', 'images/icons/biggrin.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(8, 'Język', 'images/icons/tongue.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(9, 'Kostka', 'images/icons/brick.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(10, 'Serce', 'images/icons/heart.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(11, 'Informacja', 'images/icons/information.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(12, 'Żarówka', 'images/icons/lightbulb.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(13, 'Muzyka', 'images/icons/music.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(14, 'Zdjęcie', 'images/icons/photo.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(15, 'Tęcza', 'images/icons/rainbow.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(16, 'Szok', 'images/icons/shocked.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(17, 'Gwiazdka', 'images/icons/star.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(18, 'Kciuk w górę', 'images/icons/thumbsdown.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(19, 'Kciuk w dół', 'images/icons/thumbsup.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(20, 'Wideo', 'images/icons/video.png');";

$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, regex, length, maxlength, required, registration, profile, postbit, viewableby, editableby, postnum) VALUES (1, 'Miejscowość', 'Gdzie mieszkasz?', 1, 'text', '', 0, 255, 0, 0, 1, 0, -1, -1, 0);";
$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, regex, length, maxlength, required, registration, profile, postbit, viewableby, editableby, postnum) VALUES (2, 'O sobie', 'Wpisz kilka zdań o swojej osobie.', 2, 'textarea', '', 0, 0, 0, 0, 1, 0, -1, -1, 0);";
$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, regex, length, maxlength, required, registration, profile, postbit, viewableby, editableby, postnum) VALUES (3, 'Płeć', 'Wybierz swoją płeć z listy.', 0, 'select\nnie wybrano\nmężczyzna\nkobieta\ninna', '', 0, 0, 0, 0, 1, 0, -1, -1, 0);";

$inserts[] = "INSERT INTO mybb_questions (qid, question, answer, shown, correct, incorrect, active) VALUES(1, 'Jaki jest wynik działania 2+2?', '4\ncztery', 0, 0, 0, 1);";

$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(1, 'Uśmiech', ':)', 'images/smilies/smile.gif', 1, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(2, 'Oczko', ';)', 'images/smilies/wink.gif', 2, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(3, 'Cwaniak', ':cool:', 'images/smilies/cool.gif', 3, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(4, 'Duży uśmiech', ':D', 'images/smilies/biggrin.gif', 4, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(5, 'Język', ':P', 'images/smilies/tongue.gif', 5, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(6, 'Wywracanie oczami', ':rolleyes:', 'images/smilies/rolleyes.gif', 6, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(7, 'Nieśmiały', ':shy:', 'images/smilies/shy.gif', 7, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(8, 'Smutny', ':(', 'images/smilies/sad.gif', 8, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(9, 'Małpka', ':at:', 'images/smilies/at.png', 9, 0);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(10, 'Anioł', ':angel:', 'images/smilies/angel.gif', 10, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(11, 'Zły', ':@', 'images/smilies/angry.gif', 11, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(12, 'Zawstydzony', ':blush:', 'images/smilies/blush.gif', 12, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(13, 'Zdezorientowany', ':s', 'images/smilies/confused.gif', 13, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(14, 'Podejrzany', ':dodgy:', 'images/smilies/dodgy.gif', 14, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(15, 'Wykrzyknik', ':exclamation:', 'images/smilies/exclamation.png', 15, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(16, 'Serce', ':heart:', 'images/smilies/heart.gif', 16, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(17, 'Huh', ':huh:', 'images/smilies/huh.gif', 17, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(18, 'Pomysł', ':idea:', 'images/smilies/lightbulb.png', 18, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(19, 'Śpiący', ':sleepy:', 'images/smilies/sleepy.gif', 19, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(20, 'Niezdecydowany', ':-/', 'images/smilies/undecided.gif', 20, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(21, 'Płacz', ':cry:', 'images/smilies/cry.png', 21, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(22, 'Chory', ':sick:', 'images/smilies/sick.png', 22, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(23, 'Strzałka', ':arrow:', 'images/smilies/arrow.png', 23, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(24, 'Moje', ':my:', 'images/smilies/my.png', 24, 1);";

#Emotikony wykonane przez Polski Support MyBB - http://www.mybboard.pl
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(25, 'Cyklop', ':cyklop:', 'images/smilies/cyklop.gif', 25, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(26, 'Diabeł', ':diabel:', 'images/smilies/devil.gif', 26, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(27, 'O matko', ':facepalm:', 'images/smilies/facepalm.gif', 27, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(28, 'Firefox', ':ff:', 'images/smilies/ff.gif', 28, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(29, 'Szczęśliwy', ':lol:', 'images/smilies/happy.gif', 29, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(30, 'Ninja', ':ninja:', 'images/smilies/ninja.gif', 30, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(31, 'Opera', ':opera:', 'images/smilies/opera.gif', 31, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(32, 'Plask', ':plask:', 'images/smilies/plask.gif', 32, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(33, 'Zawstydzony', ':zawstydzony:', 'images/smilies/shamefaced.gif', 33, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(34, 'Szczerbol', ':szczerbol:', 'images/smilies/szczerbol.gif', 34, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(35, 'Szczerbol', ':E', 'images/smilies/szczerbol2.gif', 35, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(36, 'Ściana', ':sciana:', 'images/smilies/wall.gif', 36, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(37, 'Zdziwko', ':zdziwko:', 'images/smilies/wow.gif', 37, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(38, 'Przytulanie', ':przytul:', 'images/smilies/wub.gif', 38, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(39, 'xD', 'xD', 'images/smilies/xd.gif', 39, 1);";


$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Google','Googlebot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Bing','bingbot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Alexa Internet','ia_archiver');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Ask.com','Teoma');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Baidu','Baiduspider');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Yandex','YandexBot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Blekko','Blekkobot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Facebook','facebookexternalhit');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Twitter','Twitterbot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Internet Archive','archive.org_bot');";

$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('1','calendar','<lang:group_calendar>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('2','editpost','<lang:group_editpost>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('3','forumbit','<lang:group_forumbit>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('4','forumjump','<lang:group_forumjump>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('5','forumdisplay','<lang:group_forumdisplay>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('6','index','<lang:group_index>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('7','error','<lang:group_error>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('8','memberlist','<lang:group_memberlist>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('9','multipage','<lang:group_multipage>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('10','private','<lang:group_private>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('11','portal','<lang:group_portal>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('12','postbit','<lang:group_postbit>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('13','posticons','<lang:group_posticons>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('14','showthread','<lang:group_showthread>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('15','usercp','<lang:group_usercp>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('16','online','<lang:group_online>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('17','moderation','<lang:group_moderation>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('18','nav','<lang:group_nav>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('19','search','<lang:group_search>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('20','showteam','<lang:group_showteam>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('21','reputation','<lang:group_reputation>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('22','newthread','<lang:group_newthread>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('23','newreply','<lang:group_newreply>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('24','member','<lang:group_member>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('25','warnings','<lang:group_warning>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('26','global','<lang:group_global>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('27','header','<lang:group_header>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('28','managegroup','<lang:group_managegroup>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('29','misc','<lang:group_misc>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('30','modcp','<lang:group_modcp>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('31','announcement','<lang:group_announcement>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('32','polls','<lang:group_polls>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('33','post','<lang:group_post>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('34','printthread','<lang:group_printthread>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('35','report','<lang:group_report>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('36','smilieinsert','<lang:group_smilieinsert>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('37','stats','<lang:group_stats>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('38','xmlhttp','<lang:group_xmlhttp>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('39','footer','<lang:group_footer>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('40','video','<lang:group_video>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('41','sendthread','<lang:group_sendthread>','1');";

$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (1, 0, 'Świeżo zarejestrowany', 1, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (2, 1, 'Początkujący', 2, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (3, 50, 'Użytkownik', 3, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (4, 250, 'Dużo pisze', 4, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (5, 750, 'Stały bywalec', 5, '');";


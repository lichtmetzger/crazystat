<?php
// Password_protect.php
define ('L_PASSWORD_MES_ERR_NEW_INVALID', 'Nova lozinka je prazana ili nije istovjetana s ponavljanjem.');
define ('L_PASSWORD_MES_ERR_NOT_CHANGED', 'Lozinka nije promijenjena!');
define ('L_PASSWORD_MES_ERR_RETRY', 'Pokušaj');
define ('L_PASSWORD_MES_ERR_WRITING_FAILED', '. Zastićena datoteka nije mogla biti otvorena za pisanje . Provjerite prava (CHMOD ili pisati lock) u datoteke.');
define ('L_PASSWORD_MES_OK_CHANGED', 'Lozinka je uspješno promijenjena!');
define ('L_PASSWORD_MES_ERR_NOT_LOGGED_IN', 'Sesija je istekla ili niste prijavljeni .');
define ('L_PASSWORD_MES_ERR_RELOGIN', 'Relogin');

define ('L_PASSWORD_PLEASE_LOGIN', 'Molimo, prijavite se');
define ('L_PASSWORD_USERNAME', 'Ime');
define ('L_PASSWORD_PASSWORD', 'Lozinka');
define ('L_PASSWORD_DO_NOT_COUNT', 'Ne broji hitove s ovog računala ');
define ('L_PASSWORD_PLEASE_WAIT', 'Molimo pričekajte ... ');
define ('L_PASSWORD_MES_ERR_WRONG_DATA', '. Korisničko ime ili lozinka pogrešna. Pristup je odbijen.');
define ('L_PASSWORD_MES_OK_THANK_YOU', 'Hvala Vam sto koristite CrazyStat!');
define ('L_PASSWORD_MES_SUPPORT_CRAZYSTAT', '<a href="http://en.christosoft.de/Support"> Molimo podršku CrazyStat </ a>!');
define ('L_PASSWORD_NO_JAVASCRIPT', 'Pozornost lozinka mora biti prenesena nekodirano jer Vaš preglednik ne podrzava JavaScript!');
define ('L_PASSWORD_CHANGE_PASSWORD', 'Promjena lozinke');
define ('L_PASSWORD_OLD_PASSWORD', 'Stara lozinka');
define ('L_PASSWORD_NEW_PASSWORD', 'Nova lozinka');
define ('L_PASSWORD_REPEAT_PASSWORD', 'Ponovite lozinku');
define ('L_PASSWORD_CHANGE_AND_LOGIN', 'Promjene i prijava');
define ('L_PASSWORD_MSG_ERR_NOMD5', '! Pozornost Nova lozinka mora biti prenešena nekodirano jer $config_stat_password_md5 je nevažeća <br /> Preporučuje se spremanje šifriranu lozinku (vidi FAQ)..');
define ('L_PASSWORD_MSG_ERR_NO_MD5JS', 'Pažnja! lozinka mora biti prenesena nekodiran jer je datoteka src/extensions/md5.js nedostaje. Ne preporučuje se izbrisati ovu ekstenziju. možete pronaći nestale datoteke u <a href = "http://en.christosoft.de/_download/crazystat_current_version" target = "_blank"> CrazyStat download-file </ a> ');

// Index.php (neki koriste about.php i)
define ('L_INDEX_WELCOME', 'Dobrodošli!');
define ('L_INDEX_THIS_IS_CRAZYSTAT', 'Ovo je CrazyStat, udoban, sveobuhvatan i besplatna statistika-skripta s dodatnim brojacem.');
define ('L_INDEX_INFORMATION', 'informacije i ažuriranja može se naći na:');
define ('L_INDEX_INSTALLED_VERSION', 'Installed verziju:');
define ('L_INDEX_CURRENT_VERSION', 'Trenutna verzija:');
define ('L_INDEX_NEWS', 'Vijesti od');

// About.php
define ('L_ABOUT_PLEASE_SEE', 'Molimo pogledajte');
define ('L_ABOUT_README','Pročitaj');
define ('L_ABOUT_FAQ', 'FAQ');
define ('L_ABOUT_FOR_HELP', 'Za pomoć.');

// Index.php password_protect.php i
define ('L_LOGIN_MENU_HOME', 'Home');
define ('L_LOGIN_MENU_LOGIN', 'Prijava');
define ('L_LOGIN_MENU_CHANGE_PASSWORD', 'Promjena lozinke');

// Calendar.php
define ('L_CALENDAR_TITLE', 'Definiraj razdoblje');
define ('L_CALENDAR_MSG_ERR_YEAR_INVALID', 'Neispravna godina, molimo Vas da koristite samo znamenke.');
define ('L_CALENDAR_MSG_ERR_MONTH_ONLY', 'Pogreška:. Molimo odaberite mjesec <i> i </ i> godinu dana');
define ('L_CALENDAR_MSG_ERR_NO_JS', 'Kako da koristite preglednik koji ne podržava JavaScript ili ste isključili JavaScript, morate kliknuti za nastavak:');
define ('L_CALENDAR_LIMIT_YEAR',' Limit po godini');
define ('L_CALENDAR_LIMIT_MONTH',' Limit po mjesecu');
define ('L_CALENDAR_LIMIT_PERIOD',' Limit po vremenskom razdoblju');
define ('L_CALENDAR_MONTH_ABR', 'Sij Velj Ožu Tra Svi Lip Srp Kol Ruj Lis Stu Pro');
define ('L_CALENDAR_MONTH_NAMES', 'Siječanj Veljača Ožujak Travanj Svibanj Lipanj Srpanj Kolovoz Rujan Listopad Studeni Prosinac');
define ('L_CALENDAR_WEEKDAYS_ABR', 'SMTWTF S');
define ('L_CALENDAR_WEEKDAYS', 'Nedjelja Ponedjeljak Utorak Srijeda Četvrtak Petak Subota');
define ('L_CALENDAR_TODAY', 'Danas');
define ('L_CALENDAR_WEEK_START_DAY', 0);
define ('L_CALENDAR_START', 'Početak');
define ('L_CALENDAR_END', 'Kraj');
define ('L_CALENDAR_RELATIVE', 'Relativna');
define ('L_CALENDAR_ABSOLUTE', 'Apsolutnog');
define ('L_CALENDAR_RELATIVE_PRESET','Postavke');
define ('L_CALENDAR_RELATIVE_CUSTOM', 'Prilagođen');
define ('L_CALENDAR_RELATIVE_THIS_WEEK', 'Ovaj tjedan');
define ('L_CALENDAR_RELATIVE_THIS_MONTH','Ovaj mjesec');
define ('L_CALENDAR_RELATIVE_THIS_YEAR', 'Ova godina');
define ('L_CALENDAR_RELATIVE_CHECK', 'Provjeri');
define ('L_CALENDAR_RELATIVE_HELP', 'Molimo Vas pročitajte helpdatoteku o tome kako to radi.');

// Create_counter_image.php
define ('L_COUNTER_FILE_NOT_FOUND', 'brojač stil nije pronađen');
define ('L_COUNTER_GIF_NOT_SUPPORTED', 'gif-datoteke ne podržava');
define ('L_COUNTER_TYPE_NOT_SUPPORTED', 'file-tip ne podržava');

// Nojs.php
define ('L_NOJS_TITLE', 'Nema JavaScript');
define ('L_NOJS_TEXT',
'Nažalost <p> Vaš preglednik ne podržava JavaScript ili ste ga onemogućili. Preporučuje se da koristite JavaScript-compliant browser, npr. <a href="http://www.mozilla.com/"> Firefox </ a>, ili uključite JavaScript u vašem pregledniku, ako je onemogućen. </ p>
  <p> U nekim slučajevima ova poruka pojavljuje ako je došlo do pogreške u JavaScript. Ako je Vaš preglednik podržava JavaScript i da je omogućen , molimo vratite se i pokušajte ponovo. </ p>
  <p>
  Ova poruka se može pojaviti, ako JavaScript se izvršava dok stranica nije u potpunosti učitana. <br />
  U tom slučaju, molim, pričekajte da se stranica u potpunosti učita i kliknite opet na ikonu ste upravo kliknuli.
  </ p> ');
  
// Stat.php
define ('L_STAT_MSG_ERR_COUNTER_FILE', 'Korumpiran ili RC?');
define ('L_STAT_MSG_ERR_READ_ERROR', 'Pogreška pri čitanju (prava)?');
define ('L_STAT_MSG_ERR_WRITE_ERROR', 'Napisati pogrešku (pravima)?');

// Analyze.php
define ('L_ANALYZE_MSG_OK_CACHE_EXISTED', 'Došlo je do datoteke predmemorije za log u novonastale mapu predmemorije Ovaj file je obrisan..');
define ('L_ANALYZE_MSG_ERR_LOGFOLDER_INEXISTENT', 'folder u kojem logfiles bi trebao biti smješten ne postoji ');
define ('L_ANALYZE_MSG_ERR_CREATE_FOLDER', 'Stvaranje mape ');
define ('L_ANALYZE_MSG_ERR_FILE_CREATION_FAILED', 'Datoteka nije mogla biti kreirana ');
define ('L_ANALYZE_MSG_ERR_FILE_NOT_FOUND', 'Log-file nije moguće pronaći Molimo pokušajte očistiti predmemoriju..');
define ('L_ANAYLZE_MSG_ERR_CHECK_RIGHTS', 'Molim vas kliknite na "usr / config.php" i prava mape u kojima su logfiles bi trebao biti smješten.');
define ('L_ANAYLZE_MSG_ERR_CACHE_NOT_DELETED', 'predmemorija-datoteka se ne može izbrisati Molimo provjerite prava..');
define ('L_ANALYZE_UNKNOWN_FILE', 'Nepoznao');
define ('L_ANALYZE_UNKNOWN_SYSTEM', 'Drugima');
define ('L_ANALYZE_UNKNOWN_BROWSER', 'Drugima');
define ('L_ANALYZE_UNKNOWN_RESOLUTION', 'ne JavaScripta');
define ('L_ANALYZE_UNSAVED', 'Nije spremljeno');
define ('L_ANALYZE_MSG_ERR_COUNTERFILE_INEXISTENT', 'Counter-datoteka se ne može pročitati pokušava stvoriti novi..');
define ('L_ANALYZE_MSG_ERR_COUNTERFILE_CREATION_FAILED', 'Stvaranje pogreška(prava?) Nema podataka izgubljeno, ali CrazyStat radi neučinkovito . Vidi Česta pitanja?...');
define ('L_ANALYZE_MSG_OK_COUNTERILE_CREATED', 'Counterfile uspješno izrađen To nije problem, nema podataka je izgubljen..');
define ('L_ANALYZE_MSG_ERR_CACHE_SAVE_FAILED', 'Ne mogu se otvoriti za pisanje Molim provjerite prava (CHMOD -. vidi <a href="../doc/README_en.html" target="_blank"> README_en.html </ a>). ');
define ('L_ANALYZE_MSG_ERR_INCOMPLETE', 'statistika ne može u potpunosti biti izrađen.');
define ('L_ANALYZE_MSG_ERR_TIMEOUT', 'Vjerojatno maksimalno vrijeme izvršenja je premašila ("Fatalna pogreška: Maksimalna izvršenje vrijeme ... sekunde prelazi".) To je ograničenje na poslužitelj u ovom slučaju, CrazyStat može nastaviti generiranja statistiku.. Možda ćete morati kliknuti \'Nastavak \' više puta ');
define ('L_ANALYZE_MSG_ERR_MEMORY_LIMIT', 'Vjerojatno je memorija-limit je premasen ("Dopustiti pamcenje određena mjera od iscrpljeni ..."). U tom slucaju, pokusajte povecati <a href = "../doc/config_settings_en.html # config_stat_memory_limit" > $config_stat_memory_limit </ a> ');
define ('L_ANALYZE_MSG_ERR_UNKNOWN_ERROR', 'Vjerojatno je došlo do pogreške (sve poruke o pogreškama iznad) Možda (vjerojatno) maksimalno vrijeme izvršenja ili je memorija granica je premašila CrazyStat možete pokušati nastaviti proizvodnju i statistiku?...');
define ('L_ANALYZE_MSG_ERR_CURRENT_POSITION', 'Trenutna pozicija');
define ('L_ANALYZE_MSG_ERR_GUEST_CLEAR_CACHE', 'Nemate ovlasti za brisanje predmemorije. Vidi <a href="../doc/config_settings_en.html#config_stat_guest_cache_delete" target="_blank"> dolara config_stat_guest_cache_delete </ a> i <a href = target = "_blank"> $config_stat_user_cache_delete </ a> ') ;
define ('L_ANALYZE_MSG_ERR_CACHE_BROKEN', '. Cache-file čini se da je slomljena Molimo Vas da učinite sljedeće kako biste riješili taj problem:');

// Show_log.php
define ('L_SHOWLOG_TITLE', 'Prijava');
define ('L_SHOWLOG_ALLLOGS', 'Sve logfiles');
define ('L_SHOWLOG_MSG_ERR_INVALID_ID', 'Nema logfile s ovim id.');
define ('L_SHOWLOG_MSG_ERR_LOGFILE_NOTFOUND', 'logfile se pokazala ne postoji Molimo provjerite je li sljedeće datoteka postoji.');
define ('L_SHOWLOG_END_OF_LOGFILE', 'Kraj logfile');
define ('L_SHOWLOG_NEXT_LOGFILE', 'Sljedeća logfile');
define ('L_SHOWLOG_PREV_LOGFILE', 'logfile Prethodna');
define ('L_SHOWLOG_PREV_PAGE', 'Prethodna stranica');
define ('L_SHOWLOG_NEXT_PAGE', 'Sljedeća stranica');
define ('L_SHOWLOG_PAGE', 'Stranica');
define ('L_SHOWLOG_FORWARD', 'Naprijed');
define ('L_SHOWLOG_BACKWARD', 'natrag');
define ('L_SHOWLOG_TEXT', 'Tekst');
define ('L_SHOWLOG_TABLE', 'Tablica');
define ('L_SHOWLOG_FILTERED', 'Filtrirani');
define ('L_SHOWLOG_ROWS_FOUND', 'Red(ovi) nađe se!');

// Logs.php
define ('L_LOGS_SEARCH_CONTAINS', 'Sadrži');
define ('L_LOGS_SEARCH_CONTAINS_NOT', 'Ne sadrži');
define ('L_LOGS_SEARCH_UNEQUAL', 'Nejednako');
define ('L_LOGS_VALUE', 'Vrijednost');
define ('L_LOGS_TITLE', 'Dnevnici');
define ('L_LOGS_BACKUP', 'Kopija');
define ('L_LOGS_VIEW', 'Pregled');
define ('L_LOGS_FILTER_TITLE', 'Traži unutar stabla (filter)');
define ('L_LOGS_ADD_CONDITION', 'Dodaj stanje');
define ('L_LOGS_SEARCH_SUBMIT', 'Traži');
define ('L_LOGS_SEARCH_WAIT', 'Pretraživanje u logove ... Molimo pričekajte.');
define ('L_LOGS_MSG_ERR_NOFILE', 'Ne postoji ,datoteka je odabrana.');
define ('L_LOGS_MSG_CONFIM_DELETE', 'Želite li zaista trajno izbrišite sljedeće datoteke?');
define ('L_LOGS_SEARCH', 'Traži');
define ('L_LOGS_SELECT_ALL', 'Izaberi sve');
define ('L_LOGS_SELECT_NONE', 'Poništite odabir okvira za sve ');
define ('L_LOGS_SELECTED', 'Odabrani');
define ('L_LOGS_MSG_ERR_GUEST_DOWNLOAD', 'Nemate ovlasti za preuzimanje logfiles. Vidi <a href="../doc/config_settings_en.html#config_stat_guest_log_download" target="_blank"> $ config_stat_guest_log_download </ a> i <a href = " .. / doc / config_settings_en.html # config_stat_user_log_download "target =" _blank "> $ config_stat_user_log_download </ a>');
define ('L_LOGS_MSG_ERR_GUEST_DELETE', 'Nemate ovlasti za brisanje logfiles. Vidi <a href="../doc/config_settings_en.html#config_stat_guest_log_delete" target="_blank"> $ config_stat_guest_log_delete </ a> i <a href = " .. / doc / config_settings_en.html # config_stat_user_log_delete "target =" _blank "> $ config_stat_user_log_delete </ a>');

// Show_stat.php
define ('L_SHOWSTAT_PRESETS', 'Postavke');
define ('L_SHOWSTAT_PRESETS_DEFAULT', 'Default');
define ('L_SHOWSTAT_PRESETS_DEFAULT_OLD', 'Stari Default');
define ('L_SHOWSTAT_PRESETS_IP1', 'Blokiraj po IP');
define ('L_SHOWSTAT_PRESETS_IP0', 'Ne blokiraj IP od');
define ('L_SHOWSTAT_PRESETS_PIE_CHARTS', 'Pie charts');
define ('L_SHOWSTAT_PRESETS_BAR_CHARTS', 'Bar charts');
define ('L_SHOWSTAT_PRESETS_THIS_YEAR', 'Ova godina');
define ('L_SHOWSTAT_PRESETS_THIS_MONTH',' Ovaj mjesec ');
define ('L_SHOWSTAT_PRESETS_ALL', 'Prikaži sve (sve)');
define ('L_SHOWSTAT_PRESETS_LIMIT', 'Prikaži samo prvi (limit)');
define ('L_SHOWSTAT_PRESETS_SCROLL1', 'Modul-scrollbars na');
define ('L_SHOWSTAT_PRESETS_SCROLL0', 'Modul-scrollbars off');
define ('L_SHOWSTAT_PRESETS_TOTAL_TIME', 'Ukupno vrijeme');
define ('L_SHOWSTAT_PRESETS_CURRENT_PERIOD', 'Tekuće razdoblje');
define ('L_SHOWSTAT_PRESETS_MANAGE', 'Upravljanje Postavkama');
define ('L_SHOWSTAT_CLEAR_CACHE', 'Obriši cache');
define ('L_SHOWSTAT_REFRESH_ALL', 'Osvježi sve');
define ('L_SHOWSTAT_LOGS', 'Dnevnici');
define ('L_SHOWSTAT_MSG_OK_WAIT', 'Operacija ste tražili traje trenutak Vjerojatno statistika se mora regenerirati što može potrajati neko vrijeme..');

// Preset specifične
define ('L_PRESET_DEFAULT_YEAR', 'Posljednjih 12 mjeseci');
define ('L_PRESET_DEFAULT_MONTH', 'mjesec \' vrijeme ');
define ('L_PRESET_DEFAULT_WEEK', 'Zadnjih 7 dana ');
define ('L_PRESET_DEFAULT_DAY', 'U zadnja 24 sata');

// Module_out.php
define ('L_MODULEOUT_HITS_PI', 'Ukupno Pregleda stranica');
define ('L_MODULEOUT_HITS_VISITS', 'Ukupno Posjeta');
define ('L_MODULEOUT_HITS_THIS_MONTH', 'Posjetio ovaj mjesec');
define ('L_MODULEOUT_HITS_LAST_MONTH', 'Posjetio prošlog mjeseca');
define ('L_MODULEOUT_HITS_USER_ONLINE', 'Korisnika');
define ('L_MODULEOUT_HITS_MAX_DAY', 'Maksimalna Posjeta dan');
define ('L_MODULEOUT_HITS_AV_PER_DAY', 'Prosječne posjeta dnevno');
define ('L_MODULEOUT_HITS_HITS_PER_USER', 'Prosječna Pregled stranica / Posjetioci');
define('L_MODULEOUT_HITS_VISIT_TIME_AVG','Average visiting time');
define('L_MODULEOUT_HITS_VISIT_TIME_TOTAL','Total visiting time');
define ('L_MODULEOUT_IP0', 'Pregleda stranica (ne blokira IP)');
define ('L_MODULEOUT_IP1', '(Posjeta blokirana IP)');
define ('L_MODULEOUT_NO_DATA', 'Nema podataka');
define ('L_MODULEOUT_TOTAL_TIME', 'Ukupno vrijeme');
define ('L_MODULEOUT_PIE_CHART', 'Pie chart');
define ('L_MODULEOUT_BAR_CHART', 'Bar chart');
define ('L_MODULEOUT_SORT_BY', 'Kliknite za sortiranje po');
define ('L_MODULEOUT_SORT_BY_NUM', 'Kliknite da biste sortirali po broju');
define ('L_MODULEOUT_SORT_BY_PER', 'Kliknite za sortiranje po postotku');
define ('L_MODULEOUT_SORT_BY_RATIO', 'Kliknite za sortiranje po omjeru');
define ('L_MODULEOUT_NUM', 'Broj');
define ('L_MODULEOUT_NUM_ABR', 'Broj.');
define ('L_MODULEOUT_PER', 'Perc.');
define ('L_MODULEOUT_TOTAL', 'Ukupno');
define ('L_MODULEOUT_RATIO', 'Omjer');
define ('L_MODULEOUT_DOMAINS', 'Domene');
define ('L_MODULEOUT_PAGES', 'Stranice');
define ('L_MODULEOUT_COLORS', 'Boje');
define ('L_MODULEOUT_CONSOLE_PERIOD', 'Razdoblje');
define ('L_MODULEOUT_CONSOLE_PERIOD_DEFINE', 'Definiraj razdoblje');
define ('L_MODULEOUT_CLICK_IP1', 'Kliknite za posjetitelje (blokirana IP).');
define ('L_MODULEOUT_CLICK_IP0', 'Kliknite za Page-prikaza (ne blokira IP).');
define ('L_MODULEOUT_CONSOLE_ALL', 'Prikaži sve');
define ('L_MODULEOUT_CONSOLE_ALL_ABR', 'Sve');
define ('L_MODULEOUT_CONSOLE_SHOW_ONLY', 'Prikazi samo');
define ('L_MODULEOUT_CONSOLE_TREE_ABR', 'Omoguci prikaz stabla ');
define ('L_MODULEOUT_CONSOLE_TREE', 'Omogući tri prikaza i sortiranja Referiranja je domaćin');
define ('L_MODULEOUT_CONSOLE_TREE_OFF', 'Onemogući stabla, popis svih upućivali');
define ('L_MODULEOUT_CONSOLE_TREE_OFF_ABR', 'Onemogući stabla pogled');
define ('L_MODULEOUT_CONSOLE_TREE_OTHER', 'Promijeni stablo proširenje');
define ('L_MODULEOUT_CONSOLE_TREE_COLLAPSE', 'Slom stablo');
define ('L_MODULEOUT_CONSOLE_TREE_EXPAND', 'Proširite stablo');
define ('L_MODULEOUT_PRETTYINT_SUFFIX', 'm bn trilion kvadrilion quintillion sextillion');

// Preset_editor.php
define ('L_PRESETEDITOR_MANAGE_PRESETS', 'Upravljanje postavkama');
define ('L_PRESETEDITOR_ID', 'ID');
define ('L_PRESETEDITOR_CACHE_SIZE',' Cache velicina');
define ('L_PRESETEDITOR_SAVE_PRESET', 'Save unaprijed');
define ('L_PRESETEDITOR_SAVE_PRESET_TEXT', 'Ovo ce spremiti trenutne postavke (sve od njih) kao unaprijed podesena za buduću uporabu . Sve postavke se automatski detektiraju..');
define ('L_PRESETEDITOR_SAVE_PRESET_MSG_ABS', 'Upozorenje: sadrzi apsolutne trenutne postavke vremenske raspone za sljedeci modul (i)');
define ('L_PRESETEDITOR_SAVE_PRESET_MSG_ABS2', 'Apsolutno vremenski rasponi nema puno smisla spremiti kao unaprijed!');
define ('L_PRESETEDITOR_SAVE_PRESET_DUPLICATE', 'Ovo postavke se  tocno isto kao sto su:');
define ('L_PRESETEDITOR_SAVE_PRESET_DUPLICATE_CANNOT_BE_SAVED', 'Vi samo mozete spremiti postavke koji su drugaciji od onih postojecih.');
define ('L_PRESETEDITOR_CACHE',' Cache to unaprijed');
define ('L_PRESETEDITOR_CACHE_NOT', 'Ne predmemoriju ovu Postavke');
define ('L_PRESETEDITOR_CACHE_UNCACHEABLE', 'Ove postavke ne mogu biti spremljene');
define('L_PRESETEDITOR_MSG_ERR_GUEST','Nemate ovlasti za upravljanje postavkama. Vidi <a href="../doc/config_settings_en.html#config_stat_guest_preset_manage" target="_blank">$config_stat_guest_preset_manage</a> i  <a href="../doc/config_settings_en.html#config_stat_user_preset_manage" target="_blank">$config_stat_user_preset_manage</a>.');
define ('L_PRESETEDITOR_MSG_PRESET_DELETE', 'Da li stvarno zelite izbrisati ove postavke');
define ('L_PRESETEDITOR_MSG_PRESET_DELETED','Postavke izbrisana');
define ('L_PRESETEDITOR_MSG_PRESET_SAVED', 'Spremljeno podesenu');

// Anonymous_redirect.php
define ('L_ANONYMOUS_REDIRECT', 'Ti si prebačen na anonimno:');

// Izbornik-tekstovi
define ('L_MENU_WEBSITE', 'Posjeti Web stranice');
define ('L_MENU_ABOUT', 'O CrazyStat');
define ('L_MENU_STATISTIC', 'Otvoreno Statistika');

// Modula
define ('L_MODULES_HIT_P', 'Posjeti');
define ('L_MODULES_HIT_S', 'Posjeta');
define ('L_MODULES_WEEKDAY_P', 'Tjedni');
define ('L_MODULES_WEEKDAY_S', 'Tjedan');
define ('L_MODULES_MONTH_P', 'Mjeseci');
define ('L_MODULES_MONTH_S', 'Mjesec');
define ('L_MODULES_DAY_P', 'Dana');
define ('L_MODULES_DAY_S', 'Dan');
define ('L_MODULES_HOUR_P', 'Sati');
define ('L_MODULES_HOUR_S', 'Sat');
define ('L_MODULES_BROWSER_P', 'Preglednici');
define ('L_MODULES_BROWSER_S', 'Preglednik');
define ('L_MODULES_FILE_P', 'Datoteke');
define ('L_MODULES_FILE_S', 'Datoteka');
define ('L_MODULES_RESOLUTION_P', 'Rezolucije');
define ('L_MODULES_RESOLUTION_S', 'Rezolucija');
define ('L_MODULES_COLORDEPTH_P', 'Boja Dubine');
define ('L_MODULES_COLORDEPTH_S', 'Dubina boja');
define ('L_MODULES_SYSTEM_P', 'Sustavi');
define ('L_MODULES_SYSTEM_S', 'Sustav');
define ('L_MODULES_REFERER_P', 'Uputila');
define ('L_MODULES_REFERER_S', 'Uputila');
define ('L_MODULES_KEYWORD_P', 'Ključne riječi');
define ('L_MODULES_KEYWORD_S', 'Riječ');

// Opće poruke o pogreškama
define ('L_MSG_ERR_INCLUDE_ONLY', 'Ova datoteka se ne može otvoriti izravno.');
define ('L_MSG_ERR_NO_MODULE', 'Nema modulu ili ne postoji modul.');
define ('L_MSG_ERR', 'Pogreška');
define ('L_MSG_ERR_CONTINUE', 'Nastavi');

// Opći tekstovi
define ('L_LOGOUT', 'Odjava');
define ('L_CLOSE', 'Zatvori');
define ('L_OK', 'OK');
define ('L_NUMBER', 'Ne');
define ('L_TIME', 'Vrijeme');
define ('L_DATE', 'Datum');
define ('L_IP', 'IP:');
define ('L_USERAGENT', 'User Agent');
define ('L_BIT', 'Bit');
define ('L_DATE_FORMAT', 'Y / m / d');
define ('L_TIME_FORMAT', 'H: i: s');
define ('L_GO', 'Idi');
define ('L_PLEASE_WAIT', 'Molimo pričekajte ... ');
define ('L_HITS', 'Posjeta');
define ('L_VISITS', 'Posjete');
define ('L_PAGEIMPRESSIONS', 'Pregledi stranice');
define ('L_BACK', 'Povratak');
define ('L_CANCEL', 'Odustani');
define ('L_DELETE', 'Obriši');
define ('L_REFRESH', 'Osvježi');
define ('L_AND', 'i');
define ('L_LANGUAGE', 'Jezik');
define ('L_NAME', 'Naziv');
define('L_DECIMAL_SEPARATOR','.');
define('L_THOUSANDS_SEPARATOR',',');
define('L_AVG_SYMBOL','~');


define('L_MINUTES','minute');
define('L_MINUTES_ABR','min');
define('L_SECONDS','sekunde');
define('L_SECONDS_ABR','s');
define('L_HOURS','sati');
define('L_HOURS_ABR','h');
define('L_DAYS','dani');
define('L_days_ABR','d');



?>

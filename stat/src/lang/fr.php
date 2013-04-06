<?php
// French language file for CrazyStat. Thanks to Yannou90 for the translation!
// posted in forum: http://forum.christosoft.de/viewtopic.php?p=1162#p1162

// password_protect.php
define('L_PASSWORD_MES_ERR_NEW_INVALID','Nouveau mot de passe vide ou n&#39est pas identique.');
define('L_PASSWORD_MES_ERR_NOT_CHANGED','Mot de passe inchangé!');
define('L_PASSWORD_MES_ERR_RETRY','Réessayer');
define('L_PASSWORD_MES_ERR_WRITING_FAILED','Le fichier de mot de passe ne peut être ouvert en écriture , veuillez vérifier les droits.');
define('L_PASSWORD_MES_ERR_SEE_README','Bienvenue! Il semble que vous n&#39avez pas installé correctement CrazyStat . Référez vous à l&#39<a href="../doc/README_en.html" target="_blank">Readme</a> installation de CrazyStat.');
define('L_PASSWORD_MES_OK_CHANGED','Mot de passe changé!');
define('L_PASSWORD_MES_ERR_NOT_LOGGED_IN','Session expirée ou vous n&#39êtes pas connecté.');
define('L_PASSWORD_MES_ERR_RELOGIN','Reconnexion');

define('L_PASSWORD_PLEASE_LOGIN','Connectez-vous');
define('L_PASSWORD_USERNAME','Nom d&#39utilisateur');
define('L_PASSWORD_PASSWORD','Mot de passe');
define('L_PASSWORD_DO_NOT_COUNT','Ne pas comptabiliser les accès de cet ordinateur');
define('L_PASSWORD_PLEASE_WAIT','Veuillez patienter');
define('L_PASSWORD_MES_ERR_WRONG_DATA','Nom d&#39utilisateur ou mot de passe incorrecte , accès refusé .');
define('L_PASSWORD_MES_ERR_WRONG_DATA_SEE_FAQ','Référez vous à <a href="../doc/faq_en.html#faq5">FAQ</a> dans le cas où vous avez oublié votre mot de passe et devez le réinitialiser.');
define('L_PASSWORD_MES_OK_THANK_YOU','Merci d&#39utiliser CrazyStat!');
define('L_PASSWORD_MES_SUPPORT_CRAZYSTAT','<a href="http://en.christosoft.de/Support">Supporter CrazyStat!</a>');
define('L_PASSWORD_NO_JAVASCRIPT','Attention! Le mot de passe doit être transféré en clair parce que votre navigateur ne supporte pas JavaScript!');
define('L_PASSWORD_CHANGE_PASSWORD','Changer de mot de passe');
define('L_PASSWORD_OLD_PASSWORD','Ancien mot de passe');
define('L_PASSWORD_NEW_PASSWORD','Nouveau mot de passe');
define('L_PASSWORD_REPEAT_PASSWORD','Répéter le mot de passe');
define('L_PASSWORD_CHANGE_AND_LOGIN','Changer et se connecter');
define('L_PASSWORD_MSG_ERR_NOMD5','Attention! Le nouveau mot de passe doit être transféré en clair parce que $config_stat_password_md5 est réglé à false.<br />Il est recommandé de le régler à true  pour enregistrer le mot de passe crypté (voir FAQ).');
define('L_PASSWORD_MSG_ERR_NO_MD5JS','Attention! Le mot de passe doit être transféré en clair car le fichier src/extensions/md5.js est manquant. Il n&#39est pas recommandé de supprimer cette extension. Vous pouvez trouver le fichier manquant dans la section <a href="http://en.christosoft.de/_download/crazystat_current_version" target="_blank">téléchargement de CrazyStat</a>.');

// index.php (some used by about.php as well)
define('L_INDEX_WELCOME','Bienvenue!');
define('L_INDEX_THIS_IS_CRAZYSTAT','CrazyStat, un simple et compréhensible script de statistiques.');
define('L_INDEX_INFORMATION','Informations et mises à jour peuvent être trouvées à:');
define('L_INDEX_INSTALLED_VERSION','Version installé:');
define('L_INDEX_CURRENT_VERSION','Version actuel:');
define('L_INDEX_NEWS','Nouvelles ici ');

// about.php
define('L_ABOUT_PLEASE_SEE','Veuillez voir');
define('L_ABOUT_README','Readme');
define('L_ABOUT_FAQ','FAQ');
define('L_ABOUT_FOR_HELP','pour de l&#39aide.');

// password_protect.php and index.php
define('L_LOGIN_MENU_HOME','Acceuil');
define('L_LOGIN_MENU_LOGIN','Connexion');
define('L_LOGIN_MENU_CHANGE_PASSWORD','Changer le mot de passe');

// calendar.php
define('L_CALENDAR_TITLE','Definir la période');
define('L_CALENDAR_MSG_ERR_YEAR_INVALID','Année invalide , utilisez seulement des chiffres.');
define('L_CALENDAR_MSG_ERR_MONTH_ONLY','Erreur.Sélectionnez le mois <i>et</i> l&#39année .');
define('L_CALENDAR_MSG_ERR_NO_JS','Comme vous utilisez un navigateur qui ne supporte pas JavaScript ou vous avez désactivé JavaScript, vous devez cliquer pour continuer:');
define('L_CALENDAR_LIMIT_YEAR','Limite par années');
define('L_CALENDAR_LIMIT_MONTH','Limite par mois');
define('L_CALENDAR_LIMIT_PERIOD','Limite par période de temps');
define('L_CALENDAR_MONTH_ABR','Jan Fev Mar Avr Mai Juin Juil Aout Sept Oct Nov Dec');
define('L_CALENDAR_MONTH_NAMES','Janvier Février Mars Avril Mai Juin Juillet Août Septembre Octobre Novembre Décembre');
define('L_CALENDAR_WEEKDAYS_ABR','D L M M J V S');
define('L_CALENDAR_WEEKDAYS','Dimanche Lundi Mardi Mercredi Jeudi Vendredi Samedi');
define('L_CALENDAR_TODAY','Aujourd&#39hui');
define('L_CALENDAR_WEEK_START_DAY',0);
define('L_CALENDAR_START','Début');
define('L_CALENDAR_END','Fin');
define('L_CALENDAR_RELATIVE','Relative');
define('L_CALENDAR_ABSOLUTE','Absolue');
define('L_CALENDAR_RELATIVE_PRESET','Préréglage');
define('L_CALENDAR_RELATIVE_CUSTOM','Personnalisé');
define('L_CALENDAR_RELATIVE_THIS_WEEK','Cette semaine');
define('L_CALENDAR_RELATIVE_THIS_MONTH','Ce mois');
define('L_CALENDAR_RELATIVE_THIS_YEAR','Cette année');
define('L_CALENDAR_RELATIVE_CHECK','Vérifier');
define('L_CALENDAR_RELATIVE_HELP','Référez-vous au manuel d&#39aide.');

// create_counter_image.php
define('L_COUNTER_FILE_NOT_FOUND','Style de compteur non trouvé');
define('L_COUNTER_GIF_NOT_SUPPORTED','Fichier gif non supporté');
define('L_COUNTER_TYPE_NOT_SUPPORTED','Type de fichier non supporté');

// nojs.php
define('L_NOJS_TITLE','Pas de JavaScript');
define('L_NOJS_TEXT',' <p>Malheureusement votre navigateur ne supporte pas JavaScript ou vous l&#39avez désactivé. Il est recommandé d&#39utiliser un navigateur compatible JavaScript, ex. <a href="http://www.mozilla.com/">Firefox</a>, ou d&#39activer JavaScript depuis votre navigateur.</p>  <p>Dans certains cas, ce message apparaît si une erreur s&#39est glissée dans un JavaScript. Si votre navigateur accepte JavaScript et qu&#39il est activé, veuillez recommencer.</p>  <p>  Ce message peut également apparaître, si un JavaScript est exécuté alors que le site n&#39est pas entièrement chargé.<br />  Dans ce cas, revenez en arrière, attendez que le site soit entièrement chargé et cliquez à nouveau sur l&#39icône.  </p>');
 
// stat.php
define('L_STAT_MSG_ERR_COUNTER_FILE','corrupt or RC?');
define('L_STAT_MSG_ERR_READ_ERROR','Erreur en lecture (Droits?)');
define('L_STAT_MSG_ERR_WRITE_ERROR','Erreur en écriture (Droits?)');

// analyze.php
define('L_ANALYZE_MSG_OK_CACHE_EXISTED','Il y avait un fichier de cache pour les journaux dans le dossier nouvellement créé. Ce fichier a été supprimé du cache.');
define('L_ANALYZE_MSG_ERR_LOGFOLDER_INEXISTENT','Le dossier dans lequel les fichiers journaux doivent être placés n&#39existe pas');
define('L_ANALYZE_MSG_ERR_CREATE_FOLDER','Créer le dossier');
define('L_ANALYZE_MSG_ERR_FILE_CREATION_FAILED','Le fichier ne peut être créé');
define('L_ANALYZE_MSG_ERR_FILE_NOT_FOUND','Le fichier de log ne peut être trouvé , veuillez rafraichir le cache.');
define('L_ANAYLZE_MSG_ERR_CHECK_RIGHTS','Vérifiez "usr/config.php" et les droits du dossier dans lequel les fichiers journaux doivent être placés.');
define('L_ANAYLZE_MSG_ERR_CACHE_NOT_DELETED','Un fichier en cache n&#39a pas pu être supprimé. Vérifier les droits.');
define('L_ANALYZE_UNKNOWN_FILE','Inconnu');
define('L_ANALYZE_UNKNOWN_SYSTEM','Autres');
define('L_ANALYZE_UNKNOWN_BROWSER','Autres');
define('L_ANALYZE_UNKNOWN_RESOLUTION','Pas de JavaScript');
define('L_ANALYZE_UNSAVED','Non sauvegardé');
define('L_ANALYZE_MSG_ERR_COUNTERFILE_INEXISTENT','Le fichier compteur ne peut-être lu , création d&#39un nouveau.');
define('L_ANALYZE_MSG_ERR_COUNTERFILE_CREATION_FAILED','Creation échoué (droits?). Pas de données perdues, mais CrazyStat ne fonctionne pas correctement. Voir la  FAQ.');
define('L_ANALYZE_MSG_OK_COUNTERILE_CREATED','Fichier compteur créé avec succès. Ce n&#39est pas un problème, aucune donnée n&#39a été perdue.');
define('L_ANALYZE_MSG_ERR_CACHE_SAVE_FAILED','Ne peut-être ouvert en écriture . Vérifiez les droits (CHMOD - voir <a href="../doc/README_en.html" target="_blank">README_en.html</a>).');
define('L_ANALYZE_MSG_ERR_INCOMPLETE','Les statistiques ne sont pas complétement générées.');
define('L_ANALYZE_MSG_ERR_TIMEOUT','Probablement que le temps d&#39exécution maximal a été dépassé ("Fatal error: Maximum execution time of ... seconds exceeded"). Il s&#39agit d&#39une limitation de votre serveur. Dans ce cas, CrazyStat ne peut continuer à générer les statistiques. Peut-être devriez-vous cliquer sur &#39Continuer &#39plus d&#39une fois.');
define('L_ANALYZE_MSG_ERR_MEMORY_LIMIT','Probablement que la limite mémoire a été dépassée ("Allowed memory size of ... exhausted"). Dans ce cas , essayez de l&#39augmenter <a href="../doc/config_settings_en.html#config_stat_memory_limit">$config_stat_memory_limit</a>.');
define('L_ANALYZE_MSG_ERR_UNKNOWN_ERROR','Probablement qu&#39une erreur s&#39est produite (voir les messages d&#39erreur ci-dessus?). Peut-être que le temps maximal d&#39exécution ou que la limite de mémoire a été dépassée. CrazyStat peut essayer de continuer à générer les statistiques.');
define('L_ANALYZE_MSG_ERR_CURRENT_POSITION','Position actuel');
define('L_ANALYZE_MSG_ERR_GUEST_CLEAR_CACHE','Vous n&#39êtes pas autorisé à vider le cache. Voir <a href="../doc/config_settings_en.html#config_stat_guest_cache_delete" target="_blank">$config_stat_guest_cache_delete</a> and <a href="../doc/config_settings_en.html#config_stat_user_cache_delete" target="_blank">$config_stat_user_cache_delete</a>.');
define('L_ANALYZE_MSG_ERR_CACHE_BROKEN','Le cache semble brisé , veuillez suivre ces instructions:');

// show_log.php
define('L_SHOWLOG_TITLE','Log');
define('L_SHOWLOG_ALLLOGS','Tous les logs');
define('L_SHOWLOG_MSG_ERR_INVALID_ID','Pas de log avec cet id.');
define('L_SHOWLOG_MSG_ERR_LOGFILE_NOTFOUND','Le fichier de log ne peut-être montré , vérifiez qu&#39il existe:');
define('L_SHOWLOG_END_OF_LOGFILE','Fin du fichier de log');
define('L_SHOWLOG_NEXT_LOGFILE','Fichier suivant');
define('L_SHOWLOG_PREV_LOGFILE','Fichier précédent');
define('L_SHOWLOG_PREV_PAGE','Page précédente');
define('L_SHOWLOG_NEXT_PAGE','Page suivante');
define('L_SHOWLOG_PAGE','Page');
define('L_SHOWLOG_FORWARD','Suivant');
define('L_SHOWLOG_BACKWARD','Précédent');
define('L_SHOWLOG_TEXT','Texte');
define('L_SHOWLOG_TABLE','Table');
define('L_SHOWLOG_FILTERED','filtré');
define('L_SHOWLOG_ROWS_FOUND','ligne (s) trouvée(s)');

// logs.php
define('L_LOGS_SEARCH_CONTAINS','contient');
define('L_LOGS_SEARCH_CONTAINS_NOT','ne contient pas');
define('L_LOGS_SEARCH_UNEQUAL','inégal');
define('L_LOGS_VALUE','Valeur');
define('L_LOGS_TITLE','Fichier de log');
define('L_LOGS_BACKUP','Sauvegarde');
define('L_LOGS_VIEW','Voir');
define('L_LOGS_FILTER_TITLE','Rechercher (filtre)');
define('L_LOGS_ADD_CONDITION','Ajouter une condition');
define('L_LOGS_SEARCH_SUBMIT','Chercher');
define('L_LOGS_SEARCH_WAIT','Recherche en cours.');
define('L_LOGS_MSG_ERR_NOFILE','Pas de fichiers sélectionnés.');
define('L_LOGS_MSG_CONFIM_DELETE','Souhaitez-vous réellemnt supprimer ces fichiers?');
define('L_LOGS_SEARCH','Chercher');
define('L_LOGS_SELECT_ALL','Tout sélectionner');
define('L_LOGS_SELECT_NONE','Tout désélectionner');
define('L_LOGS_SELECTED','sélectionné');
define('L_LOGS_MSG_ERR_GUEST_DOWNLOAD','Vous n&#39êtes pas autorisé à télécharger ces fichiers . Voir <a href="../doc/config_settings_en.html#config_stat_guest_log_download" target="_blank">$config_stat_guest_log_download</a> et <a href="../doc/config_settings_en.html#config_stat_user_log_download" target="_blank">$config_stat_user_log_download</a>.');
define('L_LOGS_MSG_ERR_GUEST_DELETE','Vous n&#39êtes pas autorisé à supprimer ces fichiers . Voir <a href="../doc/config_settings_en.html#config_stat_guest_log_delete" target="_blank">$config_stat_guest_log_delete</a> et <a href="../doc/config_settings_en.html#config_stat_user_log_delete" target="_blank">$config_stat_user_log_delete</a>.');

// show_stat.php
define('L_SHOWSTAT_PRESETS','Préréglages');
define('L_SHOWSTAT_PRESETS_DEFAULT','Défaut');
define('L_SHOWSTAT_PRESETS_DEFAULT_OLD','Ancien par Défaut');
define('L_SHOWSTAT_PRESETS_IP1','Bloquer par IP');
define('L_SHOWSTAT_PRESETS_IP0','Ne pas bloquer par IP');
define('L_SHOWSTAT_PRESETS_PIE_CHARTS','Diagrammes circulaires');
define('L_SHOWSTAT_PRESETS_BAR_CHARTS','Diagrammes à barres');
define('L_SHOWSTAT_PRESETS_THIS_YEAR','Cette année');
define('L_SHOWSTAT_PRESETS_THIS_MONTH','Ce mois');
define('L_SHOWSTAT_PRESETS_ALL','Tout montrer (tout)');
define('L_SHOWSTAT_PRESETS_LIMIT','Montrer seulement le premier (limite)');
define('L_SHOWSTAT_PRESETS_SCROLL1','Module-scrollbars on');
define('L_SHOWSTAT_PRESETS_SCROLL0','Module-scrollbars off');
define('L_SHOWSTAT_PRESETS_TOTAL_TIME','Temps total');
define('L_SHOWSTAT_PRESETS_CURRENT_PERIOD','Periode actuelle');
define('L_SHOWSTAT_PRESETS_MANAGE','Gérer les Préréglages');
define('L_SHOWSTAT_CLEAR_CACHE','Vider le cache');
define('L_SHOWSTAT_REFRESH_ALL','Tout rafraichir');
define('L_SHOWSTAT_LOGS','Logs');
define('L_SHOWSTAT_MSG_OK_WAIT','L&#39opération demande un certain temps');

// preset-specific
define('L_PRESET_DEFAULT_YEAR','derniers 12 mois');
define('L_PRESET_DEFAULT_MONTH','sur un mois');
define('L_PRESET_DEFAULT_WEEK','7 derniers jours');
define('L_PRESET_DEFAULT_DAY','24 dérnières heures');

// module_out.php
define('L_MODULEOUT_HITS_PI','Total des Pages Vues');
define('L_MODULEOUT_HITS_VISITS','Total des Visites');
define('L_MODULEOUT_HITS_THIS_MONTH','Visites du mois');
define('L_MODULEOUT_HITS_LAST_MONTH','Visites ce dernier mois');
define('L_MODULEOUT_HITS_USER_ONLINE','En ligne');
define('L_MODULEOUT_HITS_MAX_DAY','Visites maximum sur 1 jour');
define('L_MODULEOUT_HITS_AV_PER_DAY','Rapport Visites/Jours');
define('L_MODULEOUT_HITS_HITS_PER_USER','Rapport Vues/Visites');
define('L_MODULEOUT_HITS_VISIT_TIME_AVG','Moyenne du temps de visite');
define('L_MODULEOUT_HITS_VISIT_TIME_TOTAL','Temps total de visite');
define('L_MODULEOUT_IP0','Page vues (Not blocked by IP)');
define('L_MODULEOUT_IP1','Visites (Blocked by IP)');
define('L_MODULEOUT_NO_DATA','pas de données');
define('L_MODULEOUT_TOTAL_TIME','temps total');
define('L_MODULEOUT_PIE_CHART','Circulaires');
define('L_MODULEOUT_BAR_CHART','Barre');
define('L_MODULEOUT_SORT_BY','Arranger');
define('L_MODULEOUT_SORT_BY_NUM','Arranger par nombre');
define('L_MODULEOUT_SORT_BY_PER','Arranger par pourcentage');
define('L_MODULEOUT_SORT_BY_RATIO','Arranger par ratio');
define('L_MODULEOUT_NUM','Nombre');
define('L_MODULEOUT_NUM_ABR','Num.');
define('L_MODULEOUT_PER','Perc.');
define('L_MODULEOUT_TOTAL','Total');
define('L_MODULEOUT_RATIO','Ratio');
define('L_MODULEOUT_DOMAINS','Domaines');
define('L_MODULEOUT_PAGES','Pages');
define('L_MODULEOUT_COLORS','couleurs');
define('L_MODULEOUT_CONSOLE_PERIOD','Periode');
define('L_MODULEOUT_CONSOLE_PERIOD_DEFINE','Definir la periode');
define('L_MODULEOUT_CLICK_IP1','Click par visiteurs (blocked by IP).');
define('L_MODULEOUT_CLICK_IP0','Click par pages vues (not blocked by IP).');
define('L_MODULEOUT_CONSOLE_ALL','Tout montrer');
define('L_MODULEOUT_CONSOLE_ALL_ABR','Tout');
define('L_MODULEOUT_CONSOLE_SHOW_ONLY','Ne montrer que');
define('L_MODULEOUT_CONSOLE_TREE_ABR','Afficher l&#39arbre');
define('L_MODULEOUT_CONSOLE_TREE','Afficher l&#39arbre et arranger les référents par hosts');
define('L_MODULEOUT_CONSOLE_TREE_OFF','Ne pas Afficher l&#39arbre , lister tous les référents');
define('L_MODULEOUT_CONSOLE_TREE_OFF_ABR','Ne pas Afficher l&#39arbre');
define('L_MODULEOUT_CONSOLE_TREE_OTHER','Changer l&#39extension de  l&#39arbre');
define('L_MODULEOUT_CONSOLE_TREE_COLLAPSE','Plier');
define('L_MODULEOUT_CONSOLE_TREE_EXPAND','Déplier');
define('L_MODULEOUT_PRETTYINT_SUFFIX','m bn trillion quadrillion quintillion sextillion');

// preset_editor.php
define('L_PRESETEDITOR_MANAGE_PRESETS','Gérer les préréglages');
define('L_PRESETEDITOR_ID','ID');
define('L_PRESETEDITOR_CACHE_SIZE','Poid du cache');
define('L_PRESETEDITOR_SAVE_PRESET','Sauvegarder le préréglage');
define('L_PRESETEDITOR_SAVE_PRESET_TEXT','Cela permettra de sauvegarder les préréglages actuels (tous) en tant que préréréglage pour une utilisation ultérieure. Tous les réglages sont automatiquement détectés.');
define('L_PRESETEDITOR_SAVE_PRESET_MSG_ABS','ATTENTION: Vos paramètres actuels contiennent un intervale de temps pour le(s) module(s) suivant ');
define('L_PRESETEDITOR_SAVE_PRESET_MSG_ABS2','L&#39intervale de temps n&#39a aucun sens!');
define('L_PRESETEDITOR_SAVE_PRESET_DUPLICATE','Ce préréglage est le même que:');
define('L_PRESETEDITOR_SAVE_PRESET_DUPLICATE_CANNOT_BE_SAVED','Vous ne pouvez sauvegarder que des préréglages différents de ceux éxistant.');
define('L_PRESETEDITOR_CACHE','Mettre en cache ce préréglage');
define('L_PRESETEDITOR_CACHE_NOT','Ne pas mettre en cache ce préréglage');
define('L_PRESETEDITOR_CACHE_UNCACHEABLE','Ce préréglage ne peut être mis en cache');
define('L_PRESETEDITOR_MSG_ERR_GUEST','Vous n&#39êtes pas autorisé à gérer les préréglages. Voir <a href="../doc/config_settings_en.html#config_stat_guest_préréglage_manage" target="_blank">$config_stat_guest_préréglage_manage</a> et <a href="../doc/config_settings_en.html#config_stat_user_préréglage_manage" target="_blank">$config_stat_user_préréglage_manage</a>.');
define('L_PRESETEDITOR_MSG_PRESET_DELETE','Voulez-vous réellement supprimer ce préréglages');
define('L_PRESETEDITOR_MSG_PRESET_DELETED','Préréglage supprimé');
define('L_PRESETEDITOR_MSG_PRESET_SAVED','Préréglage sauvegardé');


// anonymous_redirect.php
define('L_ANONYMOUS_REDIRECT','Vous êtes redirigé de manière anonyme à:');

// menu-texts
define('L_MENU_WEBSITE','Visiter le site');
define('L_MENU_ABOUT','À propos de CrazyStat');
define('L_MENU_STATISTIC','Ouvrir les statistiques');

// modules
define('L_MODULES_HIT_P','Clics');
define('L_MODULES_HIT_S','Clic');
define('L_MODULES_WEEKDAY_P','Jours de la semaine');
define('L_MODULES_WEEKDAY_S','Jour de la semaine');
define('L_MODULES_MONTH_P','Mois');
define('L_MODULES_MONTH_S','Mois');
define('L_MODULES_DAY_P','Jours');
define('L_MODULES_DAY_S','Jour');
define('L_MODULES_HOUR_P','Heures');
define('L_MODULES_HOUR_S','Heure');
define('L_MODULES_BROWSER_P','Navigateurs');
define('L_MODULES_BROWSER_S','Navigateur');
define('L_MODULES_FILE_P','Fichiers');
define('L_MODULES_FILE_S','Fiichier');
define('L_MODULES_RESOLUTION_P','Resolutions');
define('L_MODULES_RESOLUTION_S','Resolution');
define('L_MODULES_COLORDEPTH_P','Profondeurs de couleur');
define('L_MODULES_COLORDEPTH_S','Profondeur de couleur');
define('L_MODULES_SYSTEM_P','Systèmes');
define('L_MODULES_SYSTEM_S','Système');
define('L_MODULES_REFERER_P','Réferrant');
define('L_MODULES_REFERER_S','Réferrant');
define('L_MODULES_KEYWORD_P','Mots clés');
define('L_MODULES_KEYWORD_S','Mot clé');

// general error messages
define('L_MSG_ERR_INCLUDE_ONLY','Ce fichier ne peut être ouvert directement.');
define('L_MSG_ERR_NO_MODULE','Aucun module spécifié ou aucun module.');
define('L_MSG_ERR','Erreur');
define('L_MSG_ERR_CONTINUE','Continuer');

// general texts
define('L_LOGOUT','déconnexion');
define('L_CLOSE','fermer');
define('L_OK','OK');
define('L_NUMBER','No.');
define('L_TIME','heure');
define('L_DATE','Date');
define('L_IP','IP');
define('L_USERAGENT','User Agent');
define('L_BIT','Bit');
define('L_DATE_FORMAT','d/m/Y');
define('L_TIME_FORMAT','H:i:s');
define('L_GO','Aller');
define('L_PLEASE_WAIT','Veuillez patienter ...');
define('L_HITS','Clics');
define('L_VISITS','Visites');
define('L_PAGEIMPRESSIONS','Page Vues');
define('L_BACK','Retour');
define('L_CANCEL','Annuler');
define('L_DELETE','Supprimer');
define('L_REFRESH','Rafraîchir');
define('L_AND','et');
define('L_LANGUAGE','Language');
define('L_NAME','Nom');
define('L_DECIMAL_SEPARATOR','.');
define('L_THOUSANDS_SEPARATOR',',');
define('L_AVG_SYMBOL','~');

define('L_MINUTES','minutes');
define('L_MINUTES_ABR','min');
define('L_SECONDS','secondes');
define('L_SECONDS_ABR','s');
define('L_HOURS','heures');
define('L_HOURS_ABR','h');
define('L_DAYS','jours');
define('L_days_ABR','j');

?>
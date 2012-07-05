<?php
// password_protect.php
define('L_PASSWORD_MES_ERR_NEW_INVALID','Nova senha vazia ou não é igual com a repetição.');
define('L_PASSWORD_MES_ERR_NOT_CHANGED','A senha não foi alterada!');
define('L_PASSWORD_MES_ERR_RETRY','Tente novamente');
define('L_PASSWORD_MES_ERR_WRITING_FAILED','Ficheiro de senha não pode ser aberto para gravação. Por favor, verifique as permições (CHMOD ou write lock) do ficheiro.');
define('L_PASSWORD_MES_ERR_SEE_README','Bem-vindo! Parece que ainda não instalou o CrazyStat. Por favor, dê uma olhadela <a href="../doc/README_en.html" target="_blank">Leia-me</a> sobre como instalar o CrazyStat.');
define('L_PASSWORD_MES_OK_CHANGED','Senha foi alterada com sucesso!');
define('L_PASSWORD_MES_ERR_NOT_LOGGED_IN','Sessão expirou ou não está logado.');
define('L_PASSWORD_MES_ERR_RELOGIN','Relogar');

define('L_PASSWORD_PLEASE_LOGIN','Faça o login');
define('L_PASSWORD_USERNAME','Nome de usuário');
define('L_PASSWORD_PASSWORD','Senha');
define('L_PASSWORD_DO_NOT_COUNT','Não contar hits deste computador');
define('L_PASSWORD_PLEASE_WAIT','Aguarde...');
define('L_PASSWORD_MES_ERR_WRONG_DATA','Nome de usuário ou senha incorreta. Acesso negado.');
define('L_PASSWORD_MES_ERR_WRONG_DATA_SEE_FAQ','Veja <a href="../doc/faq_en.html#faq5">FAQ</a> caso você se esqueceu sua senha e a necessidade de redefini-la.');
define('L_PASSWORD_MES_OK_THANK_YOU','Obrigado por usar CrazyStat!');
define('L_PASSWORD_MES_SUPPORT_CRAZYSTAT','<a href="http://en.christosoft.de/Support">Suporte por favor CrazyStat!</a>');
define('L_PASSWORD_NO_JAVASCRIPT','Atenção! A senha tem que ser gravada sem criptografia, porque o seu navegador não suporta JavaScript!');
define('L_PASSWORD_CHANGE_PASSWORD','Alterar senha');
define('L_PASSWORD_OLD_PASSWORD','Senha antiga');
define('L_PASSWORD_NEW_PASSWORD','Nova senha');
define('L_PASSWORD_REPEAT_PASSWORD','Repita a senha');
define('L_PASSWORD_CHANGE_AND_LOGIN','Mudança e login');
define('L_PASSWORD_MSG_ERR_NOMD5','Atenção! A nova palavra-passe tem de ser gravada sem criptografia, porque a linha $config_stat_password_md5 está defenida para falso.<br />Recomenda-se definir para verdadeiro para gravar a senha criptografada (Veja FAQ).');
define('L_PASSWORD_MSG_ERR_NO_MD5JS','Atenção! A senha tem que ser gravada sem criptografia, porque esta em falta o arquivo srcextensionsmd5.js. Não é recomendável excluir esta extensão. Você pode encontrar o arquivo que está em falta em, <a href="http://en.christosoft.de/_download/crazystat_current_version" target="_blank">CrazyStat download-file</a>.');

// index.php (some used by about.php as well)
define('L_INDEX_WELCOME','Bem-vindo!');
define('L_INDEX_THIS_IS_CRAZYSTAT','Este é o CrazyStat, um confortável, completo e livre script de estatística com contador opcional.');
define('L_INDEX_INFORMATION','Informações e atualizações podem ser encontradas em:');
define('L_INDEX_INSTALLED_VERSION','Versão instalada:');
define('L_INDEX_CURRENT_VERSION','Versão atual:');
define('L_INDEX_NEWS','Notícias em');

// about.php
define('L_ABOUT_PLEASE_SEE','Por favor, consulte');
define('L_ABOUT_README','Leia-me');
define('L_ABOUT_FAQ','FAQ');
define('L_ABOUT_FOR_HELP','para obter ajuda.');

// password_protect.php and index.php
define('L_LOGIN_MENU_HOME','Home');
define('L_LOGIN_MENU_LOGIN','Login');
define('L_LOGIN_MENU_CHANGE_PASSWORD','Alterar senha');

// calendar.php
define('L_CALENDAR_TITLE','Definir período');
define('L_CALENDAR_MSG_ERR_YEAR_INVALID','Ano inválido, use apenas dígitos.');
define('L_CALENDAR_MSG_ERR_MONTH_ONLY','Erro: Por favor, escolha o mês <i>e</i> o ano.');
define('L_CALENDAR_MSG_ERR_NO_JS','Como você está usando um navegador que não suporta JavaScript ou desactivou o JavaScript, você deve clicar em continuar:');
define('L_CALENDAR_LIMIT_YEAR','Limitar por ano');
define('L_CALENDAR_LIMIT_MONTH','Limitar por mês');
define('L_CALENDAR_LIMIT_PERIOD','Limite por período de tempo');
define('L_CALENDAR_MONTH_ABR','Jan Fev Mar Abr Mai Jun Jul Ago Set Out Nov Dez');
define('L_CALENDAR_MONTH_NAMES','Janeiro Fevereiro Março Abril Maio Junho Julho Agosto Setembro Outubro Novembro Dezembro');
define('L_CALENDAR_WEEKDAYS_ABR','D S T Q Q S S');
define('L_CALENDAR_WEEKDAYS','Domingo Segunda-Feira Terça-Feira Quarta-Feira Quinta-Feira Sexta-Feira Sábado');
define('L_CALENDAR_TODAY','Hoje');
define('L_CALENDAR_WEEK_START_DAY',0);
define('L_CALENDAR_START','Início');
define('L_CALENDAR_END','Fim');
define('L_CALENDAR_RELATIVE','Relativo');
define('L_CALENDAR_ABSOLUTE','Absoluto');
define('L_CALENDAR_RELATIVE_PRESET','Predefinição');
define('L_CALENDAR_RELATIVE_CUSTOM','Personalizado');
define('L_CALENDAR_RELATIVE_THIS_WEEK','Nesta semana');
define('L_CALENDAR_RELATIVE_THIS_MONTH','Este mês');
define('L_CALENDAR_RELATIVE_THIS_YEAR','Este ano');
define('L_CALENDAR_RELATIVE_CHECK','Seleção');
define('L_CALENDAR_RELATIVE_HELP','Por favor, leia o ficheiro de ajuda sobre como funciona.');

// create_counter_image.php
define('L_COUNTER_FILE_NOT_FOUND','estilo do contador não encontrado');
define('L_COUNTER_GIF_NOT_SUPPORTED','Ficheiro GIF não suportados');
define('L_COUNTER_TYPE_NOT_SUPPORTED','tipo de ficheiro não suportado');

// nojs.php
define('L_NOJS_TITLE','Sem JavaScript');
define('L_NOJS_TEXT',
' <p>Infelizmente o seu navegador não suporta JavaScript ou você o desativou. Recomenda-se usar um navegador compatível com JavaScript, por exemplo <a href="http://www.mozilla.com/">Firefox</a>, ou ativar o JavaScript no seu navegador se você o desativou.</p>
  <p>Em alguns casos, esta mensagem aparece se houver um erro no JavaScript. Se o seu navegador suporta JavaScript e ele está ativo, por favor, voltar e repetir.</p>
  <p>
  Essa mensagem pode aparecer também, se um JavaScript é executado enquanto o site não está totalmente carregado.<br />
  Neste caso, actualize a página, aguarde até que o site esteja totalmente carregado e clique novamente sobre o ícone que você acabou de clicar.
  </p>');
  
  // stat.php
define('L_STAT_MSG_ERR_COUNTER_FILE','corrompido ou RC?');
define('L_STAT_MSG_ERR_READ_ERROR','Erro de leitura (Permições)?');
define('L_STAT_MSG_ERR_WRITE_ERROR','Erro de escrita (Permições?)');

// analyze.php
define('L_ANALYZE_MSG_OK_CACHE_EXISTED','Havia um ficheiro de cache para os logs na pasta recém-criada. Este ficheiro de cache foi excluído.');
define('L_ANALYZE_MSG_ERR_LOGFOLDER_INEXISTENT','Não existe a pasta na qual os ficheiros de log devem ser colocados');
define('L_ANALYZE_MSG_ERR_CREATE_FOLDER','Criar pasta');
define('L_ANALYZE_MSG_ERR_FILE_CREATION_FAILED','O ficheiro não pôde ser criado');
define('L_ANALYZE_MSG_ERR_FILE_NOT_FOUND','O ficheiro de Log não pôde ser encontrado. Por favor, tente esvaziar a cache.');
define('L_ANAYLZE_MSG_ERR_CHECK_RIGHTS','Por favor, verifique "usr/config.php" e as permições da pasta na qual os ficheiros de log devem ser colocados.');
define('L_ANAYLZE_MSG_ERR_CACHE_NOT_DELETED','Um ficheiro de cache não pôde ser excluído. Por favor, verifique os direitos.');
define('L_ANALYZE_UNKNOWN_FILE','Desconhecido');
define('L_ANALYZE_UNKNOWN_SYSTEM','Outros');
define('L_ANALYZE_UNKNOWN_BROWSER','Outros');
define('L_ANALYZE_UNKNOWN_RESOLUTION','sem JavaScript');
define('L_ANALYZE_UNSAVED','Não foi gravado');
define('L_ANALYZE_MSG_ERR_COUNTERFILE_INEXISTENT','Ficheiro Counter não pôde ser lido. Tente criar um novo.');
define('L_ANALYZE_MSG_ERR_COUNTERFILE_CREATION_FAILED','Falha na criação (Permições?). Nenhum dado foi perdido, mas o CrazyStat está a funcionar de forma ineficiente. Veja as FAQ.');
define('L_ANALYZE_MSG_OK_COUNTERILE_CREATED','Ficheiro Counter criado com êxito. Isto não é problema, nenhum dado foi perdido.');
define('L_ANALYZE_MSG_ERR_CACHE_SAVE_FAILED','não pôde ser aberto para gravação. Por favor, verifique as permições (CHMOD - Veja o <a href="../doc/README_en.html" target="_blank">README_en.html</a>).');
define('L_ANALYZE_MSG_ERR_INCOMPLETE','A estatística não pôde ser totalmente gerada.');
define('L_ANALYZE_MSG_ERR_TIMEOUT','Provavelmente o tempo de execução máximo foi ultrapassado (Erro Fatal: o tempo máximo de execução de... segundos excedidos). Esta é uma limitação do servidor. Neste caso, o CrazyStat pode continuar gerando a estatística. Talvez que você precise clique em continuar, mais uma vez.');
define('L_ANALYZE_MSG_ERR_MEMORY_LIMIT','Provavelmente o limite de memória foi excedido (tamanho da memória permitida... esgotada). Neste caso, tente aumentar <a href="../doc/config_settings_en.html#config_stat_memory_limit">$config_stat_memory_limit</a>.');
define('L_ANALYZE_MSG_ERR_UNKNOWN_ERROR','Provavelmente ocorreu um erro (mensagens de erro acima?). Possivelmente (pouco provável) o tempo de execução máximo ou o limite de memória foi excedido. CrazyStat pode tentar continuar a gerar estatísticas.');
define('L_ANALYZE_MSG_ERR_CURRENT_POSITION','Posição atual');
define('L_ANALYZE_MSG_ERR_GUEST_CLEAR_CACHE','Você não tem permissão para limpar a cache. Consulte <a href="../doc/config_settings_en.html#config_stat_guest_cache_delete" target="_blank">$config_stat_guest_cache_delete</a> e <a href="../doc/config_settings_en.html#config_stat_user_cache_delete" target="_blank">$config_stat_user_cache_delete</a>.');
define('L_ANALYZE_MSG_ERR_CACHE_BROKEN','Ficheiro de cache parece estar corrompido. Por favor, faça o seguinte para corrigir esse problema:');

// show_log.php
define('L_SHOWLOG_TITLE','Log');
define('L_SHOWLOG_ALLLOGS','Todos os ficheiros de Log');
define('L_SHOWLOG_MSG_ERR_INVALID_ID','Não há nenhum ficheiro de log com este id.');
define('L_SHOWLOG_MSG_ERR_LOGFILE_NOTFOUND','O ficheiro de log parece não existir. Por favor, verifique se existe o ficheiro e a seguir:');
define('L_SHOWLOG_END_OF_LOGFILE','Fim fo ficheiro de Log');
define('L_SHOWLOG_NEXT_LOGFILE','Próximo ficheiro de log');
define('L_SHOWLOG_PREV_LOGFILE','Ficheiro de log anterior');
define('L_SHOWLOG_PREV_PAGE','Página anterior');
define('L_SHOWLOG_NEXT_PAGE','Próxima página');
define('L_SHOWLOG_PAGE','Página');
define('L_SHOWLOG_FORWARD','Avançar');
define('L_SHOWLOG_BACKWARD','Anterior');
define('L_SHOWLOG_TEXT','Texto');
define('L_SHOWLOG_TABLE','Tabela');
define('L_SHOWLOG_FILTERED','Filtrado');
define('L_SHOWLOG_ROWS_FOUND','linha(s) encontradas');

// logs.php
define('L_LOGS_SEARCH_CONTAINS','contém');
define('L_LOGS_SEARCH_CONTAINS_NOT','não contém');
define('L_LOGS_SEARCH_UNEQUAL','desigual');
define('L_LOGS_VALUE','Valor');
define('L_LOGS_TITLE','Ficheiros Log');
define('L_LOGS_BACKUP','Backup');
define('L_LOGS_VIEW','Modo de exibição');
define('L_LOGS_FILTER_TITLE','Pesquisa dentro dos ficheiros de log (filtro)');
define('L_LOGS_ADD_CONDITION','Adicionar condição');
define('L_LOGS_SEARCH_SUBMIT','Pesquisa');
define('L_LOGS_SEARCH_WAIT','A procurar nos ficheiros de Log... Aguarde.');
define('L_LOGS_MSG_ERR_NOFILE','Nenhum ficheiro foi selecionado.');
define('L_LOGS_MSG_CONFIM_DELETE','Deseja realmente excluir permanentemente os ficheiros a seguir?');
define('L_LOGS_SEARCH','Pesquisa');
define('L_LOGS_SELECT_ALL','Selecionar tudo');
define('L_LOGS_SELECT_NONE','Desmarcar todos');
define('L_LOGS_SELECTED','selecionado');
define('L_LOGS_MSG_ERR_GUEST_DOWNLOAD','Você não tem permissão para fazer o download de ficheiros log. Consulte <a href="../doc/config_settings_en.html#config_stat_guest_log_download" target="_blank">$config_stat_guest_log_download</a> e <a href="../doc/config_settings_en.html#config_stat_user_log_download" target="_blank">$config_stat_user_log_download</a>.');
define('L_LOGS_MSG_ERR_GUEST_DELETE','Você não tem permissão para excluir ficheiros log. Consulte <a href="../doc/config_settings_en.html#config_stat_guest_log_delete" target="_blank">$config_stat_guest_log_delete</a> e <a href="../doc/config_settings_en.html#config_stat_user_log_delete" target="_blank">$config_stat_user_log_delete</a>.');

// show_stat.php
define('L_SHOWSTAT_PRESETS','Predefinições');
define('L_SHOWSTAT_PRESETS_DEFAULT','Padrão');
define('L_SHOWSTAT_PRESETS_DEFAULT_OLD','Old Padrão');
define('L_SHOWSTAT_PRESETS_IP1','Bloqueio por IP');
define('L_SHOWSTAT_PRESETS_IP0','Não bloquear por IP');
define('L_SHOWSTAT_PRESETS_PIE_CHARTS','Gráficos de pizza');
define('L_SHOWSTAT_PRESETS_BAR_CHARTS','Gráficos de barras');
define('L_SHOWSTAT_PRESETS_THIS_YEAR','Este ano');
define('L_SHOWSTAT_PRESETS_THIS_MONTH','Este mês');
define('L_SHOWSTAT_PRESETS_ALL','Mostrar todos (todos)');
define('L_SHOWSTAT_PRESETS_LIMIT','Mostrar apenas primeiro (limite)');
define('L_SHOWSTAT_PRESETS_SCROLL1','Módulo-Scroll ligados');
define('L_SHOWSTAT_PRESETS_SCROLL0','Módulo-Scroll desligado');
define('L_SHOWSTAT_PRESETS_TOTAL_TIME','Tempo total');
define('L_SHOWSTAT_PRESETS_CURRENT_PERIOD','Período atual');
define('L_SHOWSTAT_PRESETS_MANAGE','Gerenciar predefinições');
define('L_SHOWSTAT_CLEAR_CACHE','Limpar cache');
define('L_SHOWSTAT_REFRESH_ALL','Atualizar tudo');
define('L_SHOWSTAT_LOGS','Logs');
define('L_SHOWSTAT_MSG_OK_WAIT','A operação solicitada demora um bocado. Provavelmente a estatística deve ser grande o que pode demorar algum tempo.');

// preset-specific
define('L_PRESET_DEFAULT_YEAR','últimos 12 meses');
define('L_PRESET_DEFAULT_MONTH','um tempo de meses');
define('L_PRESET_DEFAULT_WEEK','últimos 7 dias');
define('L_PRESET_DEFAULT_DAY','últimas 24 horas');

// module_out.php
define('L_MODULEOUT_HITS_PI','Total de visualizações');
define('L_MODULEOUT_HITS_VISITS','Total de visitas');
define('L_MODULEOUT_HITS_THIS_MONTH','Visitas este mês');
define('L_MODULEOUT_HITS_LAST_MONTH','Visitas último mês');
define('L_MODULEOUT_HITS_USER_ONLINE','Usuário on-line');
define('L_MODULEOUT_HITS_MAX_DAY','Máximo visitas dia');
define('L_MODULEOUT_HITS_AV_PER_DAY','Média de visitas por dia');
define('L_MODULEOUT_HITS_HITS_PER_USER','Média de páginas visualizadas por utilizador');
define('L_MODULEOUT_HITS_VISIT_TIME_AVG','Tempo médio de visita');
define('L_MODULEOUT_HITS_VISIT_TIME_TOTAL','Tempo total de visita');
define('L_MODULEOUT_IP0','Visualizações de página (não bloqueado por IP)');
define('L_MODULEOUT_IP1','Visitas (bloqueadas por IP)');
define('L_MODULEOUT_NO_DATA','não há dados');
define('L_MODULEOUT_TOTAL_TIME','tempo total');
define('L_MODULEOUT_PIE_CHART','Gráfico de pizza');
define('L_MODULEOUT_BAR_CHART','Gráfico de barras');
define('L_MODULEOUT_SORT_BY','Clique para ordenar por');
define('L_MODULEOUT_SORT_BY_NUM','Clique para ordenar por número');
define('L_MODULEOUT_SORT_BY_PER','Clique para ordenar por porcentagem');
define('L_MODULEOUT_SORT_BY_RATIO','Clique para ordenar por relação');
define('L_MODULEOUT_NUM','Número');
define('L_MODULEOUT_NUM_ABR','Num.');
define('L_MODULEOUT_PER','Perc.');
define('L_MODULEOUT_TOTAL','Total');
define('L_MODULEOUT_RATIO','Relação');
define('L_MODULEOUT_DOMAINS','Domínios');
define('L_MODULEOUT_PAGES','Páginas');
define('L_MODULEOUT_COLORS','Cores');
define('L_MODULEOUT_CONSOLE_PERIOD','Período');
define('L_MODULEOUT_CONSOLE_PERIOD_DEFINE','Definir período');
define('L_MODULEOUT_CLICK_IP1','Clique para visitantes (bloqueados por IP).');
define('L_MODULEOUT_CLICK_IP0','Clique em page-views (não bloqueado por IP).');
define('L_MODULEOUT_CONSOLE_ALL','Mostrar todos');
define('L_MODULEOUT_CONSOLE_ALL_ABR','Todos');
define('L_MODULEOUT_CONSOLE_SHOW_ONLY','Mostrar somente');
define('L_MODULEOUT_CONSOLE_TREE_ABR','Habilitar exibição de árvore');
define('L_MODULEOUT_CONSOLE_TREE','Habilitar referenciadores de visualização e classificação de árvore pelo host');
define('L_MODULEOUT_CONSOLE_TREE_OFF','Desativar o modo de exibição de árvore, lista todos os referrers');
define('L_MODULEOUT_CONSOLE_TREE_OFF_ABR','Desativar o modo de exibição de árvore');
define('L_MODULEOUT_CONSOLE_TREE_OTHER','Alterar a extensão de árvore');
define('L_MODULEOUT_CONSOLE_TREE_COLLAPSE','Fechar árvore');
define('L_MODULEOUT_CONSOLE_TREE_EXPAND','Expandir árvore');
define('L_MODULEOUT_PRETTYINT_SUFFIX','m bn trilhão quadrilhões quintilhões sextilhões');

// preset_editor.php
define('L_PRESETEDITOR_MANAGE_PRESETS','Gerir predefinições');
define('L_PRESETEDITOR_ID','ID');
define('L_PRESETEDITOR_CACHE_SIZE','Tamanho da cache');
define('L_PRESETEDITOR_SAVE_PRESET','Salvar predefinição');
define('L_PRESETEDITOR_SAVE_PRESET_TEXT','Isto irá salvar as configurações atuais (todas elas) como predefinições para uso futuro. Todas as configurações são detectadas automaticamente.');
define('L_PRESETEDITOR_SAVE_PRESET_MSG_ABS','Aviso: As configurações atuais contêm intervalos de tempo absolutos para os seguintes módulos');
define('L_PRESETEDITOR_SAVE_PRESET_MSG_ABS2','Intervalos de tempo absolutos não fazem muito sentido para salvar como uma predefinição!');
define('L_PRESETEDITOR_SAVE_PRESET_DUPLICATE','Esta predefinição é exatamente o mesmo que:');
define('L_PRESETEDITOR_SAVE_PRESET_DUPLICATE_CANNOT_BE_SAVED','Você só pode salvar predefinições que são diferentes de outras existentes.');
define('L_PRESETEDITOR_CACHE','Armazenar em cache esta predefinição');
define('L_PRESETEDITOR_CACHE_NOT','Não armazenar em cache esta predefinição');
define('L_PRESETEDITOR_CACHE_UNCACHEABLE','Esta predefinição não pode ser armazenada em cache');
define('L_PRESETEDITOR_MSG_ERR_GUEST','Você não tem permissão para gerenciar predefinições. Consulte <a href="../doc/config_settings_en.html#config_stat_guest_preset_manage" target="_blank">$config_stat_guest_preset_manage</a> e <a href="../doc/config_settings_en.html#config_stat_user_preset_manage" target="_blank">$config_stat_user_preset_manage</a>.');
define('L_PRESETEDITOR_MSG_PRESET_DELETE','Deseja realmente excluir esta predefinição');
define('L_PRESETEDITOR_MSG_PRESET_DELETED','Predefinição excluída');
define('L_PRESETEDITOR_MSG_PRESET_SAVED','Salvo predefinidos');

// anonymous_redirect.php
define('L_ANONYMOUS_REDIRECT','Você será redirecionado, anonimamente, para:');

// menu-texts
define('L_MENU_WEBSITE','Visite o site');
define('L_MENU_ABOUT','Sobre CrazyStat');
define('L_MENU_STATISTIC','Estatística aberta');

// modules
define('L_MODULES_HIT_P','Hits');
define('L_MODULES_HIT_S','Hit');
define('L_MODULES_WEEKDAY_P','Durante a semana');
define('L_MODULES_WEEKDAY_S','Dia da semana');
define('L_MODULES_MONTH_P','Meses');
define('L_MODULES_MONTH_S','Mês');
define('L_MODULES_DAY_P','Dias');
define('L_MODULES_DAY_S','Dia');
define('L_MODULES_HOUR_P','Horas');
define('L_MODULES_HOUR_S','Hora');
define('L_MODULES_BROWSER_P','Navegadores');
define('L_MODULES_BROWSER_S','Navegador');
define('L_MODULES_FILE_P','Ficheiros');
define('L_MODULES_FILE_S','Ficheiro');
define('L_MODULES_RESOLUTION_P','Resoluções');
define('L_MODULES_RESOLUTION_S','Resolução');
define('L_MODULES_COLORDEPTH_P','Profundidade de cor');
define('L_MODULES_COLORDEPTH_S','Profundidade de cor');
define('L_MODULES_SYSTEM_P','Sistemas');
define('L_MODULES_SYSTEM_S','Sistema');
define('L_MODULES_REFERER_P','Referrer');
define('L_MODULES_REFERER_S','Referrer');
define('L_MODULES_KEYWORD_P','Palavras-chave');
define('L_MODULES_KEYWORD_S','Palavra-chave');

// general error messages
define('L_MSG_ERR_INCLUDE_ONLY','Este ficheiro não pode ser aberto diretamente.');
define('L_MSG_ERR_NO_MODULE','Nenhum módulo especificado ou nenhum módulo.');
define('L_MSG_ERR','Erro');
define('L_MSG_ERR_CONTINUE','Continuar');

// general texts
define('L_LOGOUT','Logout');
define('L_CLOSE','Fechar');
define('L_OK','OK');
define('L_NUMBER','Não.');
define('L_TIME','Tempo');
define('L_DATE','Data');
define('L_IP','IP');
define('L_USERAGENT','Agente do usuário');
define('L_BIT','Bit');
define('L_DATE_FORMAT','A/M/D');
define('L_TIME_FORMAT','H:M:S');
define('L_GO','Ir');
define('L_PLEASE_WAIT','Aguarde ...');
define('L_HITS','Hits');
define('L_VISITS','Visitas');
define('L_PAGEIMPRESSIONS','Visualizações de página');
define('L_BACK','Voltar');
define('L_CANCEL','Cancelar');
define('L_DELETE','Excluir');
define('L_REFRESH','Atualização');
define('L_AND','e');
define('L_LANGUAGE','Língua');
define('L_NAME','Nome');
define('L_DECIMAL_SEPARATOR','.');
define('L_THOUSANDS_SEPARATOR',',');
define('L_AVG_SYMBOL','~');

define('L_MINUTES','minutos');
define('L_MINUTES_ABR','min');
define('L_SECONDS','segundos');
define('L_SECONDS_ABR','s');
define('L_HOURS','horas');
define('L_HOURS_ABR','h');
define('L_DAYS','dias');
define('L_days_ABR','d');



?>

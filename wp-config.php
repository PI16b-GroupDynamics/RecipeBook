<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'recipes');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BRe1=&@t/v.GijvkvZ5 n% Cd3naowh-CBr+RQ!]g]k_i@KsJOSa j2tFR?nMb<m');
define('SECURE_AUTH_KEY',  '9CPHm|S,NEWgjiJ>rR^>iwlRt^nJZ^QJIwA{mJ[:9Z^P=Q(AKNv@~*6U-$HUskO:');
define('LOGGED_IN_KEY',    'E.N_!2F+$Ls=s>}|}JPu#tmr_OTVpFY86+/|;bH!|:Ulc??V)n}+T,&58t5&b-/w');
define('NONCE_KEY',        'x5t$B[{.=~aY*8h5WQMtf(sstf-h77)LA7( 0w~&!gVZ*#?j|F~ >c>rnmAb%lV@');
define('AUTH_SALT',        ']!erz2 B];O`BdR=5@Gs{at(CsD{/o>9a#c]9)tqA#Oi.B?$#SObe&0tk*7<mI{M');
define('SECURE_AUTH_SALT', 'k6PFH^I3B]z@j7GR~SBbHH-YoT@*bPJh0tYw1:-$5t,Vm.mf&nG8-<~1q8p4>>Oq');
define('LOGGED_IN_SALT',   '-M$uxh>EI6<V=y)*%cO1!(&VWIzFlcS,3@ajw?S0=7m.gA,r,K-s?/7f)WTQ{Dlq');
define('NONCE_SALT',       'U2AXx*pVg1xzv|-WBd9<7z$gVMbE]ll8,LUU(PH~~8^pRTe^IHfhmvnuFeJ0`SZ%');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

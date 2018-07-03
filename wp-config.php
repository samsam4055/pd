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
define('DB_NAME', 'bdforpd');

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
define('AUTH_KEY',         'ogN?O}63pNLcK#lnY=,Og1Ud-Jv$wK-yv4mQ2,?.vzOiVMRHO+pPt?c[[OMBdi6F');
define('SECURE_AUTH_KEY',  '{$yPCDUw9Ebx8d^]eDXvv3)BrvHgzluBOcNmk[skLE9lR$&Z),[E.E]&<,Tr;x34');
define('LOGGED_IN_KEY',    'Q8g:;u&s}Rs}!LB11(4eN@la$=,IBq-)wPc3z{9[#^D`Jbg!sOs,+Y|tXW8cf.KM');
define('NONCE_KEY',        'xO}YCI2NsGne(zWXlWp)]_1X=l8O~2)ly@vAy1|OJq,zH=sb /*2&Z1Mh8lj zCM');
define('AUTH_SALT',        '5a-yI7PuCfd`V=Bv[Mn/;AiVq@_ VCC /X|!!Z91BvnRV:GEbP= pU(tx@%D^fpQ');
define('SECURE_AUTH_SALT', 'jiwXhe&:yp..*r|!$<r_d_K?]+Eh*D2@X_2HySYDy^jCj-6<]05x:kO>.)A$_pGl');
define('LOGGED_IN_SALT',   'egW@Y8+/E7L5US#&Z?eB^z$D2E#LaH}A_15{S.#5#Rmk+mVih,p+;8=(T2I PQDH');
define('NONCE_SALT',       'Y]:Af+Jj^n--m0c34LJujHTE+ kFR!X>A|?aX[si)1E|`e;O;0[PE+!2Dy4s75dh');

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

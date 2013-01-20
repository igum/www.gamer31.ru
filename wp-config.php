<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')hLT0nLSt-9-#0^hq=:|KOD4Z#vwDhe49VUJ-#%|d^I+)ITgEntniUV4D2kY~um1');
define('SECURE_AUTH_KEY',  'xmga G(fAW5s&q&n:xqFag*.q,X)H9#q]@;6`KN{6x/-J#cF7DxIe/>T{Av[|dxa');
define('LOGGED_IN_KEY',    '&bf,Mg14Z]}4`7WNFAc=%AW6Y~Iq]gP0_dLfh>i(Ts $Jy%jzBo# L[rUB)(51&j');
define('NONCE_KEY',        '92!x1t6)$@i><TH~Q@p0q|((re&cJ2A/wo;pPT`d37Y1c}DOj,{4(17a<4s4lq4 ');
define('AUTH_SALT',        'd9|#9KGwSkey->78+&OK^({>ypQh.W#*.v}tNz` H[XGBNL2[$9mWU;Yc7W{5=TX');
define('SECURE_AUTH_SALT', 'Oe|#sohs{H0}!|m1`8*[(f%+K2hf,RZF?Pv0{-Wc+kESwNQzopad8h.L[R1wTq&5');
define('LOGGED_IN_SALT',   '?R=3JhCQq+Na4V/v&KXD4Ci);1;1!M(^ ?X@{3,:TG&m{f}F-G~sR?WimVlb-sIB');
define('NONCE_SALT',       'JlM|a/dFwlltC2PP<%htaYh@7GtA0NC_UTqK6W^)Di=R-5QP,uT. )t0j`ZvK|+ ');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

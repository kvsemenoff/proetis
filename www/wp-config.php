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
define('DB_NAME', 'proetis3');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '~l9w@K(ygBgBXj,3H$bwAQT=@|!Or8v89Z.lS-JS3H-l-)*R|Qx.XGs]+:)7?9+R');
define('SECURE_AUTH_KEY',  '81=e?jXM*dF58i3X.|)u$GH C0>[!newEW;M_^4J<M^@GJ+qFv;Sb<w<7z+BA-v>');
define('LOGGED_IN_KEY',    'Ipom,$n)XOB1p|!g|xNlF3.gOg8j >:>BE:#(NLY{_3XWjhU+n74D<MQAF.<#t02');
define('NONCE_KEY',        'SyH8A}jMH5<1+VbP|4r+4]a()t7;}vE>:KaX~+n[7Ypscp&,R8s-/S-z.ExP^_I6');
define('AUTH_SALT',        'ip6 [+hv#9_*h7,]lpj]!#c}?$@3Ftn)%udE9G7Ol7tQ #jg|61E,)]Dgys|7H2#');
define('SECURE_AUTH_SALT', 'HR$#K2ZamH2%Q~&t Za-#b8Jns?r^fgq<4-I^F=w-{*Kp%PulR|TAuhc.k8+U>9l');
define('LOGGED_IN_SALT',   '_(J.*5F}-^{a^*]Gd69>S7M}P#32p#5Ktgwl|)!3!M.TJd(H9+WU%{u-)D(Lq`a^');
define('NONCE_SALT',       'DxBOO4xi2;,&~<[~#]*7*9]RQi<uB,gP{4<)KA8a0QlY})l,C0RqE]8P|*mh&?TP');

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

<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'house-master' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'MySQL-5.7' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1 mu.m_}(}xh.tYJ13K0,{.P)C40 `LEh^EiBp]U_rvKm@[Z/Okp0-ef=,jEurNz' );
define( 'SECURE_AUTH_KEY',  'lP*z@}_*oY|Jvz:h%}jcH]} Ha!.&dru$-{~%_s4u*0oZ1RbLA`nRRzmltm6juV^' );
define( 'LOGGED_IN_KEY',    '$Aq)hUirHY;[T`?QKfE)b=<;5XBxTCJ!(:}K!d$H]@X0v<E8y-{)Ejw*&NQWE^<z' );
define( 'NONCE_KEY',        'Rki=4v0#[[Qldb:D@a4Qk^tkKHHtBEa29]!&4?1FQoU?`=z}LQm(&7j3Rff.y7EE' );
define( 'AUTH_SALT',        'LrY|:&n<onL`bGNgc^z^T}[iScEm`0lK,Y`66,X~`ry/[/>6xCQHJl$z)u6P3Un9' );
define( 'SECURE_AUTH_SALT', 'TW439%~]^i#?uSASSd?!;c(anNbF-dI> -@P~P>t.{i61u7Q58fSh/KoW*xpT T4' );
define( 'LOGGED_IN_SALT',   '>Ux/FDF++$*Ug^zg5>pJ5}ddQ~CoB/6t;`Ckk`T% ll`ua[_M6N/Fp)u1 xo{Jp]' );
define( 'NONCE_SALT',       'Ya=fsg+-zH. H3 so x6!zACw(|A>?H0yf8PwOPx&IiZfcLKgJfX(7u0-_MXz_m ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

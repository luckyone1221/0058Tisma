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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'tisma' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'tisma' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'WuzbzRRwqRjksefu' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZN5Yn_f!rKpUuy|&m$!A4h(`qf%${q][TP*H`J~VbjE|PL2L~>8Je=oX(H}xsmh6' );
define( 'SECURE_AUTH_KEY',  'xAPk@anl|;;BglrKG{Ph8(*iun4,PGQ3)(j]pF>wg3;aa*[qQm>FYg n+o,$_h$L' );
define( 'LOGGED_IN_KEY',    '1S0WatI?8pnQGN`rojixlK2*SX}/x0D<kfCtg6$iDP:nkH2TnmRT./1-|[4tNW? ' );
define( 'NONCE_KEY',        '.m3t{)!:xL$mQ1w}#Z;)1cV.Ngt&M`EBMHe%S2=KsUyGb{S{%i2dSjlV,>B7kajA' );
define( 'AUTH_SALT',        'hrU&Bp$S]$#8UZ:5QBuMh,:gIN+MxqQ0slm%,+Jx![dB_9QuBj7:G=_sua4Mn^WG' );
define( 'SECURE_AUTH_SALT', '&(=Gt:QSH$G/d4_[Xt+DRfSN; hVlZQuD93%!8X0_!2n4gTNeniSA*C#D4e H1!}' );
define( 'LOGGED_IN_SALT',   '+{Nn|=ws=|nByVTf$DvjY*#;}MS(~;Bs}K0ygW{VkzJ,33ILz h-$l*UmLm|/_O&' );
define( 'NONCE_SALT',       'z&?_JNeziS3%|*A3nZ[Ng)_?E*.0R$hLB9aoc{}l-Z) %Rs{`btZMb7Ed&x={AHY' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'tisma_';

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

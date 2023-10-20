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
define( 'DB_NAME', 'shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '1234' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '5M|vQX t38T$6^>}=^Wz{bOqTj>mMm]I%[0Z*KbZ]*kdrevb$H?i$mVT?~V(P8%3' );
define( 'SECURE_AUTH_KEY',  '#KLSR24%D3!;`*W._wvk}E#xb)[(r`MuaoF&F@R)%yn^!g^M-f*Cxn_BGo/YKv<6' );
define( 'LOGGED_IN_KEY',    '/oC(7x{iO:wxrlNWiwpH_?.G~~g@4z`@>r<mJ]rw3T}=2@*uFw>rT*m]o!JA<rFQ' );
define( 'NONCE_KEY',        'AzVPpoXU`q{_.<PaP50YK9B]ys`m:|}s0w5X228)^dt}].nT9_1OtUH/Kp9a#fzr' );
define( 'AUTH_SALT',        '9~<Y.)D?$E(FZLepNF%D<CkqO>K<Az_0GN?ZFg8~p++q:`ILB:?T4HAe;F?xAaPP' );
define( 'SECURE_AUTH_SALT', 'WkM[y:ztR?;$mDZ]LFUi#Z ,pcIrlU|*cs&+2?$:-brMHh- MKOzUla4~><_^I.V' );
define( 'LOGGED_IN_SALT',   '?a=tu=6s|/zJj6+HElW#CX::}NL|Sg-WWE+06I!NYa#:B8hUpg[0J7M/=`n1Q tk' );
define( 'NONCE_SALT',       'T}aHPZn Bf+k#8<y=p?x$z>dy3RE9TgC QQkU%7?Q1k,^3oE_P/xo4r+%<KT<nxm' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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

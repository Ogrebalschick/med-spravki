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
define( 'DB_NAME', 'med-reference' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '?9sgeZWhclCnVa7OvWn[_BYw>3Neh.%5p^0Pwkn=3i6q~<YS1 &{U@=*k<C7^!h]' );
define( 'SECURE_AUTH_KEY',  '-0,wOoT)2x{ #w`=1}n9JmVdG*J2-CV[Thia.}LL(JVq|UF?O:K$V<8`p9sIoEM/' );
define( 'LOGGED_IN_KEY',    ':hBR[vB}O.tg+2R&m<WXx|ea3V@|e8lYdTY6$2KmJ;*B:%r0R:93ad[PnJ`N%wof' );
define( 'NONCE_KEY',        '<omo,T(Qx0xDguVbX*See$xe(dVIX1s(Y~A-bWZzXz-=fQ]x7iV(+3~Ix!#<ZIG+' );
define( 'AUTH_SALT',        'Wm#v2k5UQhOR&Q=}.c%77?~e=R2-[*}t8!j#>H@2Rn[&d$J@MvX<Fh6Dij}eU;=e' );
define( 'SECURE_AUTH_SALT', 'nlTI{Kp MCAxZqjcNs(<>Xp?@G+OpL!PJD6B4yjFS8J,sQ9`3X~?c+`q95:nkou0' );
define( 'LOGGED_IN_SALT',   'pK LSI@nz>WXQC5P3fbQO&!@Aous{3,3&NAZvesLy:$DcG(0EslfT8QTi#Q2Pgni' );
define( 'NONCE_SALT',       'tsF&S.O8+[_?_;5e$Ey8u}hj3Rym?_a25tzg8Q-X6E}Vq[~M;N8b^$=qhvS6LzV7' );

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

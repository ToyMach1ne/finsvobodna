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
define('DB_NAME', 'kor_1');

/** Имя пользователя MySQL */
define('DB_USER', 'kor_user');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'WP0xbzQN');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3XdgSg*f?Yz$veD2=|hZUb)MP-6_+oyd9&09@/.BWT$jZPfU8@Wpu$*dMSf[OEjp');
define('SECURE_AUTH_KEY',  '!*K>2%SFe7 j[:>&,t#(.U8gei3|X8R?Whs?kH}%NwQ :@t!;cFO*o:z<?a+5;i ');
define('LOGGED_IN_KEY',    '-1C#U1H;A|Z$wG/0M R6C+wA|afTi_PW<t9Lb75g+&Rm:5)rOPE%ou}o-DN!nQo:');
define('NONCE_KEY',        '#~Xkr.o%l]3m^C7`IF3y,x*L*6=gzpQ0U3?[wl-/C+jPEh,av7Tg)>3x$^W}|M@-');
define('AUTH_SALT',        '+F.|Pb%]n(X~u[{hKUTHT}KVx[.2#]5?Z`r`kG,mzXS=MQY-j*0;1&+bzlsEB+hk');
define('SECURE_AUTH_SALT', 'B_Z5 /42/04R$h}2K^u1~w1($7IEo@$5TjeP/Z9dWj`|t2ND5M%_oJ{HL`T:/V+-');
define('LOGGED_IN_SALT',   '5>mE|6|}yGvwq[N@R[-3z|U)$WF/xhL<<RZz.NGGFna!>vMY}gm$9r{XuxaDA|Br');
define('NONCE_SALT',       '*K~GnM`jOyvu*gkX0syQLfa:b_ J^:2T7XLQE8CBv7r7/2_dXL&z+waM-W~%5PRv');

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

<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'm1947_fizyka');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'm1947_fizyka');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'Haslo1234');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'mysql.ct8.pl');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vAsiv+{F|f#hYF:AgmjjU<V)_$V(&z]7r`8U)*+?9Q!>xaT5$N zlQi(hF1&LS<|');
define('SECURE_AUTH_KEY',  ' }`vn!5>s)|*vT ZV^m3=x--=CD6Q+0U9%V]v>-4Y~:#Op++e^fHP6kvD4,[%6tf');
define('LOGGED_IN_KEY',    'RQE|YbK3s^X[#c*XZ*bR%[2R0DD^m;R-,j+1-s$-H[z2y%~&h{SL~k{VP%+5`!7e');
define('NONCE_KEY',        'D^+3L0kdpz;S]Y>I]oM{FO]8(MvejX%Ax%iwNSjSzc6*FBCBjLB`$hiS,k%iU34D');
define('AUTH_SALT',        '|}EZxNKBN60/w--rnvAfUQCOHtjWt*vF+>7Xc+{6#sSRGsIR[pD3*)E0b&mWSN9-');
define('SECURE_AUTH_SALT', 'ubp>VRQld<4vY@>t1ggI+pxc<QU;;]z@5snC_Y*/ %*ObVJWFgJEm2ys-fWUO:P>');
define('LOGGED_IN_SALT',   '!Tft]q`C}=*|MJ`g8gH|| T<imNhY>sh Wv2J-h+H]v@#C=^ys/}t(VqXwGcUjdd');
define('NONCE_SALT',       '.$Ob6in2Rj+_6)XI`-KHXaJ{ iyzeo(d!shYnVx0da@- gE>/}Byfk,e+d`B5e#h');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');

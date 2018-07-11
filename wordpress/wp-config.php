<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp-semana12-2');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ']g]786bB#cxWSTZ`g=c8qk^Y2*HN%CEtZ4!%ucd( ZujZG(>ZG~V1J~sh]DJncGK');
define('SECURE_AUTH_KEY', ',qG6oD>`zufM/6!(C/@6?`^de!YV3n&=[Aqh]VN9&6)Hj%A`>]j7i wi M->[sbM');
define('LOGGED_IN_KEY', 'M6!YbFfy^g9FKU.b:,(<;]w_${QK~/pBJkbi4gQVhzlTV;h5fjpcb_N5B1!WvPhI');
define('NONCE_KEY', 'Dj@7sE2PFEXHmX/uX<9O. XlvM#y:2luS@DloD,B]mT/;u1ysXaZj3`yOoNUr]TI');
define('AUTH_SALT', ':yd>0Nq$S}:b)JT!oG|@ldkQWRtP}MD~ew&n=}G{)1Ubjcdt_1%*%^O+vR*p!J3T');
define('SECURE_AUTH_SALT', 'qcHVr{kD@Enee:C,R Bb.!DMX-BP1/`+aYRGgUGR}Vwzj+9f_=o1hM!1?QB6iN]a');
define('LOGGED_IN_SALT', 'rFIRiA<:%_.:?U?2;$xO<e$U?gY:A|e::NZR[_BerHgt(^s.K(g#fwz1ss7-w=FH');
define('NONCE_SALT', 'g#wKXq<)I%4,QBZ~%7nk/YM{HjldPgpJ jq$99Q{g>m;2SBJM0_]tT$<<8@ :C/c');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'dl_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


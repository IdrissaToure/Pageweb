<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'page' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=_tQ)yRr;maTR_Y[.p;/]%J&%xttemw0C$d>XM]ZoTa:&0WX<zt6ITC0C8(#p3Z,' );
define( 'SECURE_AUTH_KEY',  '&aj,@?S@c>{+m qJgvO6_0vsp?=ETu8a*k[xekvtV:%Z_1YY]zt9; zb+ipYy/.t' );
define( 'LOGGED_IN_KEY',    ',GE<)Zl!o6b3X~l)C05;z5VQ}N4au4u`M6hWbCTVQ~KzBTicDP|b{chlL{G=MMqZ' );
define( 'NONCE_KEY',        ')o;|,JwB0EPc)n{+&l2MRjG:B8:ihj/58jXI,@;6)>K5>j&E5-S4e~:gUAJ%A]U<' );
define( 'AUTH_SALT',        '_D,|il6Z9?`n:<74ym)DNr+z<O[~|d`:8c%08XtJb5bc45}q5{[pIW)XaL]I^.eh' );
define( 'SECURE_AUTH_SALT', 'y2//))Y].DMd,6!>5b2z nao0]VH>oM@I8vN;neh^-r8VP4~CFP@6a}l9g3ua, y' );
define( 'LOGGED_IN_SALT',   '.emtGO`nQM`svkU>hhCz]_Bu{_PgAk[7&D9Z[!SbFB[!HUF*eh@(1o6wu5Py>ro)' );
define( 'NONCE_SALT',       '{kI|@#vh5<r8nhuI]7]iQ)m_ R);.6J,VGmnU[%SHf;*Nj`tQXbwol%gc/;zpi:h' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

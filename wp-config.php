<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp-portfolio');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '-.@6yug}f>5`<T*sLwnw,yzH,Mw+J+oB(i&shek^Sk Mr;!?!I]MM%7FWwUu^8!s');
define('SECURE_AUTH_KEY',  'r3l)H-Bw}9/YY!B.hu59B1m]0^UgqL$C4rJ=X>BCXbd!M,}FXR(}cM6gFv`JX.M9');
define('LOGGED_IN_KEY',    '5oa_y=YqYeL3u>{5x^}>iu< B;Of>y-kNS2oqQKfp<%;y;$_Hsi{U|q0%kw93r)P');
define('NONCE_KEY',        '.kr|[GO@Ar8$9uQP|`k$8,-ZGM59bEN1+llw 3e3QyL|6ux{Qa_C{ZK}r]{KGL`g');
define('AUTH_SALT',        '1{dC]()lf:So(UV/qd~CJ*?.=!SU-(RTD2s}mcx;Pj-5}&R?E&R:,Z/!l[>u{)wM');
define('SECURE_AUTH_SALT', 'gGq&}|,fsklGsjGKavvU)+p+K8[ LOJ6]L!qO!P0~!Cn{%n|MiH0f{rkV`e.q?8%');
define('LOGGED_IN_SALT',   'QsvxSlRf66/~|zlWtA7H@G@gOThL[T@bM N=ovjavf$&5$~`Tq.6W!I`EU>%@jp6');
define('NONCE_SALT',       '~<77.OL*~4kJ,cI~w!+z]PU,#2h]=+eEnW,GN/(W<?cF[Xoo5|{L|EkpKeFT,U-6');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
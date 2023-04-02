<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'project6' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hzIc=Q{2dZ:3kmi563-+/GJT](y{oRc{I:O{I04e*#ze9G9~u3 ZoSe5<*5`sJxS' );
define( 'SECURE_AUTH_KEY',  'ZqD6&.kea*qcGI31yK/7oZ0.FK7oX5>,/}8a;u>&uNw0G!I:1k)ZlRSYA8A/dWFw' );
define( 'LOGGED_IN_KEY',    'KQaLN-789uWMo8TQl/al?9pV33rADw^rJ,MygJnD$@[Vp;615mib/F4(qL5=k1:&' );
define( 'NONCE_KEY',        'LR3H +ku8/c+Pb~bu_=$7}g!PuNu%9-:zRyVx2n %F`4Mb7ha$8INO yJ{+{Tqm{' );
define( 'AUTH_SALT',        'I$Wt`~ZEF2;*h4:@i/e(mEZk_yP<NCCqSmB{IanH}B+8.*I>t55CDV?f5Gb%uUmS' );
define( 'SECURE_AUTH_SALT', 'oh<a_w&fqC5Qkvi5{buX<uUiIt*dCM0yP_Q5Tl4Q.DL.uKs_FO)q nl=?-&C*pE{' );
define( 'LOGGED_IN_SALT',   'cDR=R7YAdQUEhxwIVx{1J|,tP?n|rztCrd{;.nWP@n^%,X62rv/}*#S+Ktol7gu~' );
define( 'NONCE_SALT',       'fFZ=1fI4Z8L_P6N[j5Dai+m8=wrb&H[^:j;yw0fo`pRr}ypi+AZo9Y)XWJma?djP' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

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
define( 'DB_NAME', 'augustina' );

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
define( 'AUTH_KEY',         'H3[YPCRUYN~|*[PP&?v2B:++:8nr 9`RnuR;iXmjq]HoAV7?}G#0 [+J8JF0z`9K' );
define( 'SECURE_AUTH_KEY',  '6FD}(YooIic@/~A9)Whp|Fq8(HpcK-To/~ghiX+p~{:~ JeA!<]uE(yZThQ7!+v4' );
define( 'LOGGED_IN_KEY',    'CR&h&6{FQMkV#ftZ#O-.|YEa 9>~NT%OR&PdA!g(O74p!2usZ5.PMQbahS<Pr7 +' );
define( 'NONCE_KEY',        'pdptQuI)&6gj[+/wvDadR 9K;l8Q,U}YSE+HcE WRTW!-= .zw#BWBLU[QCwF.u ' );
define( 'AUTH_SALT',        'g4%.USZbLFO|AY0vMCw5?aHi*MS)>+M:F,>,#~&Ag1-L![,1g.nFF8)zP9|m*WWj' );
define( 'SECURE_AUTH_SALT', 'LpQjQhfDi3t/&-*?(264U1{u*qoB$&IW{3bd~s]<Rd?Gvd#:dXGG|icN==U<,uh5' );
define( 'LOGGED_IN_SALT',   '6m-RIs_0 kRY#s~/T,MQt~&zw7BE7|Ke>/L:Wc,ZK<iT{kkK+-8|p&L,L5de(Vaq' );
define( 'NONCE_SALT',       'Yv[Gh0>CmL@-)1<d0Fl+.`_G+!fngp~$g4D[In!wu:i[a#4WWW)6lO&%b -0RZ8}' );
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

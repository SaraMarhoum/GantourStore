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
define( 'DB_NAME', 'egantour' );

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
define( 'AUTH_KEY',         '~W:?V{-hG3e`X}DQZ-C2^|Xvq_9S@nB=#{(~bk-b^v8V9a|]xLs^2)><R|Wt%;wR' );
define( 'SECURE_AUTH_KEY',  'NQUd~zU.zbejwVnt,=U&)Efyw6.<;jTE`rPy>DS=ZV(^>=~5[vN2i|xlKi_7NUS(' );
define( 'LOGGED_IN_KEY',    '.jpM>vLo7~]o&4`({FrnYX;VI,@*}MAF^B{p=(Ep}k`_GSDmjWY aBR9NV[,!-yu' );
define( 'NONCE_KEY',        'wb%[G;R)Y+;&zorjRwW/(S%x?%}~XQQe_5qKm(3g=r+K4*$BJrj[DR79*kYp}oz3' );
define( 'AUTH_SALT',        '|wM0<}Y*LoXzl1=lVzlF3DAbyd,y>4Qw@95tL;A%:NQ 8@g%cq0*J(dYAL,4Zu].' );
define( 'SECURE_AUTH_SALT', 'i?d{4H/K5aYj:E./p<b>eaFMn r2aME-=Q<-=TAeRomk%T*vuRtl%ZzGu%)y0gHj' );
define( 'LOGGED_IN_SALT',   'Mgo(TC?106j&0P-s%!9;a%S?|>~?iTx_RqS:(E}:(mHUu-Y$Z_)q?vx{mD+IV1Ko' );
define( 'NONCE_SALT',       'j,d!WsyitFe=oWRRFq0YLewkNn`wI%S=!2<@9;0{3&0bfVDV0nmG_.P%IenKzP,z' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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

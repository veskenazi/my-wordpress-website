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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'veskenazi' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'XA3Mjb3X!' );

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
define( 'AUTH_KEY',         'Yss##MmHM%6L<}kh+AyyWh!j|:!e)`jo,HlzH$xWKU}j-C6/zj3S9o<QBAt~i- ]' );
define( 'SECURE_AUTH_KEY',  '@I`z@.qsC PW&XsYUJgz0OB^14],>cf$3FH9aV{X2jrsqcpT-Cfgt9qo<|l~!/A8' );
define( 'LOGGED_IN_KEY',    'IXqD}fknjp{?4)V?<TgMq>:z]P{d9IVy?l{LOfpgp>gB~na~|pQ%LsG`_?-kc<LZ' );
define( 'NONCE_KEY',        'Ay0UCN&!p8+uN[`P8`z3.v@UWs3K@vtS)7Hg.Dy<xZ,.8{t?3ym`{j%utQ5CF@]R' );
define( 'AUTH_SALT',        '1jH[b&s^&~RXQ^1 d;dTU/B9hQ[upBb~!z8?$F=lf/[7/Yy},b2}ectrxX<Mz7b=' );
define( 'SECURE_AUTH_SALT', '~)`TgZq!Owz>U@vFl8;_uAOY8xZ}eXa<O~u(k$DrzUe{lVK o=zis;Fa$SA$T.s`' );
define( 'LOGGED_IN_SALT',   'HA,dnotYX73e.Y&gc(q^/C_YV>wG B;luW=8=MMXgPd{w^Kbs-82udCX[0+R.RgR' );
define( 'NONCE_SALT',       'L}@tm3:$0Eq atHQ=TCS5{-2+xI?o|cqj.<URj)}`_yk-?6x P4/;kR3DOtg](;j' );
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

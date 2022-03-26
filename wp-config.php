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
define('DB_NAME', 'plop');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '|X+*QZKL?cV+jex.>h6Vye518f6kd3~[v8tH!%=MxD?k$#$48/gm!bS7Si7|D2Se');
define('SECURE_AUTH_KEY',  ':EVbw&!h39GC0%.uJ]B4H8lwX7pCN)-VxIQ`[[-D`3!_3&:4eY`LEI.#JKeZFE:)');
define('LOGGED_IN_KEY',    '&/P7aoHMGDlg!DLx{A5e79xR2 o+H4}J29(c@ jMm:7MM?s:w/tmGp_4EllKa:1S');
define('NONCE_KEY',        '!)$TQ=z-q}IX4LWHDICcT/|9$sg/ x)Dyqk?kD*o%wQ!F,oigx&u{Z1(0/p}Ut[-');
define('AUTH_SALT',        'g;h`l%.6 TK-a>szj}en5B%8@]oww`2p $EpA~mFv7R^^Y;S.<QMmHSRLQEX9Equ');
define('SECURE_AUTH_SALT', 'T6b{Ah%,gHi)Ao|mKV8.dxO^<.Uop>HzN/^~|{Nm5-,MA+#Hsnf|&]Z3RY]6V:PB');
define('LOGGED_IN_SALT',   '42;;$Yj$<7U#|6?j=yj.ovY+|aAtZEiO}9`K5jUJtZyh-TN+ugEN*Nyf$CZ@b7b+');
define('NONCE_SALT',       ';*0s]RL{9D0PD.a?oZb_|A.9gwY]7R+Feir1Q*4Wcb$oU]|gkEM!?tk Lk6t~g>w');
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

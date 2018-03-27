<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rxUV2cTIkOQy+cL8JfmBMNPPgCjdNdqcopSd7LVy4PoYY5T4JviKML55i9BqJgv05THyQO5ESA8SIH+ji7hMWA==');
define('SECURE_AUTH_KEY',  'TNzpduanwS7OEhUhZOM1S3ZGQ5eMrQdu4ydVZ84GV2Moha2dYvCOWIeNHLRXedo4FUpxeMinz3uluGSlZjgyuQ==');
define('LOGGED_IN_KEY',    'kYsQH2iOqUz9QxbbKPWKx0l9m7kw8MmRFLI3sn4hzZhkvVtkD39r2imZcq3w16eVUo9JUUR2dokal0zQK6hMcQ==');
define('NONCE_KEY',        'snHQ7Ti2hZmnueus/rjgV5CUS1BT6woDSmpQ/DAwRspWyaAqPxQaZ1sXX16JGoKkd5AfhnJufXttqfEzzztNZg==');
define('AUTH_SALT',        'FaN/fxT1T4RPcIwMQFOExENF0Ba2ITO+4Jg5X0wo4Hfx/Fdzlkoq+6xG0mxHeUAyMr2PiK0b29MgW0Pw2cX8+g==');
define('SECURE_AUTH_SALT', '2qPjwTEZo0b6WSEzEp9TQbDgiP+4PuRgki0Q5HEvkeahdqu0AeG/CjehNbjvsziGa66wKV5SVNLIyx56KZHSxg==');
define('LOGGED_IN_SALT',   'wppydsVN8WR+Y1XRh1tjQBxrF1oJvaJgtNZPMt1pUll6AzAIDmMnJ0kIaZc0W4prM+2eHP94POxrlarZwlOg2A==');
define('NONCE_SALT',       'XR8xvtMyEgyyiJII6T1La9vurampzvBxcwQ94H7geog9LncvEQUgOacJcAPW2gx9LDmwqQ7O0LxaXt1S83xblA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

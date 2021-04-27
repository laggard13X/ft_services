<?php

define('DB_NAME', 'my_data');

define('DB_USER', 'edread');

define('DB_PASSWORD', 'root');

define('DB_HOST', 'localhost');

define('DB_CHARSET', 'utf8');

define('DB_COLLATE', '');


define('AUTH_KEY',         'y<Q<a?FHbljFVMbC3K+)t}klOj7m< 6@v]`QLA$jxnpYu$$1;[H x?su+@7__}.1');
define('SECURE_AUTH_KEY',  'fmEx0V@u376sQ:vxWeb)!3mdG`Q.W PJ8emS]xDYPUTL_rAZVZ<,XZd*4hWbc&rK');
define('LOGGED_IN_KEY',    '{ wXm)}zf^H~iy)c/O.(e.]S& MSJZ[:~Z^+p}r:RBV9HcUyUI/R_bpy=!yJ[s,R');
define('NONCE_KEY',        'Yl<V-$rNP)1Hq(CW 6&[Qla,]ne2=^-|5-6C|l^%nI2b!bpYYQS9X; 7#9PM{uEA');
define('AUTH_SALT',        '1L~>Ps;Kz-P2)&8^zDM49+*^6CHp55,Oz>=j:d?+C(hU~tM)F%TP=R+7Y#m~+a&l');
define('SECURE_AUTH_SALT', '8jAaTA5+5dc!Yu`p8>~QXWiBC*419}rw/48~$f|]PR?p3<~/[u19veI|Rq C9d=K');
define('LOGGED_IN_SALT',   '8qXoGMK)l)xe2A6a~Gw^e$RvnC-@{!Idd[vM5LjlNVu]!1A{c=-|(vDrl3i7lp0I');
define('NONCE_SALT',       'h-IOi3J>Y@iq}8Gb55,jM(|`Hi_s$?Z|3Cg*Vpc(XeT9f(+HznVhE_4DNsuoN&-3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

<?php
// ** MySQL settings ** //
define('DB_NAME', 'miya');         // Your database name
define('DB_USER', 'root');            // Your database username
define('DB_PASSWORD', '');            // Your database password (empty in XAMPP)
define('DB_HOST', 'localhost');       // 99% chance this is localhost

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// ** Authentication Unique Keys and Salts. **
define('AUTH_KEY',         ',~+HMyfyj40Yk,%Sv%=Cx.3^AO:KN@lfXE!dyHt9ZT YX}y$k)|#1JFVA,O(2@h|');
define('SECURE_AUTH_KEY',  '(JxHV|r7Is@kp%>fA-Pdiu>[|~sMy%`%:.c3`QJxQdarkofet$pw.Y,Rj.?PDSPN');
define('LOGGED_IN_KEY',    '8b#3,--)tZ`7W:{K@p:=D#{ ver&++/oh+Zym:*-R$lRcMYy^LUSzFJ#/Efw8+iQ');
define('NONCE_KEY',        '|`)D;3rrEw&.{hD#+{7^0HWaZ)Q*+I9]JG0LiD|rd79j[y?S$SUz:9;eU6z<kxAA');
define('AUTH_SALT',        '>@xOP3A_D|9&$JiSsrHm(Dl|MHh7k.jF`ekh|/e>9L%vNmO)67gAYryxJ00pLB]}');
define('SECURE_AUTH_SALT', 'n;b%Hid{m{h`^ro/-EcoIYJ|OW adcCdaQ. Yf^` MAMz9EXAN48)zqvSHNNma-]');
define('LOGGED_IN_SALT',   'jiJKn~d>Pb~VQ]|M;3HLqodu:%>,?)@WBE--Z@L2>5#;N2=m![2[_C,|Q0r%N;N}');
define('NONCE_SALT',       'EvC7x.+T+i>;_4K% 5+:)8k%SraCIht|13g$-^kCN+w}nE^2e2y|}?M|Psb|*4Z*');

// ** Table prefix **
$table_prefix = 'wp_';

// ** Debugging mode **
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

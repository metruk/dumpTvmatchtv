<?php
/**
 * �������� ��������� WordPress.
 *
 * ���� ���� �������� ��������� ���������: ��������� MySQL, ������� ������,
 * ��������� ����� � ABSPATH. �������������� ���������� ����� ����� �� ��������
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * �������. ��������� MySQL ����� ������ � �������-����������.
 *
 * ���� ���� ������������ �������� ��� �������� wp-config.php � �������� ���������.
 * ������������� ������������ ���-���������, ����� ����������� ���� ����
 * � ������ "wp-config.php" � ��������� �������� �������.
 *
 * @package WordPress
 */

// ** ��������� MySQL: ��� ���������� ����� �������� � ������ �������-���������� ** //
/** ��� ���� ������ ��� WordPress */
define('DB_NAME', 'db12805f');

/** ��� ������������ MySQL */
define('DB_USER', 'us12805c');

/** ������ � ���� ������ MySQL */
define('DB_PASSWORD', 'kmh8UxgZ7RstBm7');

/** ��� ������� MySQL */
define('DB_HOST', 'mysql-12805');

/** ��������� ���� ������ ��� �������� ������. */
define('DB_CHARSET', 'utf8');

/** ����� �������������. �� �������, ���� �� �������. */
define('DB_COLLATE', '');

/**#@+
 * ���������� ����� � ���� ��� ��������������.
 *
 * ������� �������� ������ ��������� �� ���������� �����.
 * ����� ������������� �� � ������� {@link https://api.wordpress.org/secret-key/1.1/salt/ ������� ������ �� WordPress.org}
 * ����� �������� ��, ����� ������� ������������ ����� cookies �����������������. ������������� ����������� �������������� �����.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y-p+H{_i>w=(3D^b_Um,LV{2?mkpQ+a}7u9>~Dcx-Xa<QcB]R,kW}ZA)BD,^dnrW');
define('SECURE_AUTH_KEY',  'BCsk.fyi[Y;BdE*|${46/SFt8c+Rlrdr/.b<5{6Q/&%g`R^xh> Jgwm1wOEs<Gia');
define('LOGGED_IN_KEY',    '6]B:l/-PM#F+5z}@/,T??iYXi&4xPZ+%}`]1fVWcl*@IY,88L8P.;#map+Vz^l=~');
define('NONCE_KEY',        'sIMaN[a/E-f(c0%|Zc^I^Pv0diao1EdqqocRNZ-jvfLfyrD%<[1]}cwj}e.e<#W9');
define('AUTH_SALT',        'OS<Yb*!YI_TDx-;|W+-#XQ$(STwG)6azZIq3@R)1c-R0UA-{;%X`-+{0PO*-~78x');
define('SECURE_AUTH_SALT', 'iR+BVmVG03yg<b.hgx>}!Z7XVm<=z[I`pWSnr%/7GO60}y|,d]t8-v+4f|91|,(p');
define('LOGGED_IN_SALT',   '9)cW{NCL4Z*?E$_06UX8<DUx<B1P?%$sJ#SQ$la:;GC6a1LL uk]?yZ<!%<ZXg,|');
define('NONCE_SALT',       'P@>PF_MM;NJvF~C/53jAJk--m]I?:Vb7?0{aRR2Kn,qbgXw[@G{Vj!8|?+g`/Wn@');
define( 'WP_MEMORY_LIMIT', '256M' );

/**#@-*/

/**
 * ������� ������ � ���� ������ WordPress.
 *
 * ����� ���������� ��������� ������ � ���� ���� ������, ���� ������������
 * ������ ��������. ����������, ���������� ������ �����, ����� � ���� �������������.
 */
$table_prefix  = 'wp_';

/**
 * ��� �������������: ����� ������� WordPress.
 *
 * �������� ��� �������� �� true, ����� �������� ����������� ����������� ��� ����������.
 * ������������� �������� � ��� ������������ ������������� ������������ WP_DEBUG
 * � ���� ������� ���������.
 */
define('WP_DEBUG', false);

/* ��� ��, ������ �� �����������. �������! */

/** ���������� ���� � ���������� WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** �������������� ���������� WordPress � ���������� �����. */
require_once(ABSPATH . 'wp-settings.php');
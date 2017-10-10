<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', FALSE ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

# Database Configuration
define( 'DB_NAME', 'snapshot_newtswm' );
define( 'DB_USER', 'newtswm' );
define( 'DB_PASSWORD', 'pE7Y6ulMR4QYA9VgcUTH' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'tk:hAifU,CL[FTd?RV+oA?dNF}+Hs@@(6hBQj@C$3fA^$EVBm4fTR)>KkPuM.sFU');
define('SECURE_AUTH_KEY',  'kZ:UH?!_zc#%T}Rf#>;lXli6-c]# I=EsPg8fwO32m$im8DzQmcd!WB|l5|:Vj+A');
define('LOGGED_IN_KEY',    'hiAbL{Sy!H;;^l0H+7}JiS`:1fRU>Ck_,eV|qlhTtixv1*53;$hP5+}79.4>&J!,');
define('NONCE_KEY',        ',ij;3nK-FA:BM[e&9Jcn<mMKy|8-5J~vJZni}7/,5i(f|5eI_32Z^z5JTs[mlS:d');
define('AUTH_SALT',        'b.XHV4Dnu-tipk|Foa{F`Ee-LAtads-b$i|jCdDu5-Pl%j:=s@*66-,$/{Ji9c-i');
define('SECURE_AUTH_SALT', '!|W]oqSx`+tgs2l<:FT=KWQdAV/]}1Fsm^%h<emrpMrs <x:i fdRlK2#KGZbIqF');
define('LOGGED_IN_SALT',   'lHshipWdYK1$>GG9DDdP;1l`&W*75Q<{+0_<Fgq|D@C#+8`+[e^k_+Nj0SB,]zj0');
define('NONCE_SALT',       'tR|baJ.OD+Esm%NC-ED_k[~$Ti59>~3g/zOyXlS~|62i]IxvTWaM|t+]271g+kt?');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'newtswm' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'bffaa06e3cfcf2763db139f13eec0eac1e3f070d' );

define( 'WPE_CLUSTER_ID', '100031' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'stopswithme.com', 1 => 'newtswm.wpengine.com', 2 => 'www.stopswithme.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100031', );

$wpe_special_ips=array ( 0 => '104.197.109.50', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );

define( 'WP_SITEURL', 'http://newtswm.staging.wpengine.com' );

define( 'WP_HOME', 'http://newtswm.staging.wpengine.com' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}

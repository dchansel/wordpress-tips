<?php

/* 
* AUTOMATIC HOSTNAME
* Description : Don't use the hostname stored in database
* Better to move website between differents DN, without use an sql update
*/
if (
	(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || $_SERVER['SERVER_PORT'] == 443 ){
	$protocol = 'https'
} else {
	$protocol = 'http'
}

define('WP_HOME' , $protocol . '://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', $protocol . '://' . $_SERVER['HTTP_HOST']);

/*
* REDEFINE UPLOADS FOLDER
* 
*/
define('UPLOADS', 'wp-content/uploads');

/*
* REDEFINE REVISIONS NUMBER
* Description : By default, wordpress store 5 revision per post
* To keep the database small you can reduce this number, or disable revision
*/
define('WP_POST_REVISIONS', 3 );
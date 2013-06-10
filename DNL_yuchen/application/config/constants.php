<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Social Medias
|--------------------------------------------------------------------------
|
 */
define('FACEBOOK_APP_ID', '374269069346722');
define('FACEBOOK_APP_SECRET', '4cc01b2b17f17f21eb720ee898b98141');

define('TWITTER_CONSUMER_KEY', 'Dm3qrK4VhbsnwAKk4Vikw');
define('TWITTER_CONSUMER_SECRET', '6TQZPJHH2oq4sGZgJ30sma4BPJqiNqylfuocAgdrOo');
define('TWITTER_ACCESS_TOKEN', '290942213-kFb64Lz9xHREszlQo9348eWQmmBqCbrrnvfKyOcz');
define('TWITTER_ACCESS_TOKEN_SECRET', 'EPWjR0xoZcEKVxpruj9X915yjY0ZT175LjwFc09pOVA');

define('FLICKR_KEY', '932d7b3cd1460dd42ac67af95c805311');
define('FLICKR_SECRET', 'a9581b3b27aaab5c');

define('GOOGLE_MAP_CLIENT_ID', '714212932054.apps.googleusercontent.com');
define('GOOGLE_MAP_CLIENT_SECRET', 'EzNesMQI2ZMv1een3Xi5FbD5');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */
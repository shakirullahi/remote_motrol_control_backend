<?php
/**
 * This is a sample configuration file. Copy the content of this file into a file called config.php and save in the same directory. This file contain configuration for 2 versions. Development and Production. Comment and uncomment the appropriate lines to match your environment. Then set dbname, DB_USERNAME, DB_PASSWORD variables that match your DB credentials.
 */

date_default_timezone_set( "Asia/Calcutta" );  // http://www.php.net/manual/en/timezones.php

/* Local DB Credentials - uncomment following 3 lines if you are working on local, else comment*/
define( "DB_DSN", "mysql:host=localhost;dbname=db_name_goes_here" );
define( "DB_USERNAME", "db_username_goes_here" );
define( "DB_PASSWORD", "db_password_goes_here" );

/* Remote DB Credentials - comment following 3 lines if you are working on local, else uncomment*/
//define( "DB_DSN", "mysql:host=localhost;dbname=db_name_goes_here" );
//define( "DB_USERNAME", "db_username_goes_here" );
//define( "DB_PASSWORD", "db_password_goes_here" );

// BASE URL, no need to append '/' as last char
define( "BASE_URL", "localhost/siot"); // change this line

error_reporting(E_ALL); //set error reporting level
ini_set( "log_errors", 1);  // set error logging on
//ini_set( "display_errors", false );  // for production version
ini_set( "display_errors", true );  // for development version

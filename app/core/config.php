<?php

if ($_SERVER['SERVER_NAME'] == 'localhost')
{
    /* database config*/
    define('DBNAME','my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

    define('ROOT', 'http://localhost/testmvc/public');
}else
{
    /* database config*/
    define('DBNAME','my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

    define('ROOT', 'https:/www.yourewebsite.com');
}

define('APP_NAME', "My project");
define('APP_DESC', "Insurance website");

/**  True means show errors on live server */
define('DEBUG', true);

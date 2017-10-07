<?php
// Setup file

//Classes
    //Database
    include ($_SERVER['DOCUMENT_ROOT'] . '/series/dynamic/my_blog/classes/database.php');
    //Posts
    include ($_SERVER['DOCUMENT_ROOT'] . '/series/dynamic/my_blog/classes/posts.php');

//Constants
DEFINE('D_TEMPLATE','/series/dynamic/my_blog/template/');
DEFINE('D_CONFIG','/series/dynamic/my_blog/config/');

//Functions
include ($_SERVER['DOCUMENT_ROOT'] . '/series/dynamic/my_blog/functions/get_functions.php');

// Site Title
$site_title = 'Twittler';

//Date and time
date_default_timezone_set('Europe/Riga');
$date = date('H:i, d.m.y', time());


//Page setup


?>
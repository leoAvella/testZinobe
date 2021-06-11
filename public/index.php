<?php
/**
 * Created by PhpStorm.
 * User: leonardoavella
 * Date: 8/06/21
 * Time: 7:18 PM
 */
require  '../vendor/autoload.php';
require '../config/database.php';



if( isset($_GET['r'])  && $_GET['r']!=''){
    if(file_exists( __DIR__.'/../app/controllers/'.$_GET['r'].'.php'))
        //require __DIR__.'/../app/controllers/'.$_GET['r'].'.php';
        require __DIR__.'/../resources/views/templates/main.php';
    else
        require __DIR__.'/../app/controllers/notFound.php';
} else {
    $_GET['r'] = 'register';
    require __DIR__.'/../resources/views/templates/main.php';
}
<?php
/**
 * Created by PhpStorm.
 * User: leonardoavella
 * Date: 10/06/21
 * Time: 9:10 PM
 */

$data = App\customer\CustomerData::getData();



print_r($data);
/*

use Jenssegers\Blade\Blade;

$blade = new Blade(__DIR__.'/../../resources/views',__DIR__.'/../../resources/cache');

echo $blade->render('register', []);
*/
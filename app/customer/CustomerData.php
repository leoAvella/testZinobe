<?php
/**
 * Created by PhpStorm.
 * User: leonardoavella
 * Date: 10/06/21
 * Time: 9:54 PM
 */

namespace App\customer;

use GuzzleHttp\Client;


class CustomerData {

    function getData(){
        $client = new Client();
        $req = $client->request('GET', 'http://www.mocky.io/v2/5d9f39263000005d005246ae?mocky-delay=10s');
        $res = json_decode($req->getBody()->getContents(), true);
        return $res;
    }

}


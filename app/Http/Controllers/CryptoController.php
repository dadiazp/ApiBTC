<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helpers\CryptoAvgApi;

class CryptoController extends Controller{

    public function getPrice(){
        
        $cryptoPrice = new CryptoAvgApi('BTC', 'USD');

        return $cryptoPrice->getCryptoPrice();

    }

}

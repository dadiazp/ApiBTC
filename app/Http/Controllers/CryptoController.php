<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helpers\CryptoAvgApi;

class CryptoController extends Controller{

    public function getPrice(){
        
        $crytpoPrice = new CryptoAvgApi('BTC', 'USD');

        return $crytpoPrice->getCryptoPrice();

    }

}

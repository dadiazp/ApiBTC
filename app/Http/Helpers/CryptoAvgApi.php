<?php

namespace App\Http\Helpers;

use Illuminate\Support\Facades\Http;
use App\Repository\CryptoRepository;

class CryptoAvgApi{

    private $crypto;
    private $fiat;
    private $base_url;
    private $headers;
    private $cryptoRepository;

    public function __construct($crypto, $fiat){
        $this->crypto = $crypto;
        $this->fiat = $fiat;
        $this->base_url = env('BTCURL', null);
        $this->headers = env('BTCAVERAGE', null);
        $this->cryptoRepository = new CryptoRepository();
    }

    public function getCryptoPrice(){

        $response = Http::withHeaders([
            'x-ba-key'  => $this->headers
        ])->get($this->base_url . 'indices/global/ticker/short', [
            'crypto' =>  $this->crypto,
            'fiat'   =>  $this->fiat
        ]);
        
        $prices = $response[$this->crypto . $this->fiat];

        $prices['last'] = round($prices['last'], 3);
        $prices['averages']['day'] = round($prices['averages']['day'], 3);

        $latest = $this->cryptoRepository->getLatestInserted()->price;
        $percentage = (($prices['last'] - $latest)*100/$latest);
        $prices['percentage'] = round($percentage, 6);

        $params = array(
            'price' => $prices['last']
        );

        $this->cryptoRepository->create($params);

        return($prices);

    }

}
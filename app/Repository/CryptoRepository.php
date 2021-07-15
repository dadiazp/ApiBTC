<?php

namespace App\Repository;

use App\Models\btc_history;

class CryptoRepository{

    protected $local;

    public function __construct()
    {

        $this->btc_history = new btc_history();

    }
    
    public function create(array $params){

        $this->btc_history->create($params);

    }

    public function getLatestInserted(){
       
        return $this->btc_history->latest('id')->first();

    }
}
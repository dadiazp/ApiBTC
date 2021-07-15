<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class btc_history extends Model
{
    public $table = 'btc_history';

    protected $fillable = [
        'id', 'price', 'created_at, updated_at'
    ];

}

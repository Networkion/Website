<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'creditcard',
        'balance',
        'livretA',
        'livretJ',
        'ammountA',
        'ammountJ',
        'idUsers',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUsers');
    }
}

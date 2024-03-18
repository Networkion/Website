<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $fillable = ['balance', 'livretJ', 'LivretA', 'ammountA', 'ammountJ'];
    use HasFactory;
}

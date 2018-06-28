<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    protected $fillable = ['num_500k', 'num_200k', 'num_100k', 'num_50k', 'num_20k',
        'num_10k', 'num_5k', 'num_2k', 'num_1k', 'num_500', 'num_other'];
}

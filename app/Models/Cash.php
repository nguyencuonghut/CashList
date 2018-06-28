<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    protected $fillable = ['customer_name', 'num_500k', 'num_200k', 'num_100k', 'num_50k', 'num_20k',
        'num_10k', 'num_5k', 'num_2k', 'num_1k', 'num_500', 'num_other', 'pay_1', 'pay_2', 'pay_3', 'pay_4'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $table = 'Portfolio';
    protected $fillable = [
        'portfolio_image', 'user_id'
    ];
}

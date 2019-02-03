<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
	protected $table = 'ads';

    protected $fillable = [
        'name', 'location', 'area', 'noOfbedrooms', 'noOfbathrooms', 'imagePath'
    ];
}

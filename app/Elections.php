<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elections extends Model
{
    public $table="elections";
    protected $fillable = [
        'name','date'
    ];
}

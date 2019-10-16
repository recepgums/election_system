<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    public $table="candidates";
    protected $fillable = [
        'user_id','election_id','description','files','votes'
    ];
}

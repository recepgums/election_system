<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    public $table="votes";
    protected $fillable = [
        'voter_id','election_id','candidate_id'
    ];
}

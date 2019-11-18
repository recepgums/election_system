<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    public $table="candidates";
    protected $fillable = [
        'user_id','election_id','description','files','votes'
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function election(){
        return $this->belongsTo(Elections::class, 'election_id');
    }
    public function files_func(){
        return $this->belongsTo(Files::class, 'profile_file_id');
    }
}

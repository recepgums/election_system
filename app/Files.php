<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    public $table="files";
    protected $fillable = [
        'profile_file_id','file_name'
    ];
}

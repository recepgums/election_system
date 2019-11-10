<?php

namespace App\Http\Controllers;

use App\Candidates;
use App\Files;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProfileController extends Controller
{
    public function show($id){

        $candidate=Candidates::where('user_id','=', $id)->orderBy('created_at','desc')->first();
        $user_data=User::find($id);
        $files=Files::where('profile_file_id','=',$candidate->id)->get();
        View::share('candidate',$candidate);
        View::share('files',$files);
        View::share('user_data',$user_data);
        return view('candidate.profile');
    }
}

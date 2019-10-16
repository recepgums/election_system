<?php

namespace App\Http\Controllers;

use App\Candidates;
use App\Elections;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CandidateController extends Controller
{
    public function show(){
        $from = Carbon::now();
        $instance = Elections::orderBy('deadline', 'desc')->first();
        $valid_elections= Elections::whereBetween('deadline', [$from, $instance['deadline']])->get();

        View::share('valid_elections',$valid_elections);
        return view('candidate.application');
    }
    public  function create(Request $request,$id){
        $data=new Candidates();
        $data->user_id=$id;
        $data->election_id=$request->election;
        $data->description="descriptions..";

        $data->save();
        return redirect()->route('calender_show');
    }
}

<?php

namespace App\Http\Controllers;

use App\Votes;
use Illuminate\Http\Request;

class VotesController extends Controller
{
    public function vote(Request $request,$id){
        $data=new Votes();
        $data->voter_id=$id;
        $data->election_id=$request->election;
        $data->candidate_id=$request->vote;

        $data->save();
        return redirect()->back();
    }
}

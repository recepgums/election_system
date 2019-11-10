<?php

namespace App\Http\Controllers;

use App\Candidates;
use App\Elections;
use App\Votes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;

class ElectionsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $elections = Elections::all();
        View::share('elections', $elections);
        return view('admin.calender_show');
    }

    public function create(Request $request)
    {
        $data = new Elections();
        $data->name = $request->name;
        $data->deadline = $request->date;
        $data->save();
        return redirect()->route('calender_show');
    }

    public function details($id)
    {//election idsi
        $have_voted=0;
        if(Votes::where('voter_id', auth()->user()->id)->where('election_id', $id)->get()->count() > 0){
            $have_voted=1;
        }
        $candidates = Candidates::all();
        $election = Elections::find($id);
        View::share('candidates', $candidates);
        View::share('have_voted', $have_voted);
        View::share('election', $election);
        return view('calendar.details');
    }
}

<?php

namespace App\Http\Controllers;

use App\Candidates;
use App\Elections;
use App\Files;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


class CandidateController extends Controller
{
    public function show()
    {
        $from = Carbon::now();
        $instance = Elections::orderBy('deadline', 'desc')->first();
        $valid_elections = Elections::whereBetween('deadline', [$from, $instance['deadline']])->get();

        View::share('valid_elections', $valid_elections);
        return view('candidate.application');
    }

    public function edit($id, Request $request)
    {
        $data = Candidates::find($id);
        $data->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $data->picture = $name;
        }

        $data->save();


        if ($request->hasFile('candidate_file')) {
            $new_file = new Files();
            $new_file->profile_file_id = $data->id;
            $image = $request->file('candidate_file');
            $name = time() . '.' . $image->getClientOriginalName();
            $new_file->file_name = $name;
            $destinationPath = public_path('/candidate_files');
            $image->move($destinationPath, $name);
            $new_file->save();

        }
        return redirect()->back();
    }

    public function delete_file($id)
    {
        $file = Files::find($id);
        $file->delete();
        $file_path = public_path('candidate_files'.'\\').$file->file_name;
        unlink($file_path);
        return redirect()->back();
    }

    public function create(Request $request, $id)
    {
        $data = new Candidates();
        $data->user_id = $id;
        $data->election_id = $request->election;
        $data->file_id = DB::table('candidates')->max('file_id') + 1;
        $data->description = "descriptions..";

        $data->save();
        return redirect()->route('calender_show');
    }

    public function admission()
    {
        $data = Candidates::where('confirm', '=', '0')->get();
        View::share('data', $data);

        return view('admin.admission');
    }

    public function confirm($id)
    {
        $data = Candidates::find($id);
        $data->confirm = "1";
        $data->save();
        return redirect()->route('Admission');
    }

    public function refuse($id)
    {
        $data = Candidates::find($id);
        $data->confirm = 2;
        $data->save();
        return redirect()->route('Admission');
    }
}

<?php

namespace App\Http\Controllers;

use App\Elections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ElectionsController extends Controller
{
    public function show()
    {
        $elections=Elections::all();
        View::share('elections',$elections);
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
}

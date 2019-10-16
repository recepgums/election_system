<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public  function show(){
        $data=User::all();
        View::share('data', $data);
        return view('admin.show');
    }
    public  function edit_page($id){
        $data=User::find($id);
        View::share('data', $data);
        return view('admin.edit_page');
    }
    public  function update(Request $request,$id){
        $data=User::find($id);
        $data->name=$request->name;
        $data->email=$request->email;

        $data->save();
        return redirect()->route('AdminPanel');
    }
    public  function delete_user($id){
        $data=User::find($id);
        $data->delete();
        return redirect()->route('AdminPanel');
    }
}

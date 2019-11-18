@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('profile_edit', $candidate->id)}}" method="post" enctype="multipart/form-data">
            @csrf
        <div style="text-align: center" class="profile-userpic">
            <img style="width: 19%;" src="{{asset('images/'.$candidate->picture)}}" class="img-responsive" alt="">
            <br><br>
            <input type="file" style="padding-left: 100px;" name="image" class="btn-primary btn" >
            <br>
            <input style="border-color: black" class="form-control" type="text" value="{{$user_data->name}} " readonly><br><br>
            <textarea style="border-color: black" class="form-control" name="description" id="" cols="70" rows="4">{{$candidate->description}}</textarea><br><br><br>
            <div style="border: 4px dashed #8e9cff;width: 100%;height: 100px;">
                <input  type="file" name="candidate_file"  />
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary form-control">Edit</button>
        </div>
        </form>
        @if(strlen($files) > 2)
            <center><h1 >Files</h1></center>
            @foreach($files as $item)<br>
                <form action="{{route('delete_file', $item->id)}}" method="post">
                    @csrf
                    <div>
                        <a style="font-size: 25px" href="{{asset('candidate_files/'.$item->file_name)}}">{{substr($item->file_name,11)}}</a> <button type="submit" class="btn-danger btn " style="float: right">X</button>
                        <br>
                    </div>
                </form>
            @endforeach
        @endif
    </div>
@endsection('content')

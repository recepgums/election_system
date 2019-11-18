@extends('layouts.app')
@section('content')
        <div style="text-align: center" class="container">
            <span ><h2><b>{{$election->name}}</b></h2><br></span>
            @if($have_voted)
                <div class="alert-success">Your vote get registered successfully!</div>
            @else
            <hr style="border-width: 10px"/>
        Candidates: <br>
            <form action="{{route('vote',auth()->user()->id)}}" method="post">
                @csrf
            <div class="row">
                @foreach($candidates as $key=>$candidate)
                    @if($candidate->election_id==$election->id)
                        @csrf
                        @if($key==3)</div><div class="row">@endif
                        @if($candidate->confirm==1)
                        <div class="card col-sm" style="width: 18rem;">
                            <input type="hidden" name="election" value="{{$election->id}}">
                            <div style="height: 150px;"><center><img style="width: 120px;" src="{{asset('images/'.$candidate->picture)}}" class="img-responsive" alt=""></center></div>
                            <br><br>
                            <div class="card-body">
                                <h5 class="card-title"> {{$candidate->user->name}}</h5>
                                <h6 class="card-text">{{$candidate->description}}</h6><br>
                                @foreach (\App\Files::where('profile_file_id','=', $candidate->file_id)->get() as $file)
                                    <a href="{{asset('candidate_files/'.$file->file_name)}}">
                                        {{substr($file->file_name,11)}}
                                    </a><br>
                                @endforeach
                                <input class="form-control" type="radio" value="{{$candidate->id}}" name="vote">
                            </div>
                        </div>
                    @endif
                    @endif
                @endforeach
            </div>
                <br><br>
                <div style="text-align: center">
                    <input class="btn btn-primary" type="submit" value="Vote!">
                </div>
            </form>
                @endif
        </div>

@endsection('content')

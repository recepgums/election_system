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
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> {{$candidate->user->name}}</h5>
                                <p class="card-text">Some  the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a><br><br>
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

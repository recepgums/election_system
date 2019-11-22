@extends('layouts.app')
@section('content')

    @foreach($candidates as $key=>$candidate)
        <?php $candidate_total_vote= \App\Votes::where('candidate_id','=',$candidate->id)->where('election_id',$election_id)->get()->count()?>
    <div class="row">
            <div style="height: 150px;">
                <center><img style="width: 60px; height: 80px;" src="{{asset('images/'.$candidate->picture)}}" class="img-responsive" alt=""></center>
                <br>
                <h3 class=" text-center"> {{$candidate->user->name}}</h3>
                <h5 class="text-center small">
                   Total Vote:  {{$candidate_total_vote}}
                </h5>
            </div>
            <div style="height: 20px;width: 75%;margin-left: 50px" class="">
                <br><br><br>
                <div style="background-color: {{$colors[$key]}};height: 10px;width: {{$candidate_total_vote/$total_votes*100}}%"></div>
                <h5 class="float-right">
                    {{$candidate_total_vote/$total_votes*100}}%
                </h5>
            </div>
    </div>
        <br>
    @endforeach
@endsection('content')

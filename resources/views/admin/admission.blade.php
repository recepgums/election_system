@extends('layouts.app')
@section('content')
this is the admission page
@foreach($data as $item)

@endforeach
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_content">
                    <!-- start project list -->
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th style="width: 20%">User Name</th>
                            <th style="width: 15%">Election Name</th>
                            <th style="width: 12%">Application Date</th>
                            <th style="width: 20%"><center>Confirm</center></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $key=>$item)
                            <tr>
                                <td style="width: 5%">{{$key+1}}</td>
                                <td style="width: 30%">
                                    <a>{{$item->user->name}}</a>
                                </td>
                                <td style="width: 10%">
                                    {{$item->election->name}}
                                </td>
                                <td style="width: 10%">
                                    <small>{{$item->created_at}}</small>
                                </td>
                                <td style="width: 20%">
                                    <button class="btn btn-success"><a  style="color:#fff;" href="{{route('confirm',$item->id)}}"><i class="fa fa-check"></i> Confirm </a></button>
                                    <button class="btn btn-danger"><a style="color:white" href="{{route('refuse',$item->id)}}"><i class="fa fa-trash-o"></i> Refuse</a></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- end project list -->
                </div>
            </div>
        </div>
    </div>
@endsection('content')

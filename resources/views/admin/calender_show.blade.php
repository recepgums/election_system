@extends('layouts.app')
@section('content')
    @if(auth()->user()->role==1)
        <div  style="background-color:wheat;width:50%;height: 50%; padding: 15px;" >
            <form action="{{route('create_election')}}" method="post">
                @csrf
                <input type="text" class="form-control" name="name" placeholder="Name...">
                <br><br>
                <input type="date" class="form-control" name="date" placeholder="Date...">
                <br>
                <button class="btn btn-primary">Create</button>
            </form>
        </div>
        @endif
    <br><br>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">
                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 10%">No</th>
                                <th style="width: 15%">Election Name</th>
                                <th style="width: 15%">Deadline</th>
                                <th style="width: 15%">Details</th>
                                @if(auth()->user()->role==1)<th style="width: 15%"><center>Delete</center></th>@endif
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($elections as $key=>$item)
                                <tr>
                                    <td style="width: 10%">{{$key+1}}</td>
                                    <td style="width: 15%">
                                        <a>{{$item->name}}</a>
                                    </td>
                                    <td style="width: 15%">
                                        {{date("D", strtotime($item->deadline))}} {{date("F", strtotime($item->deadline))}}  {{date("Y", strtotime($item->deadline))}} 17:59
                                    </td>
                                    <td style="width: 15%">
                                        @if($item->deadline < Carbon\Carbon::now())
                                            <a  class="btn btn-primary" style="color:white" href="{{route('details',$item->id)}}" ><i class="fa fa-sliders"></i> Statistics</a>
                                        @else
                                            <a  class="btn btn-success" style="color:white" href="{{route('details',$item->id)}}" ><i class="fa fa-table"></i> Vote It!</a>
                                        @endif
                                    </td>
                                    @if(auth()->user()->role==1) <td style="width: 15%">
                                        <button class="btn btn-danger" style="color:white" data-toggle="modal" data-target="#exampleModal{{$item->id}}"><i class="fa fa-trash-o"></i> Delete</button>
                                    </td>@endif
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h5 class="container">Are you sure you want to delete election: <br><br><b>"{{$item->name}}" ?</b></h5>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                                <button type="button" class="btn btn-success" > <a style="color:white;" href="">Yes</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- end project list -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection('content')

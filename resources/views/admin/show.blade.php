@extends('layouts.app')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Menu
                <small>List</small>
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>

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
                                <th style="width: 15%">E-mail</th>
                                <th style="width: 12%">Created Date</th>
                                <th style="width: 12%">Updated Date</th>
                                <th style="width: 20%"><center>Edit</center></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key=>$item)
                            <tr>
                                <td style="width: 5%">{{$key+1}}</td>
                                <td style="width: 30%">
                                    <a>{{$item->name}}</a>
                                </td>
                                <td style="width: 10%">
                                    {{$item->email}}
                                </td>
                                <td style="width: 10%">
                                    <small>{{$item->created_at}}</small>
                                </td>
                                <td style="width: 10%">
                                    <small>{{$item->updated_at}}</small>
                                </td>
                                <td style="width: 20%">
                                   <button class="btn btn-info"><a  style="color:#fff;" href="{{route('Edit',$item->id)}}"  ><i class="fa fa-pencil"></i> Edit </a></button>
                                   <button class="btn btn-danger" style="color:white" data-toggle="modal" data-target="#exampleModal{{$item->id}}"><i class="fa fa-trash-o"></i> Delete</button>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h5 class="container">Are you sure you want to delete user: <br><br><b>"{{$item->name}}" ?</b></h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                                            <button type="button" class="btn btn-danger" ><a style="color:white;" href="{{route('delete_user',$item->id)}}">Yes</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection('content')

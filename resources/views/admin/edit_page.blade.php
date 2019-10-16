@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <form class="form-horizontal form-label-left" action="{{route('update',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <h2>Menu Name</h2>
                            <div class="col-sm-12">
                                <input id="title" name="name" type="text" value="{{$data->name}}" style="font-size: 15px;" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Menu Content</h2>
                            <div class="col-sm-12">
                                <input id="summernote" name="email"  type="text" class="form-control" style="font-size: 15px;" value="{{$data->email}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection('content')

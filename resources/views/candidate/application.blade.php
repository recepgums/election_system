@extends('layouts.app')
@section('content')

    <h1 align="center"><b>Agreement</b></h1>

    <small>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean urna massa, dapibus sit amet ullamcorper in, efficitur eu orci.
        Integer mattis, nulla sit amet elementum commodo, magna quam lobortis ligula, quis pretium eros mi quis tellus. Proin id neque odio. Vestibulum vulputate justo ut enim viverra, eu dignissim nulla vestibulum. Praesent blandit eros ex. Vivamus rutrum, diam sed vulputate lobortis, velit nulla vehicula massa, sed porta ante turpis a lacus. Fusce eget mollis lectus. Cras ultrices cursus enim maximus luctus. Morbi ex tortor, tincidunt sagittis sollicitudin at, mollis sed mi. Mauris pretium enim non nibh aliquam pretium. Ut dignissim finibus arcu vel eleifend. Fusce vehicula mi ac porta blandit. Aliquam tempor congue elit at luctus. Suspendisse vitae ante at erat ultrices gravida vitae sed sapien. Pellentesque pulvinar leo et urna sollicitudin, vitae aliquam erat tempus.

            Nulla dui metus, facilisis eget euismod ac, pulvinar vel nisl.
        Donec interdum libero a tempor faucibus. Aliquam mollis neque quis leo pellentesque volutpat. Maecenas in placerat mi. Quisque dignissim accumsan venenatis. Ut faucibus turpis sit amet ante facilisis consequat. Nunc malesuada magna vitae lobortis venenatis. Praesent ac elementum urna, nec fermentum justo. Duis sed quam sit amet lacus ullamcorper volutpat ut a magna.
        Nam mollis mollis mi, nec sagittis metus eleifend quis. Quisque non rhoncus tortor. Suspendisse gravida lectus at est consequat sollicitudin. Mauris ut vulputate risus, sed sodales lorem. Proin eget justo urna. In ultricies elit at urna accumsan aliquam. Mauris malesuada urna et lacus egestas hendrerit finibus quis leo. Aliquam lobortis laoreet finibus. Nam aliquet, nisi sit amet porta aliquam, mauris leo tincidunt augue, vitae posuere lorem neque eu mi. Duis porta dolor nibh, id bibendum elit euismod a. Maecenas ullamcorper arcu a nisi egestas egestas. Donec a lacus magna. Duis nec consectetur velit. In gravida ullamcorper nunc et dictum.ulla dui metus, facilisis eget euismod ac, pulvinar vel nisl.
        Donec interdum libero a tempor faucibus. Aliquam mollis neque quis leo pellentesque volutpat. Maecenas in placerat mi. Quisque dignissim accumsan venenatis. Ut faucibus turpis sit amet ante facilisis consequat. Nunc malesuada magna vitae lobortis venenatis. Praesent ac elementum urna, nec fermentum justo. Duis sed quam sit amet lacus ullamcorper volutpat ut a magna.
        Nam mollis mollis mi, nec sagittis metus eleifend quis. Quisque non rhoncus tortor. Suspendisse gravida lectus at est consequat sollicitudin. Mauris ut vulputate risus, sed sodales lorem. Proin eget justo urna. In ultricies elit at urna accumsan aliquam. Mauris malesuada urna et lacus egestas hendrerit finibus quis leo. Aliquam lobortis laoreet finibus. Nam aliquet, nisi sit amet porta aliquam, mauris leo tincidunt augue, vitae posuere lorem neque eu mi. Duis porta dolor nibh, id bibendum elit euismod a. Maecenas ullamcorper arcu a nisi egestas egestas. Donec a lacus magna. Duis nec consectetur velit. In gravida ullamcorper nunc et dictum.
    </small><br><br>

    <div style="text-align: center; align-items: center" class="text-center  center-block">
        <form action="{{route('create_candidate',auth()->user()->id)}} " method="post">
            @csrf
            <select style="width: 50%;margin-left: 25%;color:black;border-color: black" name="election" id="combobox" class="form-control"  >
                @foreach($valid_elections as $item)
                    <option value="{{$item->id}}">{{$item->name}} - {{$item->deadline}}</option>
                @endforeach
            </select><br>
            <h6>I have read all agreement and I accept.</h6><br>
            <input type="checkbox" name="check" id="myCheck" value="1" onclick="bas()">
            <br>
            <button class="btn btn-success" id="myButton" disabled="true">Application</button>
            <br><br><br>
        </form>
    </div>
    <script>
        function bas() {
            var checkBox = document.getElementById("myCheck");
            var button = document.getElementById("myButton");
            if (checkBox.checked == true){
                button.disabled = false;
            } else {
                button.disabled = true;
            }
        }
    </script>
@endsection('content')

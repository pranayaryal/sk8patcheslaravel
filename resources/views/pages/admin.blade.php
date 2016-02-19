@extends('layouts.admin')


@section('content')
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Welcome to the admin section</div>--}}
                    {{--<div class="panel-body">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<h3>Add a Patch</h3>--}}
                            {{--</div>--}}
                        {{--</div>--}}


                        {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin') }}">--}}
                            {{--{!! csrf_field() !!}--}}

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-4 control-label">Patch Name</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input type="text" class="form-control" name="patch">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-4 control-label">Patch Price</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input type="text" class="form-control" name="price">--}}

                                {{--</div>--}}
                            {{--</div>--}}
                            {{----}}

                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-6 col-md-offset-4">--}}
                                    {{--<button type="submit" class="btn btn-primary">--}}
                                        {{--<i class="fa fa-btn fa-sign-in"></i>Store--}}
                                    {{--</button>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                        {{----}}


                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
       <div class="container">
           <h2>Here are the patches</h2>
            <div class="panel panel-default">

                <div class="row">
                    @foreach($patches as $patch)

                        <div class="col-md-3">
                            <h3>Patch Name: {{ $patch->patch_name }}</h3>
                            <p>Description: {{$patch->description}}</p>
                            <li>Price: ${{$patch->price}}</li><br>
                            <a class="btn btn-primary" href="/patches/{{$patch->id}}/edit" role="button">Edit</a>
                            <form action="/patches/{{$patch->id}}" method="post">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i> Delete Patch
                                </button>
                            </form>
                            <form action="/admin" class="dropzone" method="post">
                                {{csrf_field()}}
                            </form>

                        </div>


                    @endforeach
                </div>
            </div>

           <a class="btn btn-primary" href="/patches/create" role="button">Create a New Patch</a>



           <form action="/admin" class="dropzone" method="post">
               {{csrf_field()}}
           </form>
       </div>



    {{--</div>--}}




@stop

@section('scripts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@stop
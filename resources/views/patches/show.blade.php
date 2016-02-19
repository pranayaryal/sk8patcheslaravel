@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>{{$patch->patch_name}}</h1>
        <h3>{{$patch->description}}</h3>
    </div>

@stop
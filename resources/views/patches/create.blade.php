@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="panel-body">
            <div class="col-md-8">
                <form action="/admin" method="POST" class="form-horizontal">
                    {!! csrf_field() !!}

                    @include('patches.partial.form')

                            <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i> Create Patch
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

@stop
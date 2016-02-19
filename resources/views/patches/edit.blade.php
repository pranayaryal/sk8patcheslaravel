@extends('layouts.app')

@section('content')


  <div class="container">
      <div class="panel-body">
          <form action="/patches/{{$patch->id}}" method="POST" class="form-horizontal">
              {!! csrf_field() !!}
              {!! method_field('PUT') !!}

              @include('patches.partial.form')

              <!-- Add Task Button -->
              <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-6">
                      <button type="submit" class="btn btn-default">
                          <i class="fa fa-plus"></i> Edit Patch
                      </button>
                  </div>
              </div>
          </form>
      </div>
  </div>

@stop
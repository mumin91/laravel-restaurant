@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')


    @if(Session::has('status'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ Session::get('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
     

  



@endsection
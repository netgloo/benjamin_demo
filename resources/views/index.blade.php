@extends('layouts.main', ['active' => 'index'])


{{-- Page Title --}}
@section('page-title', 'Index')


{{-- Layout Content --}}
@section('content')
  
  <p class="lead">
    <h2>Index <small>/</small></h2>
  </p>

  <div class="row">
    <div class="col-xs-12">
      <a href="{{ trlink('/folder/page1') }}" class="btn btn-block btn-default btn-lg">Next page</a>
      <br>
    </div>
  </div>

  <p class="lead">
    This is the index page available at root url "/". Server side this page is inside a view named <code>index.blade.php</code>.
  </p>

@endsection

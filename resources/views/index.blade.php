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

  <p class="lead">
    In the footer below is written the server time when this page is first loaded. When you see the server time change it means there has been a page reload.
  </p>
  <p class="lead">
    <strong>Tip:</strong> try to force a page reload pressing the refresh button (<i class="fa fa-refresh"></i>) on your browser.
  </p>

@endsection

@extends('layouts.main', ['active' => 'folder.page2'])


{{-- Page Title --}}
@section('page-title', 'Folder - Page 2')


{{-- Layout Content --}}
@section('content')
  
  <p class="lead">
    <h2>Folder - Page 2 <small>/folder/page2</small></h2>
  </p>

  <div class="row">
    <div class="col-xs-12">
      <a href="{{ trlink('/folder/page3') }}" class="btn btn-block btn-default btn-lg">Next page</a>
      <br>
    </div>
  </div>

  <p class="lead">
    Another page inside a folder.
  </p>
  <p>
    <a href="{{ trlink('page3') }}">Go to page 3</a>
  </p>

@endsection

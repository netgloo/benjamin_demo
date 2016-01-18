@extends('layouts.main', ['active' => 'folder.page1'])


{{-- Page Title --}}
@section('page-title', 'Folder - Page 1')


{{-- Layout Content --}}
@section('content')
  
  <p class="lead">
    <h2>Folder - Page 1 <small>/folder/page1</small></h2>
  </p>

  <div class="row">
    <div class="col-xs-12">
      <a href="{{ trlink('/folder/page2') }}" class="btn btn-block btn-default btn-lg">Next page</a>
      <br>
    </div>
  </div>

  <p class="lead">
    This is the one page inside a folder. Server side is inside a file named <code>page1.blade.php</code> inside a folder named <code>folder</code>
  </p>
  <p>
    <a href="{{ trlink('page2') }}">Go to one</a>
  </p>

@endsection

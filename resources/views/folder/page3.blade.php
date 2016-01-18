@extends('layouts.main', ['active' => 'folder.page3'])


{{-- Page Title --}}
@section('page-title', 'Folder - Page 3')


{{-- Layout Content --}}
@section('content')

  <p class="lead">
    <h2>Folder - Page 3 <small>/folder/page3</small></h2>
  </p>

  <div class="row">
    <div class="col-xs-12">
      <a href="{{ trlink('../scripts') }}" class="btn btn-block btn-default btn-lg">Next page</a>
      <br>
    </div>
  </div>

  <p class="lead">
    A third page inside a folder.
  </p>
  <p>
    <a href="{{ trlink('./page1') }}">Go to page 1</a>
  </p>

@endsection

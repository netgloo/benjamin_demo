@extends('layouts.main', ['active' => 'gallery'])


{{-- Page Title --}}
@section('page-title', 'Images')


{{-- Layout Content --}}
@section('content')
  
  <p class="lead">
    <h2>Images <small>/gallery</small></h2>
  </p>

  <div class="row">
    <div class="col-xs-12">
      <a href="{{ trlink('/transitions') }}" class="btn btn-block btn-default btn-lg">Next page</a>
      <br>
    </div>
  </div>

  <p class="lead">
    Resources, like images, are loaded just when the page is navigated. This allow a lazy loading for heavy resources.
  </p>
  <p class="lead">
    You can check it with the <i>Network</i> tab in your browser's <i>developer tools</i>.
  </p>

  <br>
  
  <p class="lead">
    @for ($i = 0; $i < 4; $i++)
      <div name="{{ $i + 1 }}" class="row">
        @for ($j = 1; $j <= 3; $j++)
        <div class="col-xs-4">
          <img width="100%" src="/images/photo{{ ($i * 3) + $j }}.jpg" />
        </div>
        @endfor
      </div>
      <br>
    @endfor
  </p>


@endsection

@extends('layouts.main', ['active' => 'scripts'])


{{-- Page Title --}}
@section('page-title', 'Scripts')


{{-- Layout Content --}}
@section('content')
  
  <p class="lead">
    <h2>Scripts <small>/scripts</small></h2>
  </p>

  <div class="row">
    <div class="col-xs-12">
      <a href="{{ trlink('/gallery') }}" class="btn btn-block btn-default btn-lg">Next page</a>
      <br>
    </div>
  </div>

  <p class="lead">
    Scripts embedded inside the page's content will be executed each time the page is navigated.
  </p>
  <p class="lead">
    For example, the following script is embedded in this page (url "/scripts") and will print the current time just after the <strong>Output</strong> text below.
  </p>

  <pre><code>&lt;script type=&quot;text/javascript&quot;&gt;
  document.getElementById(&#39;scriptOutput&#39;).innerHTML += Date();
&lt;/script&gt;</code></pre>
      
  <p class="lead">
    <strong>Output</strong>:
    <span id="scriptOutput"></span>
    <script type="text/javascript">
      // Note: JQuery could not be still loaded here!
      document.getElementById('scriptOutput').innerHTML += Date();
    </script>
  </p>
  <p class="lead">
    If you change page you will see the time above changing each time this page is navigated.
  </p>

  <br>

@endsection

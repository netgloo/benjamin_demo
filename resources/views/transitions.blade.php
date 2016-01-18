@extends('layouts.main', ['active' => 'transitions'])


{{-- Page Title --}}
@section('page-title', 'Transitions')


{{-- Layout Content --}}
@section('content')
  
  <p class="lead">
    <h2>Transitions <small>/transitions</small></h2>
  </p>

  <div class="row">
    <div class="col-xs-12">
      <a href="/transitions/one" class="btn btn-block btn-default btn-lg">Next page</a>
      <br>
    </div>
  </div>

  <p class="lead">
    You can easly add custom code <strong>after</strong> a page is changed. 
  </p>

  <p class="lead">
    So you have a very simple way to add transitions animations when the user go from a page to another one.
  </p>

  <p class="lead">
    For example, the code below is the one used on this page and, using <a href="http://julian.com/research/velocity/#uiPack">Velocity UI Pack</a>, shows you how is simple add some animation changing page:
  </p>
  <pre><code>Benjamin.on(&#39;/transitions&#39;, {

  /**
   * After the page is changed
   */
  &#39;after&#39;: function(next) {

    $(&quot;.content&quot;).velocity(&quot;transition.slideRightIn&quot;, {
      complete: function(elements) { 
        // Remember to call next() when the transition is finish!
        return next();
      }
    });

    return;
  },

)};</code></pre>

@endsection

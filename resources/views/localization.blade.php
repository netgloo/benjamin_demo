@extends('layouts.main', ['active' => 'localization'])


{{-- Page Title --}}
@section('page-title', trans('messages.localization.title'))


{{-- Layout Content --}}
@section('content')
  
  <p class="lead">
    <h2>{{ trans('messages.localization.title') }} <small>{{ trans('messages.localization.url') }}</small></h2>
  </p>

  <div class="row">
    <div class="col-xs-12">
      <a href="{{ trlink('/coffee') }}" class="btn btn-block btn-default btn-lg">{{ trans('messages.next_page') }}</a>
      <br>
    </div>
  </div>

  <p class="lead">
    {{ trans('messages.localization.text1') }}
  </p>

  <p class="lead">
    {!! trans('messages.localization.text2') !!}
  </p>

  <p class="lead">
    {!! trans('messages.localization.text3') !!}
  </p>

@endsection


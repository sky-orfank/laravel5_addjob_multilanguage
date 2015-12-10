@extends('app')

@section('content')

<h1>{{ Lang::get('messages.welcome') }}</h1>

{!! Form::open(array('action' => 'JobController@store','id' => 'job-form')) !!}


  <div id="msj-success"></div>
  <div id="title-err"></div>
  <div><p><b>{{ Lang::get('messages.title') }}</b><p><p>{!! Form::text('title', @$title) !!}</p></div>
  <div id="desc-err"></div>
  <div><p><b>{{ Lang::get('messages.description') }}</b></p><p>{!! Form::text('description', @$description) !!}</p></div>
  <div id="salary-err"></div>
  <div><p><b>{{ Lang::get('messages.salary') }}</b></p><p>{!! Form::text('salary', @$salary) !!}</p></div>
  {!! Form::submit( Lang::get('messages.submit_btn') ) !!}

{!! Form::close() !!}

{!! link_to_route('jobs', Lang::get('messages.to_added')) !!}

@stop

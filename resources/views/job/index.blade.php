@extends('app')

@section('content')

    @foreach($jobs as $job)
        <article>
            <h2>{{ $job->title }}</h2>
        </article>
    @endforeach


<a href="create">{{ Lang::get('messages.add_job') }}</a>
@stop

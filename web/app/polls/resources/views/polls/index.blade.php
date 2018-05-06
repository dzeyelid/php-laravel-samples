@extends('layouts.app')

@section('title', 'Index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Polls</h2>
        </div>
    </div>

    <div class="row">
        @foreach ($polls as $poll)
        <div class="col">
            <a href="{{ route('polls.show', ['poll' => $poll]) }}">
                {{ $poll->title }}
            </a>
        </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="{{ route('polls.create') }}" role="button">
                Craete new
            </a>
        </div>
    </div>
</div>
@endsection
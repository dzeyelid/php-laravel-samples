@extends('layouts.app')

@section('title', $poll->title)

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Polls</h2>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10">
            <h3>{{ $poll->title }}</h3>
        </div>
        <div class="col-10">
            {{ $poll->description }}
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <a class="btn btn-link" href="{{ route('polls.index') }}"s>
                Back to index
            </a>
        </div>
    </div>
</div>
@endsection
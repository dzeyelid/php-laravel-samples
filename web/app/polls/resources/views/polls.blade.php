@extends('layouts.app')

@section('title', 'Index')

@section('content')
    <h2>Polls</h2>
    @foreach ($polls as $poll)
        <div>{{ $poll->title }}</div>
        <div>{{ $poll->description }}</div>
    @endforeach
@endsection
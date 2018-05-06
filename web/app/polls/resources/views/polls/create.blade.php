@extends('layouts.app')

@section('title', 'Create')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Create new poll</h2>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="{{ route('polls.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="ex. Which animal do you like?">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a class="btn" href="{{ url()->previous() }}"s>
                Back
            </a>
        </div>
    </div>
</div>
@endsection
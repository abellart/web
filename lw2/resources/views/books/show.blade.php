@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 mt-2 mb-2">
            <div class="pull-left">
                <h2>Book {{ $book->title }}</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Id:</strong>
                <p>{{ $book->id }}</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Title:</strong>
                <p>{{ $book->title }}</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Author:</strong>
                <p>{{ $book->author }}</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Pages:</strong>
                <p>{{ $book->pages }}</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Description:</strong>
                <p>{{ $book->description }}</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Price:</strong>
                <p>{{ $book->price }}</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Created:</strong>
                <p>{{ $book->created_at }}</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Updated:</strong>
                <p>{{ $book->updated_at }}</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <a class="btn btn-success" href="{{ route('books.index') }}">Back</a>
            </div>
        </div>
    </div>

@endsection
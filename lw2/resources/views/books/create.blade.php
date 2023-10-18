@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 mt-2 mb-2">
            <div class="pull-left">
                <h2>Add new book</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.index') }}">Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <strong>Author:</strong>
                    <input type="text" name="author" class="form-control" placeholder="Author">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <strong>Pages:</strong>
                    <input type="number" name="pages" class="form-control" placeholder="Pages">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea name="description" class="form-control" placeholder="Description" style="height: 150px"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="text" name="price" class="form-control" placeholder="Price">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection
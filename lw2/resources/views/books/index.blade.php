@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 mt-2 mb-2">
            <div class="pull-left">
                <h2>Books</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.create') }}">Create new book</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered mt-2">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Pages</th>
            <th>Description</th>
            <th>Price</th>
            <th></th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->pages }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->price }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('books.show', $book->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('books.edit', $book->id) }}">Edit</a>
                    <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                        @csrf
                        @method('POST')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
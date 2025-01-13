@extends('layouts.app')

@section('content')
    <div class="mt-5 row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Book Management
                        <a href="{{ route('books.create') }}" class="btn btn-primary float-end">Add New Book</a>
                    </h4>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Year</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->year }}</td>
                            <td>
                                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

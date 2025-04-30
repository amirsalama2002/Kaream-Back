@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Date List</h1>
        <a href="{{ route('date.create') }}" class="btn btn-primary">Add New Date</a>
    </div>

    @foreach ($books as $book)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $book->author }}</h6>
                @if($book->cover_image)
                    <img src="{{ asset('storage/' . $book->cover_image) }}" width="100" class="mb-2">
                @endif
                <div class="mb-2">
                    @if($book->pdf_file)
                        <a href="{{ asset('storage/' . $book->pdf_file) }}" class="btn btn-sm btn-secondary" target="_blank">View PDF</a>
                    @endif
                </div>
                <a href="{{ route('date.show', $book->id) }}" class="btn btn-sm btn-info">Show</a>
                <a href="{{ route('date.edit', $book->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('date.destroy', $book->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection

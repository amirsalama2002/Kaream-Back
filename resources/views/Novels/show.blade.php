@extends('layouts.app')

@section('content')
    <h1 class="mb-3">{{ $novel->title }}</h1>

    <p><strong>Author:</strong> {{ $novel->author }}</p>

    @if($novel->cover_image)
        <div class="mb-3">
            <img src="{{ asset('storage/' . $novel->cover_image) }}" width="200" class="img-thumbnail">
        </div>
    @endif

    @if($novel->pdf_file)
        <div class="mb-3">
            <a href="{{ asset('storage/' . $novel->pdf_file) }}" class="btn btn-outline-primary" target="_blank">View PDF</a>
        </div>
    @endif

    <a href="{{ route('novels.edit', $novel->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('novels.index') }}" class="btn btn-secondary">Back to List</a>
@endsection

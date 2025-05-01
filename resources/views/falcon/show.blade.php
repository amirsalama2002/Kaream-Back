@extends('layouts.app')

@section('content')
    <h1 class="mb-3">{{ $falcon->title }}</h1>

    <p><strong>Author:</strong> {{ $falcon->author }}</p>

    @if($falcon->cover_image)
        <div class="mb-3">
            <img src="{{ asset('storage/' . $falcon->cover_image) }}" width="200" class="img-thumbnail">
        </div>
    @endif

    @if($falcon->pdf_file)
        <div class="mb-3">
            <a href="{{ asset('storage/' . $falcon->pdf_file) }}" class="btn btn-outline-primary" target="_blank">View PDF</a>
        </div>
    @endif

    <a href="{{ route('falcon.edit', $falcon->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('falcon.index') }}" class="btn btn-secondary">Back to List</a>
@endsection

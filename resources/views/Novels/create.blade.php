@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Add New Date</h1>

    <form action="{{ route('novels.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Date Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author Name</label>
            <input type="text" name="author" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="cover_image" class="form-label">Cover Image</label>
            <input type="file" name="cover_image" class="form-control" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="pdf_file" class="form-label">PDF File</label>
            <input type="file" name="pdf_file" class="form-control" accept="application/pdf">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('novels.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

<div class="container">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-warning text-dark d-flex justify-content-between align-items-center">
            <h3 class="mb-0">✏️ Edit Book</h3>
            <a href="{{ route('books.index') }}" class="btn btn-light btn-sm">← Back to List</a>
        </div>

        <div class="card-body">
            <form action="{{ route('books.update', $book->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label fw-semibold">Title</label>
                    <input type="text" name="title" id="title" class="form-control" 
                           value="{{ old('title', $book->title) }}" required>
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label fw-semibold">Author</label>
                    <input type="text" name="author" id="author" class="form-control" 
                           value="{{ old('author', $book->author) }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label fw-semibold">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $book->description) }}</textarea>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success px-4">💾 Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

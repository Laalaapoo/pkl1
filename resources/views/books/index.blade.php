<!DOCTYPE html>
<html>
<head>
    <title> Books </title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
<div class="container min-vh-100 center-box">
    <h1> Books list </h1>
    <table class="table table-bordered table-striped ">
        <tr>
            <th> Title </th>
            <th> Author </th>
            <th> Description </th>
            <th> Actions </th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td> {{ $book->title }} </td>
            <td> {{ $book->author }} </td>
            <td> {{ $book->description }} </td>
            <td class="d-flex gap-2">
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
        </tr>
        @endforeach
    </table>



    <button class="btn btn-primary mt-3 ms-3 justify-content-center">
        <a href="{{ route('books.create') }}" style="color: white; text-decoration: none;"> Add New Book </a>
    </div>
</div>
</body>

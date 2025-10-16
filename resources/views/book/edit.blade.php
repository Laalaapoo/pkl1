<!DOCTYPE html>
<html>
<head>
    <title> Edit Book </title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container vh-100 center-box">
    <h1 > Edit Book </h1>
<form action="{{ route('books.update', $book->id) }}" method="POST"> 
    @csrf
    @method('PUT')
<table class="table table-bordered table-stripped">
    <tr>
        <th> Title </th>
        <th> Author </th>
        <th> Description </th>
    </tr>
    <tr>
        <td> <input class="form-control" type="text" name="title" value="{{ $book->title }}"> </td>
        <td> <input class="form-control"  type="text" name="author" value="{{ $book->author }}"> </td>      
        <td> <textarea class="form-control" style="height : 40px"name="description">{{ $book->description }}</textarea> </td>
</table>
<div class="d-flex justify-content-center gap-2">
<a class="btn btn-primary mt-3 ms-3" href="{{ route('books.index') }}" style="color: white; text-decoration: none;"> Back </a>   
<button type ="submit" class="btn btn-primary mt-3 ms-3">Save</button>

</form>
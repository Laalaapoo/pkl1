<!DOCTYPE html>
<html>
<head>
    <title> Create Book </title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container vh-100 center-box">
<h1>Add New Book</h1> 

<form action="{{ route('books.store') }}" method="POST"> 
    @csrf
<table class="table table-bordered table-stripped">
    <tr>
        <th> Title </th>
        <th> Author </th>
        <th> Description </th>
    </tr>
    <tr>
        <td> <input class="form-control" type="text" name="title"> </td>
        <td> <input class="form-control"  type="text" name="author"> </td>
        <td> <textarea class="form-control" style="height : 40px"name="description"></textarea> </td>
</table>
<div class="d-flex justify-content-center gap-2">
<a class="btn btn-primary mt-3 ms-3" href="{{ route('books.index') }}" style="color: white; text-decoration: none;"> Back </a>   
<button type ="submit" class="btn btn-primary mt-3 ms-3 ">Save</button>
</form>
</body>

@extends('layouts.backend.admin')
@section('title')
    Platform Add
@endsection
@section('content')
<h2>Platform Add</h2>
<form action="{{route("admin_platform_store")}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" id="" placeholder="Name">
    <select name="category_id" id="">
        <option value="0" selected hidden>Choose a Category</option>
        @foreach ($platformCategory as $category)
        <option value="{{$category->id}}">{{$category->title}}</option>
        @endforeach
    </select>
    <input type="text" name="URL" id="" placeholder="URL">
    <input type="text" name="description" id="" placeholder="Description">
    <input type="text" name="keywords" id="" placeholder="Keywords">
    <input type="file" name="image" id="">
    <input type="submit" value="Save">
</form>
@endsection
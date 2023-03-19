@extends('layouts.backend.admin')
@section('title')
    Category Add
@endsection
@section('content')
<h2>Category Add</h2>
<form style="display:flex;flex-direction:column" action="{{route("admin_category_store")}}" method="post" enctype="multipart/form-data">
    @csrf
    <select name="parent_id" id="">
        @foreach ($categories as $category)
            <option value="{{$category->id}}">Parent ID:{{$category->parent_id}} | ID:{{$category->id}} {{$category->title}}</option>
        @endforeach
    </select>
    <input type="text" name="title" id="" placeholder="Title">
    <input type="text" name="description" id="" placeholder="Description">
    <input type="submit" value="Save">
</form>
@endsection
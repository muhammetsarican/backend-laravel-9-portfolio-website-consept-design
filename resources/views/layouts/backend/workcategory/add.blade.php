@extends('layouts.backend.admin')
@section('title')
    Work Category Add
@endsection
@section('content')
<h2>Work Category Add</h2>
<form style="display:flex;flex-direction:column" action="{{route("admin_workcategory_store")}}" method="post" enctype="multipart/form-data">
    @csrf
    <select name="work_id">
        <option value="0" selected hidden>Choose a Work...</option>
        @foreach ($works as $work)
            <option value="{{$work->id}}">{{$work->title}}</option>
        @endforeach
    </select>
    <select name="category_id">
        <option value="0" selected hidden>Choose a Category...</option>
        @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->title}}</option>
        @endforeach
    </select>
    <input type="submit" value="Add">
</form>
@endsection
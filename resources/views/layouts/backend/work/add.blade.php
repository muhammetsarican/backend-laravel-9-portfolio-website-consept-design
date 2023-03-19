@extends('layouts.backend.admin')
@section('title')
    Work Add
@endsection
@section('content')
<h2>Work Add</h2>
<form style="display:flex;flex-direction:column" action="{{route("work_store")}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" id="" placeholder="Title">
    <select name="platform_id">
        <option value="0" selected hidden>Choose a Platform...</option>
        @foreach ($platforms as $platform)
            <option value="{{$platform->id}}">{{$platform->name}}</option>
        @endforeach
    </select>
    <input type="text" name="description" id="" placeholder="Description">
    <input type="text" name="keywords" id="" placeholder="Keywords">
    <input type="file" name="image" id="">
    <input type="date" name="construction_date" id="">
    <input type="submit" value="Save">
</form>
@endsection
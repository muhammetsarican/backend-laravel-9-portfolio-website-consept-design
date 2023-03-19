@extends('layouts.backend.admin')
@section('title')
    Certificate Add
@endsection
@section('content')
<h2>Certificate Add</h2>
<form style="display:flex;flex-direction:column" action="{{route("certificate_store")}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" id="" placeholder="Title">
    <input type="text" name="company_name" id="" placeholder="Company Name">
    <input type="text" name="description" id="" placeholder="Description">
    <input type="text" name="keywords" id="" placeholder="Keywords">
    <input type="file" name="image" id="">
    <input type="date" name="receipt_date" id="">
    <input type="submit" value="Save">
</form>
@endsection
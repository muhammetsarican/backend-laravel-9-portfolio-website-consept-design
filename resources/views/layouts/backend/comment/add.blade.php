@extends('layouts.backend.admin')
@section("title")
    Comment Add
@endsection
@section('content')
    <h2>Comment Add</h2>
    <form action="{{route("comment_store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="customer_name" id="" placeholder="Customer Name">
        <input type="file" name="customer_photo" id="">
        <input type="text" name="given_rate" id="" placeholder="Given Rate (Max value is 5)">
        <input type="date" name="comment_date" id="">
        <textarea name="comment" id="" cols="30" rows="10" placeholder="Enter your comment here..."></textarea>
        <input type="submit" value="Save">
    </form>
@endsection 
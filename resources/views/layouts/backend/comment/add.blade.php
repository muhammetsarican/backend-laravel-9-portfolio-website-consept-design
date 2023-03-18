<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Comment Add</h2>
    @include('layouts.message')
    <form style="display:flex;flex-direction:column" action="{{route("comment_store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="customer_name" id="" placeholder="Customer Name">
        <input type="file" name="customer_photo" id="">
        <input type="text" name="given_rate" id="" placeholder="Given Rate (Max value is 5)">
        <input type="date" name="comment_date" id="">
        <textarea name="comment" id="" cols="30" rows="10" placeholder="Enter your comment here..."></textarea>
        <input type="submit" value="Save">
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Work Add</h2>
    <form style="display:flex;flex-direction:column" action="{{route("work_store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" id="" placeholder="Title">
        {{-- <input type="text" name="company_name" id="" placeholder="Company Name"> --}}
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
    
</body>
</html>
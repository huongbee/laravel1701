<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(Session::has('error'))
        <div>{{Session::get('error')}}</div>
    @endif
    <form action="{{route('upload-multiple')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image[]" multiple>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
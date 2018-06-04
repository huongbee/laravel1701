<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input, textarea{
        width: 200px
    }
</style>
<body>
    @if($errors->any())
        <ul>
        @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
        </ul>
    @endif

    <form action="{{route('post-contact')}}" method="post">
        @csrf()
        <input type="text" name="fullname" placeholder="Enter Your name">
        @if($errors->has('fullname'))
            <ul>
            @foreach($errors->get('fullname') as $err)
                <li>{{ $err }}</li>
            @endforeach
            </ul>
        @endif
        <br>
        <input type="text" name="title" placeholder="Enter Title">
        @if($errors->has('title'))
            <ul>
            @foreach($errors->get('title') as $err)
                <li>{{ $err }}</li>
            @endforeach
            </ul>
        @endif
        <br>
        <input type="email" name="email" placeholder="Enter Email">
        <br>
        <input type="password" name="password" placeholder="Enter Pw">
        <br>
        <input type="password" name="re_password" placeholder="Re enter pw">
        <br>
        <textarea name="message" rows="10"></textarea>
        <br>
        <button type="submit">Send</button>
    </form>
</body>
</html>
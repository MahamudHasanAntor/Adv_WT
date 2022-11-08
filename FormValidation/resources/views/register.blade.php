<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register" method="POST">
        {{csrf_field()}}
        Name : <input type="text" name="name" value="{{old('name')}}">
        @if ($errors->has('name'))
        <span class="">
            <strong>{{$errors->first('name')}}</strong>
       </span>
       @endif<br>
       Age : <input type="number" name="age" value="{{old('age')}}">
        @if ($errors->has('age'))
        <span class="">
            <strong>{{$errors->first('age')}}</strong>
       </span>
       @endif<br>
       Email : <input type="email" name="email" value="{{old('email')}}">
        @if ($errors->has('email'))
        <span class="">
            <strong>{{$errors->first('email')}}</strong>
       </span>
       @endif<br>
       ID : <input type="number" name="id" value="{{old('id')}}">
        @if ($errors->has('id'))
        <span class="">
            <strong>{{$errors->first('id')}}</strong>
       </span>
       @endif<br>
       Password : <input type="password" name="password" value="{{old('password')}}">
        @if ($errors->has('password'))
        <span class="">
            <strong>{{$errors->first('password')}}</strong>
       </span>
       @endif<br>
       <input type="submit" name="submit">
    </form>
</body>
</html>

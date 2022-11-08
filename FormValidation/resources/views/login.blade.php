<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if('$password'=password && '$id'=id){
        return view('dashbord')
    }
    @endif
    <h1>Login Page</h1>
    <form action="login" method="POST">
        {{csrf_field()}}
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
       <input type="submit" name="Login">
    </form>
</body>
</html>
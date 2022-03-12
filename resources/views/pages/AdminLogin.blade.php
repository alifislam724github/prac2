@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body style="background-image: url('images/login11.jpg')">
<div class=" col-lg-6 ">
    <br>
<div style="background-image: url('images/registration.jpg')" >
<form action="{{route('AdminLogin')}}" class="form-group" method="post">
{{csrf_field()}}
<label class="text-uppercase fw-bold" for="">Email</label>
    <input type="text" class="form-control bg-light" name="email" value="{{old('email')}}">
    @error('email')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label class="text-uppercase fw-bold" for="">Password</label>
    <input type="password" class="form-control bg-light" name="password" value="{{old('password')}}">
    @error('password')
    <span>{{$message}}</span>
    @enderror
    <br>
    
    <button class="btn btn-primary" type="submit">Submit</button>
</form>


</body>
</html>
@endsection
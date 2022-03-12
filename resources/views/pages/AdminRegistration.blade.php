@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
</head>
<body style="background-image: url('images/registration1.jpg')">
<div class=" col-lg-6 ">
    
<div style="background-image: url('images/registration.jpg')" >

<form action="{{route('AdminRegistration')}}" class="form-group" method="post">
{{csrf_field()}}
    
    <br>
    <label class="text-uppercase fw-bold" for="">Admin Name</label>
    <input type="text" class="form-control bg-light" name="name" value="{{old('name')}}">
    @error('name')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label class="text-uppercase fw-bold" for="">Password</label>
    <input type="password" class="form-control bg-light " name="password" value="{{old('password')}}">
    @error('password')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label class="text-uppercase fw-bold" for="">Email</label>
    <input type="text" class="form-control bg-light" name="email" value="{{old('email')}}">
    @error('email')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label class="text-uppercase fw-bold" for="">Phone no</label>
    <input type="text" class="form-control bg-light" name="phoneno" value="{{old('phoneno')}}">
    @error('phoneno')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label class="text-uppercase fw-bold" for="">Address</label>
    <input type="text" class="form-control bg-light" name="address" value="{{old('address')}}">
    @error('address')
    <span>{{$message}}</span>
    @enderror
    <br>
   

    <button type="button" class= "btn btn-light">Submit</button>
</form>
</div>
</div>
</body>
</html>
@endsection



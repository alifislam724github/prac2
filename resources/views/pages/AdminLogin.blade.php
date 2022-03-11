@extends('layout.app')
@section('content')
<form action="{{route('AdminLogin')}}" class="form-group" method="post">
{{csrf_field()}}
<label for="">Email</label>
    <input type="text" class="form-control" name="email" value="{{old('email')}}">
    @error('email')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label for="">Password</label>
    <input type="password" class="form-control" name="password" value="{{old('password')}}">
    @error('password')
    <span>{{$message}}</span>
    @enderror
    <br>
    
    <input type="submit">
</form>

</body>
</html>
@endsection
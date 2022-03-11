@extends('layout.app')
@section('content')
<h2>Update Information</h2>
<form action="{{route('AdminUpdate')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <label for="">ID</label>
<input type="text" name="id" id="" value="{{$user->id}}" class="form-control" readonly>
@error('')
    <span class="text-danger">{{$message}}</span>
@enderror
<label for="">Name</label>
        <input type="text" name="id" id="" value="{{$user->name}}" class="form-control" >
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>
        <label for="">email</label>
        <input type="text" name="email" id="" value="{{ $user->email}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>
        <label for="">Password</label>
        <input type="text" name="password" id="" value="{{ $user->password}}" class="form-control">
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>
        <label for="">Phone No</label>
        <input type="text" name="phoneno" id="" value="{{ $user->phoneno}}" class="form-control">
        @error('phoneno')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>
        <label for="">Address</label>
        <input type="text" name="address" id="" value="{{ $user->address}}" class="form-control">
        @error('address')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>
        

        <input type="submit">                

</form>

@endsection
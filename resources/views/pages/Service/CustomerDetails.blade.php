<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
</head>
<body>
@extends('layout.app')

@section('content')

<h1>Customer List</h1>


    <table class="table table-border">
       
    <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Password</th>
            
        </tr>

        
        <tr>
        @foreach($users as $user)

            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>             
            <td>{{$user->phone}}</td>             
            <td>{{$user->address}}</td>
            <td>{{$user->password}}</td>
            <td>  <a class="btn btn-danger px-3"  href="/CustomerDetailsDelete/{{$user->id}}">Delete Information</a></td>
            </tr>
            @endforeach
       
 </table>

@endsection
</body>
</html>
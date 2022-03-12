<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Provider Details</title>
</head>
<body>
@extends('layout.app')

@section('content')

<h1>Service Provider List</h1>


    <table class="table table-border">
       
    <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Service Type</th>
            <th>Address</th>
            
        </tr>

        
        <tr>
        @foreach($users as $user)

            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>            
            <td>{{$user->password}}</td> 
            <td>{{$user->phoneno}}</td>            
            <td>{{$user->servicetype}}</td> 
            <td>{{$user->address}}</td>
            </tr>
            @endforeach
       
 </table>

@endsection
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
</head>
<body>
@extends('layout.app')

@section('content')

<h1>Employee List</h1>


    <table class="table table-border">
       
    <tr>
            <th>ID</th>
            <th>Name</th>
            <th>NID</th>
            <th>Phone</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Status</th>
            
        </tr>

        
        <tr>
        @foreach($users as $user)

            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->nid}}</td>            
            <td>{{$user->phone}}</td> 
            <td>{{$user->username}}</td>            
            <td>{{$user->password}}</td> 
            <td>{{$user->status}}</td>
            <td>  <a class="btn btn-danger px-3"  href="/EmployeeDetailsDelete/{{$user->id}}">Delete Information</a></td>
            </tr>
            @endforeach
       
 </table>

@endsection
</body>
</html>
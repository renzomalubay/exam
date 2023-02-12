@extends('layout')
@section('content')
    <style>
        body{
            background: gray;
        }
        .container{
            width: 350px;
            border-radius: 10px;
        }
        button{
            width: 100%;
        }
        .container i{
            font-size: 40px;
            padding: 15px;
            border-radius: 50%;
            background: #536878;
            position: absolute;
            top: 10px;
            margin-left: 100px;
        }
        .btn{
            background: #536878;
            color: white;
        }
    </style>
    <div class="container mt-5 bg-white p-5">
        <i class="fa-solid fa-user"></i>
        <div class="header text-center mb-3">
            <h2>Member Login</h2>
        </div>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
            </div>
            <button type="submit" class="btn mb-3">Login</button>
        </form>
        
    </div>
@endsection
    
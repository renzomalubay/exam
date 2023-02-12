@extends('layout')
@section('content')
    <style>
        body{
            background: gray;
        }
        .header{
            background: #536878;
            color: white;
            border-radius: 10px 10px 0 0;
        }
        table button{
            background: none;
            border: none;
        }
    </style>
    <div class="container mt-5">
        <div class="header p-3 d-flex justify-content-between">
            <h3>Manage <strong>Employee</strong></h3>
            <div>
                <button class="btn btn-danger"><i class="fa-solid fa-square-minus"></i> Delete</button>
                <button class="btn btn-success"><i class="fa-solid fa-square-plus"></i> Add New Employee</button>
            </div>
        </div>
        <div class="container bg-white">
        <table class="table">
                <thead>
                    <tr>
                    <th scope="col"><input type="checkbox"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employees)

                    <tr>
                    <th scope="col"><input type="checkbox"></th>
                    <td scope="col">{{ $employees->name }}</td>
                    <td scope="col">{{ $employees->email }}</td>
                    <td scope="col">{{ $employees->address }}</td>
                    <td scope="col">{{ $employees->phone }}</td>
                    <td scope="col">
                        <button><i class="fa-solid fa-pencil" style="color: orange;"></i></button>
                        <button><i class="fa-solid fa-trash" style="color: red;"></i></button> 
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
    
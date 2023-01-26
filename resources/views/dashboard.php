<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
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
                    <tr>
                    <th scope="col"><input type="checkbox"></th>
                    <td scope="col">Renzo V. Malubay</td>
                    <td scope="col">renzomalubay0@gmail.com</td>
                    <td scope="col">Cabanatuan City</td>
                    <td scope="col">111 1111-111</td>
                    <td scope="col">
                        <button><i class="fa-solid fa-pencil" style="color: orange;"></i></button>
                        <button><i class="fa-solid fa-trash" style="color: red;"></i></button> 
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
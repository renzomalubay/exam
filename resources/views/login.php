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
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>
        <button class="btn mb-3">Login</button>
    </div>
</body>
</html>
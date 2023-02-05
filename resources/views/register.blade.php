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
            width: 500px;
            border-radius: 10px;
        }
        button{
            width: 100%;
        }
        .btn{
            background: #536878;
            color: white;
        }
        label{
            margin-left: 5px;
        }
    </style>
    <div class="container mt-5 bg-white p-5">
        <form action="/store" method="POST">
            @csrf
            <div class="header text-center mb-3">
                <h2>Register</h2>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="fname" class="form-control" placeholder="First Name" aria-label="First Name" aria-describedby="basic-addon1">
                <input type="text" name="lname" class="form-control" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon1">
            </div>
            <div class="d-flex mb-3">
                <input type="checkbox">
                <label>I accept the <a>Terms of Use</a> & <a>Privacy Policy</a></label>
            </div>
            <button class="btn mb-3" type="submit">Register</button>
        </form>
    </div>
</body>
</html>
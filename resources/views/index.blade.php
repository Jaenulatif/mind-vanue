<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
</head>
<body style="background-color: #AAAAAA;">
    <div class="container bg-primary">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-6 bg-warning">
                <img src="/img/login.png" alt="image-login" class="img-fluid">
                <div class="mb-4 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password">
                    </div>
                </div>
                <div class="row justify-content-end bg-info mt-2">
                    <div class="col-2 bg-danger">
                        <button type="button" class="btn btn-danger" style="background-color: #E1701A;">Masuk</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
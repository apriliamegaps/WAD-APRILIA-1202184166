<?php
session_start();

?>

<!doctype html>
<html>

<head>
    <title>Login WAD Beauty</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/miligram/miligram/master/dist/miligram.min.css">
</head>


<body style="background-color : #e6f3ff;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#" style="color:black;margin-left:20px;">WAD Beauty</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active" style="margin-right:30px;">
                <a class="nav-link" href="#" style="color:black;">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active" style="margin-right:30px;">
                <a class="nav-link" href="#" style="color:black;">Register <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>
    <section class="container mt-3">
        <div class="row justify-content-center">
            <div class="row justify-content-center mt-3 ">
                <div class="col-sm ">
                    <div class="card p-5" style="width: 30rem;">
                        <h3 class="text-center mb-3">
                            Login
                        </h3>
                        <ul class="list-group list-group-flush">
                            <form action="controller/proses_login.php" method="post">
                                <div class="form-group mt-3">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Kata Sandi</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary justify-content-center mb-2" name="submit">Login</button>
                                    <p>Belum punya akun? <a href='register.php' style="color: #696969;">Registrasi</a>
                                </div>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</html>
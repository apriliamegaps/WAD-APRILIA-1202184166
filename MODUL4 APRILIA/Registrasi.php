<?php
session_start();

?>

<html>

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<?php
if (!empty($_GET['status'])) {
    if ($_GET['status'] == "success") {
?>
        <div class="alert alert-warning" role="alert">Berhasil Register</div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger" role="alert">Gagal Register</div>
<?php
    }
}

?>

<body>
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

    <body style="background-color : #e6f3ff;">
        <div class="row justify-content-center">
            <div class="row justify-content-center mt-3 ">
                <div class="col-sm ">
                    <div class="card p-5" style="width: 30rem;">
                        <h3 class="text-center mb-3">Registrasi</h3>
                        <ul class="list-group list-group-flush">
                            <form action="controller/proses_register.php" method="post">
                                <div class="form-group mt-3">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group mt-3">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group mt-3">
                                    <label>No. Handphone</label>
                                    <input type="text" class="form-control" name="nohp">
                                </div>
                                <div class="form-group mt-3">
                                    <label>Kata Sandi</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group mt-3">
                                    <label>Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control" name="cekpass">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary justify-content-center mb-2" name="submit">Daftar</button>
                                    <p>Sudah punya akun? <a href='login.php' style="color: #696969;">Login</a>
                                </div>

                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</body>

</html>
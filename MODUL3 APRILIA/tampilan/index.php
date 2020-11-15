<?php
include "../connection.php";

$data = mysqli_query($koneksi, 'SELECT * FROM event');

$row = mysqli_fetch_array($data, MYSQLI_ASSOC);

?>

<?php if ($row == null) : ?>

    <html lang="en">

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>(Home) EAD Events</title>
        <style>
            .buat-event {
                border-color: white;
                color: white;
            }

            .buat-event:hover {
                background-color: white;
                color: #007bff;
            }

            .buat-event:focus {
                outline: none !important;
                box-shadow: none !important;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand" href="#" style="color:white;margin-left:20px;">EAD Events</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active" style="margin-right:30px;">
                    <a class="nav-link" href="#" style="color:white;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item" style="margin-right:20px;">
                    <button type="button" class="btn btn-outline-primary buat-event"><a href="add.php" style="color: white">Buat Event</a></button>
                </li>
            </ul>
        </nav>
        <h4 class="text-primary" style="text-align:center;margin-top:20px;">WELCOME TO EAD EVENTS !</h4>
        <div class="container" style="margin-top:30px;">
            <p>No Events Found.</p>
        </div>
    </body>

    </html>

<?php else : ?>

    <html lang="en">

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>(Home) EAD Events</title>
        <style>
            .buat-event {
                border-color: white;
                color: white;
            }

            .buat-event:hover {
                background-color: white;
                color: #007bff;
            }

            .buat-event:focus {
                outline: none !important;
                box-shadow: none !important;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand" href="#" style="color:white;margin-left:20px;">EAD Events</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active" style="margin-right:30px;">
                    <a class="nav-link" href="#" style="color:white;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item" style="margin-right:20px;">
                    <button type="button" class="btn btn-outline-primary buat-event"><a href="add.php" style="color: white">Buat Event</a></button>
                </li>
            </ul>
        </nav>
        <h4 class="text-primary" style="text-align:center;margin-top:20px;">WELCOME TO EAD EVENTS !</h4>
        <div class="container" style="margin-top:30px;">
            <div class="row" style="justify-content:center">
                <?php
                $i = 1;
                foreach ($data as $key) {
                ?>
                    <div class="col-sm-3">
                        <div class="card" style="box-shadow: 0 5px 15px rgba(154,160,185,0.6), 0 5px 15px rgba(166,173,201,0.5); margin-bottom:50px;">
                            <img src="../gambar/<?php echo $key['gambar']; ?>" height="200" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $key['name']; ?></h5>
                                <div class="row" style="margin-left:0px;margin-top:15px;">
                                    <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="orange" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                        <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg>
                                    <p class="card-text" style="margin-left:10px;font-size:15px;"><?php echo $key['tanggal']; ?></p>
                                </div>
                                <div class="row" style="margin-left:0px;margin-top:20px;">
                                    <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="orange" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                        <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                    <p class="card-text" style="margin-left:10px;font-size:15px;"><?php echo $key['tempat']; ?></p>
                                </div>
                                <p class="card-text" style="margin-top:15px;font-size:15px;">Kategori : <?php echo $key['kategori']; ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="detail.php?id=<?php echo $key['id'] ?>" class=" btn btn-primary" style="float:right;padding-left:25px;padding-right:25px;padding-bottom:5px;padding-top:5px; font-size:14px;">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php
                    $i++;
                }
                ?>
            </div>
    </body>

    </html>

<?php endif; ?>
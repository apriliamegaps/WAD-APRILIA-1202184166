<?php
include "../connection.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM event where id=$id");

while ($data = mysqli_fetch_array($query)) {
    $id = $data['id'];
    $name = $data['name'];
    $deskripsi = $data['deskripsi'];
    $kategori = $data['kategori'];
    $tanggal = $data['tanggal'];
    $mulai = $data['mulai'];
    $berakhir = $data['berakhir'];
    $tempat = $data['tempat'];
    $harga = $data['harga'];
    $benefit = $data['benefit'];
    $gambar = $data['gambar'];
}

?>

<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

        body .modal-dialog {
            /* Width */
            max-width: 100%;
            width: auto !important;
            display: inline-block;
        }

        .modal {
            z-index: -1;
            display: flex !important;
            justify-content: center;
            align-items: center;
        }

        .modal-open .modal {
            z-index: 1050;
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
    <h4 class="text-primary" style="text-align:center;margin-top:20px;">Detail Event !</h4>
    <div class="container" style="margin-top:30px;">
        <div style="justify-content:center;display:flex">
            <div class="col-sm-7">
                <div class="card" style="box-shadow: 0 5px 15px rgba(154,160,185,0.6), 0 5px 15px rgba(166,173,201,0.5); margin-bottom:50px;">
                    <img src="../gambar/<?php echo $gambar ?>" class="card-img-top" style="height:300px;">
                    <div class="card-body">
                        <div class="content">
                            <h5 class="card-title"><?php echo $name; ?></h5>
                            <p style="font-size:12px;font-weight: bold; margin-top:12px;">Deskripsi</p>
                            <p style="font-size:12px; margin-top:-10px;"><?php echo $deskripsi; ?></p>
                            <p style="font-size:12px;font-weight:bold;display:inline">Informasi Event</p>
                            <p style="font-size:12px;font-weight:bold;float:right;margin-right:150px;">Benefit</p>
                            <ul style="float:right;margin-top:30px;margin-right:-140px;">
                                <li>
                                    <p class="card-text" style="font-size:15px;"><?php echo $benefit; ?></p>
                                </li>
                            </ul>
                            <!-- <p style="float:right">Sertifikat, Souvenir</p> -->
                            <div class="row" style="margin-left:0px;margin-top:15px;">
                                <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="orange" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                    <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                                <p class="card-text" style="margin-left:10px;font-size:15px;"><?php echo $tanggal; ?></p>
                            </div>
                            <div class="row" style="margin-left:0px;margin-top:20px;">
                                <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="orange" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                                <p class="card-text" style="margin-left:10px;font-size:15px;"><?php echo $tempat; ?></p>
                            </div>
                            <div class="row" style="margin-left:0px;margin-top:20px;">
                                <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-clock" fill="orange" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                    <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                </svg>
                                <p class="card-text" style="margin-left:10px;font-size:15px;"><?php echo $mulai; ?> - <?php echo $berakhir; ?></p>
                            </div>
                            <div class="row" style="margin-left:0px;">
                                <p class="card-text" style="margin-top:12px;font-size:15px;font-weight:bold;">Kategori</p>
                                <p class="card-text" style="margin-top:12px;font-size:15px;font-weight:bold;margin-left:5px;">:</p>
                                <p class="card-text" style="margin-top:12px;font-size:15px;margin-left:10px;"><?php echo $kategori; ?></p>
                            </div>
                            <div class="row" style="margin-left:0px;margin-top:-20px;">
                                <p class="card-text" style="margin-top:12px;font-size:15px;font-weight:bold;">HTM</p>
                                <p class="card-text" style="margin-top:12px;font-size:15px;font-weight:bold;margin-left:5px;">:</p>
                                <p class="card-text" style="margin-top:12px;font-size:15px;margin-left:10px;">Rp. <?php echo $harga; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="justify-content:center;display:flex;">
                        <div class="row">
                            <!-- <button type="button" class="btn btn-primary" style="margin-right:10px;padding:5px 30px 5px 30px;font-size:14px;">Edit</button> -->
                            <a href="#" type="button" class="btn btn-primary" data-toggle="modal" style="margin-right:10px;padding:5px 30px 5px 30px;font-size:14px;" data-target="#myModal<?php echo $id; ?>">Edit</a>
                            <button type="button" class="btn btn-danger" style="margin-right:10px;padding:5px 30px 5px 30px;font-size:14px; color: white"><a style="color: white;" href="../CRUD/delete.php?id=<?php echo $id; ?>" onclick="return confirm('Yakin hapus <?php echo $name; ?>')">Delete</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Edit Mahasiswa-->
        <div class="modal fade" id="myModal<?php echo $id; ?>" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Content Event</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="../CRUD/update.php" method="POST" enctype="multipart/form-data">
                            <?php
                            include "../conn.php";

                            $id = $_GET['id'];

                            $query = mysqli_query($koneksi, "SELECT * FROM event where id=$id");

                            while ($data = mysqli_fetch_array($query)) {
                                $id = $data['id'];
                                $name = $data['name'];
                                $deskripsi = $data['deskripsi'];
                                $kategori = $data['kategori'];
                                $tanggal = $data['tanggal'];
                                $mulai = $data['mulai'];
                                $berakhir = $data['berakhir'];
                                $tempat = $data['tempat'];
                                $harga = $data['harga'];
                                $benefit = $data['benefit'];
                                $gambar = $data['gambar'];
                            }

                            ?>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card" style="height:546px;">
                                            <div class="card-header bg-danger"></div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="inputName">Name</label>
                                                    <input class="form-control" id="inputName" type="text" name="name" value="<?php echo $name; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputDeskripsi">Deskripsi</label>
                                                    <textarea class="form-control" name="deskripsi" id="inputDeskripsi" cols="30" rows="4" placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Upload Gambar</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" name="gambar">
                                                        <label style="font-weight:normal" class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <label style="font-weight:bold">Kategori</label>
                                                <div class="row" style="margin-left:0px">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="kategori" id="onlineKategori" value="online" checked>
                                                        <label class="form-check-label" for="onlineKategori">Online</label>
                                                    </div>
                                                    <div class="form-check" style="margin-left:100px;">
                                                        <input class="form-check-input" type="radio" name="kategori" id="offlineKategori" value="offline">
                                                        <label class="form-check-label" for="offlineKategori">Offline</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-header bg-primary"></div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="inputTanggal">Tanggal</label>
                                                    <input type="date" name="tanggal" value="<?php echo $tanggal; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <div class="row" style="margin-left:0px;">
                                                        <label for="inputJamMulai">Jam Mulai</label>
                                                        <label for="inputJamBerakhir" style="margin-left:217px;">Jam Berakhir</label>
                                                    </div>
                                                    <div class="row" style="margin-left:0px;">
                                                        <input type="time" name="mulai" value="<?php echo $mulai; ?>" class="form-control" id="inputJamMulai" required style="width:273px">
                                                        <input type="time" name="berakhir" value="<?php echo $berakhir; ?>" class="form-control" id="inputJamBerakhir" required style="width:273px;margin-left:20px;">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputTempat">Tempat</label>
                                                    <input type="text" name="tempat" value="<?php echo $tempat; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputHarga">Harga</label>
                                                    <input type="number" placeholder="Harga" name="harga" value="<?php echo $harga; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Benefit</label>
                                                    <div class="row" style="margin-left:0px;">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="benefit" value="Snacks" class="custom-control-input" id="snacksCheckBox">
                                                            <label class="custom-control-label" for="snacksCheckBox" style="font-weight:normal;">Snacks</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox" style="margin-left:30px;">
                                                            <input type="checkbox" name="benefit" value="Sertifikat" class="custom-control-input" id="sertifikatCheckBox">
                                                            <label class="custom-control-label" for="sertifikatCheckBox" style="font-weight:normal;">Sertifikat</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox" style="margin-left:30px;">
                                                            <input type="checkbox" name="benefit" value="Souvenir" class="custom-control-input" id="souvenirCheckBox">
                                                            <label class="custom-control-label" for="souvenirCheckBox" style="font-weight:normal;">Souvenir</label>
                                                        </div>
                                                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="card-footer" style="background:white;border-top-color:white !important;">
                                            <div class="row" style="justify-content: flex-end;display:flex;margin-right:5px;">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button class="btn btn-danger" style="margin-left:10px;" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                        <!-- <div class="row" style="justify-content:center">
            <div class="col-sm-3">
              <div class="card">
                <img src="logo-open-mind.png" class="card-img-top" >
                <div class="card-body">
                    <h5 class="card-title">Open Mind ESD Laboratory</h5>
                    <div class="row" style="margin-left:0px;margin-top:15px;">
                        <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="orange" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                            <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                        <p class="card-text" style="margin-left:10px;font-size:15px;">2020 - 11 - 13</p>
                    </div>
                    <div class="row" style="margin-left:0px;margin-top:20px;">
                        <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="orange" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        <p class="card-text" style="margin-left:10px;font-size:15px;">Zoom Meeting</p>
                    </div>
                    <p class="card-text" style="margin-top:15px;font-size:15px;">Kategori : Event Online</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary" style="float:right;padding-left:25px;padding-right:25px;padding-bottom:5px;padding-top:5px; font-size:14px;">Detail</a>
                  </div>
              </div>
            </div>
      </div> -->
                        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
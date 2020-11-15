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

        .form-group label {
            font-weight: bold;
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
                <button type="button" class="btn btn-outline-primary buat-event">Buat Event</button>
            </li>
        </ul>
    </nav>
    <div class="content" style="margin-top:20px;margin-left:60px;margin-right:60px;">
        <h4 class="text-primary">Buat Event</h4>
        <form method="POST" action="./CRUD/save.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card" style="height:546px;">
                        <div class="card-header bg-danger"></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input class="form-control" id="inputName" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="inputDeskripsi">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="inputDeskripsi" cols="30" rows="4" placeholder="Deskripsi"></textarea>
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
                                <input type="date" name="tanggal" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="row" style="margin-left:0px;">
                                    <label for="inputJamMulai">Jam Mulai</label>
                                    <label for="inputJamBerakhir" style="margin-left:217px;">Jam Berakhir</label>
                                </div>
                                <div class="row" style="margin-left:0px;">
                                    <input type="time" name="mulai" class="form-control" id="inputJamMulai" required style="width:273px">
                                    <input type="time" name="berakhir" class="form-control" id="inputJamBerakhir" required style="width:273px;margin-left:20px;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTempat">Tempat</label>
                                <input type="text" name="tempat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputHarga">Harga</label>
                                <input type="number" placeholder="Harga" name="harga" class="form-control">
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
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" style="background:white;border-top-color:white !important;">
                            <div class="row" style="justify-content: flex-end;display:flex;margin-right:5px;">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                 <button class="btn btn-danger" style="margin-left:10px;">Cancel</button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html> 
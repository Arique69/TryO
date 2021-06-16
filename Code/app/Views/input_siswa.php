<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="styleshet" href="gaya.css">
    <title>Input Data Siswa</title>
    <style>
        body {
            background-image: url(https://sorongselatan.bawaslu.go.id/wp-content/uploads/2020/08/Background-opera-speeddials-community-web-simple-backgrounds.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <h1> Input Data Siswa </h1>
        </div>
        <div class="container">
            <div>
                <form>
                    <div class="form-row">
                        <div class="col">
                            <label for="namaDepan"> Nama Depan</label>
                            <input type="namaDepan" class="form-control" placeholder="Nama Depan">
                        </div>
                        <div class="col">
                            <label for="namaBelakang"> Nama Belakang</label>
                            <input type="namaBelakang" class="form-control" placeholder="Nama Belakang">
                        </div>
                    </div> <br>
                    <div class="form-row">
                        <div class="col-md-11">
                            <label for="validationCustom03">Tempat & Tanggal Lahir </label>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" id="validationCustom03" placeholder="Tempat Lahir" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <input type="text" class="form-control" id="validationCustom04" placeholder="Tanggal lahir" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <input type="text" class="form-control" id="validationCustom05" placeholder="Bulan lahir" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <input type="text" class="form-control" id="validationCustom05" placeholder="Tahun lahir" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="usernameInput">Email</label>
                        <input type="username" class="form-control" id="usernameInput" placeholder="Tulis email anda" required>
                    </div>
                    <label for="validationCustomUsername">Username</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="passInput">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password" required>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col md-6">
                    <button class="btn btn-primary btn-block mt-2" type="submit">Simpan</button>
                </div>
                <div class="col md-6">
                    <button class="btn btn-warning btn-block mt-2" type="submit">Kembali</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
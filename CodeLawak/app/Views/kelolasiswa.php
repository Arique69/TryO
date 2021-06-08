<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        body {
            background-image: url(https://sorongselatan.bawaslu.go.id/wp-content/uploads/2020/08/Background-opera-speeddials-community-web-simple-backgrounds.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
</head>

<body>
    <div class="container" style="margin-top:60px" id="form">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-info">
                            <b>isi data</b> - pastikan semua data terisi
                        </div>
                        <!-- validation -->
                        <form action="<?php echo base_url('control_siswa/insert_siswa'); ?>" method="post">
                            <!-- supaya input page hanya bisa di page ini saja -->
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <!-- <input type="number" class="form-control" id="id" value="" hidden> -->
                                <label for="nama">Masukan nama siswa</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" placeholder="Nama siswa" id="nama" name="nama">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nip">Masukan NISN</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nisn')) ? 'is-invalid' : '' ?>" placeholder="NISN" id="nisn" name="nisn">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nisn') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kelas">Pilih Kelas : </label>
                                <select name="kelas" id="kelas" class="form-control">
                                    <option value="6A" selected>6A</option>
                                    <option value="6B">6B</option>
                                    <option value="6C">6C</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Pilih Jenis Kelamin  : </label>
                                <select name="jenis_kelamin" id="jenis Kelamin" class="form-control">
                                    <option value="perempuan" selected>Perempuan</option>
                                    <option value="laki-laki">Laki - laki</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="TTL" class="col-2 col-form-label">Tanggal Lahir</label>
                                <input class="form-control <?= ($validation->hasError('TTL')) ? 'is-invalid' : '' ?>" type="date"  id="TTL" name="TTL">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('TTL') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Masukan Email</label>
                                <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" placeholder="email" id="email" name="email">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username">Masukan Username</label>
                                <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" placeholder="Username" id="username" name="username">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Masukan Password</label>
                                <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" placeholder="password" id="password" name="password">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password') ?>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-xl btn-secondary mt-3">Simpan dan tambahkan</button>
                            <a type="button" class="btn btn-xl btn-warning mt-3" href="<?php echo base_url('control_siswa'); ?>">Kembali ke menu</a>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <img src="<?//= base_url('img/input.png') ?>" style="width: 150%;">
            </div>
        </div>
    </div>



</body>

</html>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                        <h1><?php $guru['nama_guru'] ?></h1>

                        <!-- validation -->
                        <form action="<?php echo base_url('control_guru/updateguru'); ?>" method="post">
                            <!-- supaya input page hanya bisa di page ini saja -->
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="id" name="id_guru" value="<?php echo $guru['id_guru'] ?>">
                                <label for="nama">Masukan nama guru</label>
                                <input type="text" class="form-control" placeholder="Nama guru" id="nama" name="nama" value="<?php echo $guru['nama_guru'] ?>">
                
                            </div>
                            <div class="form-group">
                                <label for="nip">Masukan NIP</label>
                                <input type="text" class="form-control" placeholder="NIP" id="nip" name="nip" value="<?php echo $guru['NIP'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Masukan Email</label>
                                <input type="email" class="form-control" placeholder="email" id="email" name="email" value="<?php echo $guru['email'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="username">Masukan Username</label>
                                <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="<?php echo $guru['username'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Masukan Password</label>
                                <input type="password" class="form-control" placeholder="password" id="password" name="password" value="<?php echo $guru['password'] ?>" readonly>
                            </div>


                            <button type="submit" class="btn btn-xl btn-secondary mt-3">Simpan dan tambahkan</button>
                            <a type="button" class="btn btn-xl btn-warning mt-3" href="<?php echo base_url('control_guru'); ?>">Kembali ke menu</a>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <img src="<?= base_url('img/input.png') ?>" style="width: 150%;">
            </div>
        </div>
    </div>



</body>

</html>
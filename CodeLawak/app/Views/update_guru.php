<!DOCTYPE html>
<html>

<head>
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
                        <form action="<?php echo base_url('control_guru/insert_guru'); ?>" method="post">
                            <!-- supaya input page hanya bisa di page ini saja -->
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <!-- <input type="number" class="form-control" id="id" value="" hidden> -->
                                <label for="nama">Masukan nama guru</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" placeholder="Nama guru" id="nama" name="nama">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nip">Masukan NIP</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nip')) ? 'is-invalid' : '' ?>" placeholder="NIP" id="nip" name="nip">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nip') ?>
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
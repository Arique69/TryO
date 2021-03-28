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
    <div class="container" style="margin-top:200px" id="form">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-info">
                            <b>isi data</b> - pastikan semua data terisi
                        </div>
                        <form action="<?php echo base_url('pages/insert_guru'); ?>" method="post">
                            <div class="form-group">
                                <!-- <input type="number" class="form-control" id="id" value="" hidden> -->
                                <label for="nama">Masukan nama guru</label>
                                <input type="text" class="form-control" placeholder="Nama guru" id="nama" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="nip">Masukan NIP</label>
                                <input type="text" class="form-control" placeholder="NIP" id="nip" name="nip">
                            </div>
                            <div class="form-group">
                                <label for="email">Masukan Email</label>
                                <input type="email" class="form-control" placeholder="email" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="username">Masukan Username</label>
                                <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Masukan Password</label>
                                <input type="password" class="form-control" placeholder="password" id="password" name="password">
                            </div>


                            <button type="submit" class="btn btn-xl btn-secondary mt-3">Simpan dan tambahkan</button>
                            <button type="submit" class="btn btn-xl btn-warning mt-3">Kembali ke menu</button>
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
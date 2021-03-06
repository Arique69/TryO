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
    <div class="container" style="margin-top:100px" id="form">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-info">
                            <b>Masukan Password baru</b> - pastikan anda mengingat password yang anda masukan
                        </div>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <form action="ubahPass" method="POST">
                            <input type="hidden" value="<?php echo session()->get('username'); ?>" name="uname" id='uname'>
                            <input type="hidden" value="<?php echo session()->get('id_siswa'); ?>" name="id" id='id'>
                            <input type="hidden" value="<?php echo session()->get('password'); ?>" name="user_p" id='user_p'>
                            <div class="form-group mt-3">
                                <label for="pwd">Masukan Password lama:</label>
                                <input type="password" class="form-control" placeholder="password lama" id="oldp" name="oldp">
                            </div>
                            <div class="form-group mt-3">
                                <label for="pwd">Masukan Password Baru:</label>
                                <input type="password" class="form-control" placeholder="password baru" id="newp" name="newp">
                            </div>
                            <div class="form-group mt-3">
                                <label for="pwd">Masukan kembali Password Baru:</label>
                                <input type="password" class="form-control" placeholder="Re-Enter password" id="rep" name="rep">
                            </div>
                            <button type="submit" class="btn btn-xl btn-secondary mt-3">Simpan dan lanjutkan</button>
                            <a type="button" class="btn btn-xl btn-warning mt-3" href="<?php echo base_url('Home/menuSiswa'); ?>">Kembali ke menu</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>



</body>

</html>
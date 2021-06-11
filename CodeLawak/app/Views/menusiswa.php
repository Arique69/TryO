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
        <?php

        use CodeIgniter\Database\BaseUtils;

        if (!empty(session()->getFlashdata('success'))) { ?>
            <?php echo session()->getFlashdata('success'); ?>
        <?php } ?>
        <h3 class="mb-3"><b>Menu Siswa</b></h3>
        <div class="row">
            <div class="alert alert-info">
                <b>Selamat Datang ! </b> - <?php echo session()->get('username'); ?>
            </div>
            <div class="alert alert-warning mb-3">
                <b>Silakan pilih menu untuk menggunakan fungsi </b>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-key fa-10x mb-5"></i><br>
                        <a href="<?= base_url('control_siswa/menu_pass') ?>">
                            <button class="btn btn-lg btn-block btn-primary mt-10" style="margin-top: 3px;">Ganti Password</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-tasks fa-10x mb-5"></i><br>
                        <a href="<?= base_url('control_siswa/prep_soal') ?>">
                            <button class="btn btn-lg btn-block btn-primary mt-10" style="margin-top: 3px;">Kerjakan Tryout</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                
                    <div class="card-body text-center">
                        <i class="fas fa-star fa-10x mb-5"></i><br>
                        <a href="<?php echo base_url('control_nilai/getNilai/' .session()->get('id_siswa')); ?>">
                            <button class="btn btn-lg btn-block btn-primary mt-10" style="margin-top: 3px;">Lihat Nilai</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
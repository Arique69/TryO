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
    <!-- container dengan informasi bahwa user sedang berada di menu guru -->
    <div class="container" style="margin-top:200px" id="form">
        <h3 class="mb-3"><b>Menu Guru</b></h3>
        <div class="row">
            <div class="alert alert-info">
                <!-- welcome message -->
                <b>Selamat Datang ! </b> - Guru
            </div>
            <div class="alert alert-warning mb-3">
                <b>Silakan pilih menu untuk menggunakan fungsi </b>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-stream fa-10x mb-5"></i>
                        <!-- button menuju fungsi kelolasoal() -->
                        <a href="<?php echo base_url('control_soal'); ?>" class="btn btn-lg btn-block btn-primary mt-10">Manage Soal</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-book-open fa-10x mb-5"></i>
                        <!-- button menuju fungsi kelolapaket() -->
                        <a href="<?php echo base_url('control_paket'); ?>" class="btn btn-lg btn-block btn-primary mt-10">Manage Paket</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-atom fa-10x mb-5"></i>
                        <!-- button menuju fungsi kelolamapel() -->
                        <a href="<?php echo base_url('control_mapel'); ?>" class="btn btn-lg btn-block btn-primary mt-10">Manage Mata Pelajaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
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
    <div class="container" style="margin-top:100px; margin-bottom:100px" id="form">
        <?php if (!empty(session()->getFlashdata('success'))) { ?>
            <?php echo session()->getFlashdata('success'); ?>
        <?php } ?>
        <h3 class="mb-3"><b>Menu Guru</b></h3>
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
                        <i class="fas fa-stream fa-10x mb-5"></i><br>
                        <a href="<?= base_url('control_soal') ?>">
                            <button class="btn btn-lg btn-block btn-primary mt-10" style="margin-top: 3px;">Manage Soal</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-book-open fa-10x mb-5"></i><br>
                        <a href="<?= base_url('control_paket') ?>">
                            <button class="btn btn-lg btn-block btn-primary mt-10" style="margin-top: 3px;"> Manage Paket</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-atom fa-10x mb-5"></i><br>
                        <a href="<?= base_url('control_mapel') ?>">
                            <button class="btn btn-lg btn-block btn-primary mt-10" style="margin-top: 3pz;">Manage Mata Pelajaran</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <i class="fas fa-graduation-cap fa-10x mb-5"></i><br>
                        <a class="btn btn-lg btn-block btn-primary mt-10" href="<?= base_url('control_nilai/getAll') ?>" style="margin-top: 3px;">Lihat nilai siswa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
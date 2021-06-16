<!DOCTYPE html>
<html>

<!-- ini menu admin -->

<head>
    <!-- css internal -->

    
    <style>
        body {
            /* mengubah background image */
            background-image: url(https://sorongselatan.bawaslu.go.id/wp-content/uploads/2020/08/Background-opera-speeddials-community-web-simple-backgrounds.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <!-- container untuk body -->
    <div class="container" style="margin-top:100px" id="form">
        <?php if (!empty(session()->getFlashdata('success'))) { ?>
            <?php echo session()->getFlashdata('success'); ?>
        <?php } ?>
        <h3 class="mb-3"><b>Menu Admin</b></h3>
        <div class="row">
            <div class="alert alert-info">
                <b>Selamat Datang ! </b> - <?php echo session()->get('username'); ?>
            </div>
            <div class="alert alert-warning mb-3">
                <b>Silakan pilih menu untuk menggunakan fungsi </b>
            </div>
            <!-- card untuk Manage guru -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-chalkboard-teacher fa-10x "></i><br>
                        <a href="<?= base_url('control_guru') ?>">
                            <button class="btn btn-lg btn-block btn-primary mt-10" style="margin-top: 1cm;">Manage Guru</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- card untuk Manage Siswa -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-graduation-cap fa-10x"></i><br>
                        <a href="<?= base_url('control_siswa') ?>">
                            <button class=" btn btn-lg btn-block btn-primary mt-10" style="margin-top: 1cm;">Manage Siswa</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
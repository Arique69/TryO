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
    <div class="container" style="margin-top:200px" id="form">
        <h3 class="mb-3"><b>Menu Admin</b></h3>
        <div class="row">
            <div class="alert alert-info">
                <b>Selamat Datang ! </b> - Admin
            </div>
            <div class="alert alert-warning mb-3">
                <b>Silakan pilih menu untuk menggunakan fungsi </b>
            </div>
            <!-- card untuk Manage guru -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-chalkboard-teacher fa-10x mb-5"></i>
                        <button class="btn btn-lg btn-block btn-primary mt-10">Manage Guru</button>
                    </div>
                </div>
            </div>
             <!-- card untuk Manage Siswa -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-graduation-cap fa-10x mb-5"></i>
                        <button class="btn btn-lg btn-block btn-primary mt-10">Manage Siswa</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
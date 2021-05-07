<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- css lokal -->
    <link rel="styleshet" href="gaya.css">

    <!-- judul -->
    <title>Input Data Guru</title>
    <!-- ini css -->
    <style>
        body {
            background-image: url(https://sorongselatan.bawaslu.go.id/wp-content/uploads/2020/08/Background-opera-speeddials-community-web-simple-backgrounds.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <!-- page bawahnya -->
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <h1> Daftar Data Guru </h1>
        </div>
        <div class="container">
            <script>
                // Basic example
                //mengambil data dari database
                $(document).ready(function() {
                    $('#dtBasicExample').DataTable({
                        "searching": false // false to disable search (or any other option)
                    });
                    $('.dataTables_length').addClass('bs-select');
                });
            </script>
            <div>
                <table class="table table-striped table-bordered table-sm mt-4" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Username</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //untuk menampilkan data dari database
                        $no = 1;
                        foreach ($data as $g) :  ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $g['NIP']; ?></td>
                                <td><?= $g['username']; ?></td>
                                <td><?= $g['nama_guru']; ?></td>
                                <td><?= $g['email']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- button Kembali -->
            <div class="row">
                <div class="col md-6">
                    <a class="btn btn-warning btn-block mt-2" href="<?php echo base_url('/pages') ?>">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
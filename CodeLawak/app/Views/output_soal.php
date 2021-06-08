<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <!-- css lokal -->
    <link rel="styleshet" href="gaya.css">

    <!-- judul -->
    <title>Input Data Soal</title>
    <style>
        body {
            background-image: url(https://sorongselatan.bawaslu.go.id/wp-content/uploads/2020/08/Background-opera-speeddials-community-web-simple-backgrounds.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        #searchbar {
            justify-content: end;
            float: right;
            margin-top: 20px;
            width: 36%;
            font-size: 16px;
            border: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <!-- page bawahnya -->
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <h1> Daftar Data Soal </h1>
        </div>
        <div class="container">
            <!-- ini nambah tombol kelola guru -->
            <a href="<?php echo base_url('control_soal/kelolasoal') ?>" class="btn btn-success mt-3 mb-3">Tambah Soal</a>
            <!-- searching bar -->
            <!-- <input type="text" id="searchbar" onkeyup="filtertable()" placeholder="Search for names.." class=""> -->
            <!-- buat nambah flash data -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success mt-2" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <div>
                <table id="table_id" class="display table table-striped table-bordered table-sm mt-3">
                    <thead class="thead-light">
                        <tr>
                            <th>no</th>
                            <th>Nama Mata Pelajaran</th>
                            <th>Nama Paket</th>
                            <th>Isi Soal</th>
                            <th>Opsi A</th>
                            <th>Opsi B</th>
                            <th>Opsi C</th>
                            <th>Kunci jawaban</th>
                            <th>Hapus</th>
                            <th>Update</th>
                            <th>show</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($soal as $s) :  ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $s['nama_mata_pelajaran']; ?></td>
                                <td><?= $s['nama_paket']; ?></td>
                                <td><?= $s['isi_soal']; ?></td>
                                <td><?= $s['opsi_a']; ?></td>
                                <td><?= $s['opsi_b']; ?></td>
                                <td><?= $s['opsi_c']; ?></td>
                                <td><?= $s['kunci_jawaban']; ?></td>
                                <td><a href="<?php echo base_url('control_soal/delete_soal/' . $s['id_soal']); ?>" class="btn btn-danger btn-block" onclick="return confirm('Apakah anda yakin ?')">Hapus</a></td>
                                <td><a href="<?php echo base_url('control_soal/update_soal/' . $s['id_soal']); ?>" class="btn btn-warning btn-block">edit</a></td>
                                <td><a href="<?php echo base_url('control_soal/show_soal/' . $s['id_soal']); ?>" class="btn btn-primary btn-block">Show</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col md-6">
                    <a class="btn btn-primary btn-block mt-2" href="<?php echo base_url('Home/menuGuru') ?>">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Script buat seaching -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
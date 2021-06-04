<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
                            <b>Pilih Mapel</b> - pastikan mata pelajaran sesuai
                        </div>
                        <!-- validation -->
                        <form action="<?php echo base_url('control_siswa/kerja_soal'); ?>" method="post">
                            <!-- supaya input page hanya bisa di page ini saja -->
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="nama_mata_pelajaran">Mata Pelajaran : </label>
                                <select name="nama_mata_pelajaran" id="nama_mata_pelajaran" class="form-control">
                                    <?php
                                    foreach ($mapel as $m) :  ?>
                                        <option value="<?= $m['nama_mata_pelajaran']; ?>"><?= $m['nama_mata_pelajaran']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nama_paket">Paket : </label>
                                <select name="nama_paket" id="nama_paket" class="form-control">
                                    <?php
                                    foreach ($paket as $p) :  ?>
                                        <option value="<?= $p['nama_paket']; ?>"><?= $p['nama_paket']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-xl btn-secondary mt-3">Mulai Kerjakan</button>
                            <a type="button" class="btn btn-xl btn-warning mt-3" href="<?php echo base_url('pages/menu_siswa'); ?>">Kembali ke menu</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="<? //= base_url('img/input.png') 
                            ?>" style="width: 150%;">
            </div>
        </div>
    </div>



</body>

</html>
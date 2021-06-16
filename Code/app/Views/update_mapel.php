<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                            <b>isi data</b> - pastikan semua data terisi
                        </div>
                        <h1><?php $mata_pelajaran['nama_mata_pelajaran'] ?></h1>

                        <!-- validation -->
                        <form action="<?php echo base_url('control_mapel/updatemapel'); ?>" method="post">
                            <!-- supaya input page hanya bisa di page ini saja -->
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="id" name="id_mata_pelajaran" value="<?php echo $mata_pelajaran['id_mata_pelajaran'] ?>">
                                <label for="nama">Masukan nama mata pelajaran</label>
                                <input type="text" class="form-control" placeholder="Mata Pelajaran" id="mata_pelajaran" name="mata_pelajaran" value="<?php echo $mata_pelajaran['nama_mata_pelajaran'] ?>">
                
                            </div>

                            <button type="submit" class="btn btn-xl btn-secondary mt-3">Simpan dan tambahkan</button>
                            <a type="button" class="btn btn-xl btn-warning mt-3" href="<?php echo base_url('control_mapel'); ?>">Kembali ke menu</a>
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
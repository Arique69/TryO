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
                            <b>isi data</b> - pastikan semua data terisi
                        </div>
                        <!-- validation -->
                        <form action="<?php echo base_url('control_soal/updatesoal'); ?>" method="post">
                            <!-- supaya input page hanya bisa di page ini saja -->
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="id_mata_pelajaran">Mata Pelajaran : </label>
                                <select name="id_mata_pelajaran" id="id_mata_pelajaran" class="form-control">
                                    <?php
                                    foreach ($mapel as $m) :  ?>
                                       <option value="<?= $m['id_mata_pelajaran']; ?>"  <?php if($soal['id_mata_pelajaran']==$m['id_mata_pelajaran']) echo 'selected="selected"';?>><?= $m['nama_mata_pelajaran']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="id_paket">Paket : </label>
                                <select name="id_paket" id="id_paket" class="form-control">
                                    <?php
                                    foreach ($paket as $p) :  ?>
                                       <option value="<?= $p['id_paket']; ?>"  <?php if($soal['id_paket']==$p['id_paket']) echo 'selected="selected"';?>><?= $p['nama_paket']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nama">Masukan Link gambar</label>
                                <input type="hidden" class="form-control" id="id" name="id_soal" value="<?php echo $soal['id_soal'] ?>">
                                <textarea type="text" class="form-control" placeholder="Link gambar" id="gambar" name="gambar"><?php echo $soal['gambar'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="nama">Masukan Isi Soal</label>
                                <textarea type="text" class="form-control" id="isi_soal" name="isi_soal"><?php echo $soal['isi_soal'] ?></textarea>
                            </div>

                            <div class="form-group">

                                <label for="nama">OPSI A</label>
                                <textarea type="text" class="form-control" placeholder="Opsi A" id="opsi_a" name="opsi_a"><?php echo $soal['opsi_a'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <!-- <input type="number" class="form-control" id="id" value="" hidden> -->
                                <label for="nama">OPSI B</label>
                                <textarea type="text" class="form-control" placeholder="Opsi B" id="opsi_b" name="opsi_b"><?php echo $soal['opsi_b'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <!-- <input type="number" class="form-control" id="id" value="" hidden> -->
                                <label for="nama">OPSI C</label>
                                <textarea type="text" class="form-control" placeholder="Opsi C" id="opsi_c" name="opsi_c"><?php echo $soal['opsi_c'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="kunjaw">Kunci Jawaban : </label>
                                <select name="kunjaw" id="kunjaw" class="form-control">
                                    <option value="A" <?php if($soal['kunci_jawaban']=="A") echo 'selected="selected"';?>>A</option>
                                    <option value="B" <?php if($soal['kunci_jawaban']=="B") echo 'selected="selected"';?>>B</option>
                                    <option value="C" <?php if($soal['kunci_jawaban']=="C") echo 'selected="selected"';?>>C</option>
                                </select>
                            </div>



                            <button type="submit" class="btn btn-xl btn-secondary mt-3">Simpan dan tambahkan</button>
                            <a type="button" class="btn btn-xl btn-warning mt-3" href="<?php echo base_url('control_soal'); ?>">Kembali ke menu</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>



</body>

</html>
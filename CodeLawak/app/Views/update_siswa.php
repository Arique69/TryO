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
                        <form action="<?php echo base_url('control_siswa/updatesiswa'); ?>" method="post">
                            <!-- supaya input page hanya bisa di page ini saja -->
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <!-- <input type="number" class="form-control" id="id" value="" hidden> -->
                                <input type="hidden" class="form-control" id="id" name="id_siswa" value="<?php echo $siswa['id_siswa'] ?>">
                                <label for="nama">Masukan nama siswa</label>
                                <input type="text" class="form-control" placeholder="Nama siswa" id="nama" name="nama" value="<?php echo $siswa['nama_siswa'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="nip">Masukan NISN</label>
                                <input type="text" class="form-control" placeholder="NISN" id="nisn" name="nisn" value="<?php echo $siswa['NISN'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="kelas">Pilih Kelas : </label>
                                <select name="kelas" id="kelas" class="form-control">
                                    <option value="6A" <?php if($siswa['kelas']=="6A") echo 'selected="selected"';?> >6A</option>
                                    <option value="6B" <?php if($siswa['kelas']=="6B") echo 'selected="selected"';?> >6B</option>
                                    <option value="6C" <?php if($siswa['kelas']=="6C") echo 'selected="selected"';?> >6C</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Pilih Jenis Kelamin  : </label>
                                <select name="jenis_kelamin" id="jenis Kelamin" class="form-control">
                                    <option value="perempuan" <?php if($siswa['jenis_kelamin']=="perempuan") echo 'selected="selected"';?> >Perempuan</option>
                                    <option value="laki-laki" <?php if($siswa['jenis_kelamin']=="laki-laki") echo 'selected="selected"';?> >Laki-Laki</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="TTL" class="col-2 col-form-label">Tanggal Lahir</label> 
                                <input class="form-control" type="date"  id="TTL" name="TTL" value="<?php echo $siswa['TTL'] ?>">
        
                            </div>
            
                            <div class="form-group">
                                <label for="email">Masukan Email</label>
                                <input type="email" class="form-control" placeholder="email" id="email" name="email" value="<?php echo $siswa['email'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="username">Masukan Username</label>
                                <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="<?php echo $siswa['username'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Masukan Password</label>
                                <input type="password" class="form-control" placeholder="password" id="password" name="password" value="<?php echo $siswa['password'] ?>" readonly>
                            </div>


                            <button type="submit" class="btn btn-xl btn-secondary mt-3">Simpan dan tambahkan</button>
                            <a type="button" class="btn btn-xl btn-warning mt-3" href="<?php echo base_url('control_siswa'); ?>">Kembali ke menu</a>
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
<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background-image: url(https://sorongselatan.bawaslu.go.id/wp-content/uploads/2020/08/Background-opera-speeddials-community-web-simple-backgrounds.jpg);
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="container" style="margin-top:200px" id="form">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card"> 
                            <div class="card-body">
                                <div class="alert alert-info">
                                    <b>isi data</b> - pastikan semua data terisi
                                </div>
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <label for="pwd">Masukan nama guru:</label>
                                        <input type="text" class="form-control" placeholder="Nama guru" id="pwd">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Masukan NIP</label>
                                        <input type="text" class="form-control" placeholder="NIP" id="pwd">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Masukan Email</label>
                                        <input type="email" class="form-control" placeholder="email" id="pwd">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Masukan Username</label>
                                        <input type="text" class="form-control" placeholder="Username" id="pwd">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Masukan Password</label>
                                        <input type="password" class="form-control" placeholder="password" id="pwd">
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-xl btn-secondary mt-3">Simpan dan tambahkan</button>
                                    <button type="submit" class="btn btn-xl btn-warning mt-3">Kembali ke menu</button>
                                </form> 
                            </div>
                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <img src="<?= base_url('img/input.png') ?>" style="width: 150%;">
                </div>
            </div>
        </div>
        
        
        
    </body>
</html> 
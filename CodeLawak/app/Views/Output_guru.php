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
                            <th scope="col">Nama Depan</th>
                            <th scope="col">Nama Belakang</th>
                            <th scope="col">Pengampu Pelajaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>0000012483219582</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Matematika</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>0000012483219583</td>
                            <td>@fat</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Bahasa Indonesia</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>0000012483219584</td>
                            <td>@twitter</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>IPA</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col md-6">
                    <button class="btn btn-primary btn-block mt-2" type="submit">Simpan</button>
                </div>
                <div class="col md-6">
                    <button class="btn btn-warning btn-block mt-2" type="submit">Kembali</button>
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
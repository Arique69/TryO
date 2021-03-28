<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    #judul{
            background-color: rgb(2, 153, 83);
            font-family: 'Lucida Console';
        }
    #form{
            font-family: 'Lucida Console';
    }

     body{
            background-image: url(https://sorongselatan.bawaslu.go.id/wp-content/uploads/2020/08/Background-opera-speeddials-community-web-simple-backgrounds.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    
  </style>
</head>
<body>
<div class="container" style="margin-top:100px" id="form">
  <div class="row">
    <div class="col-md-8">

    </div>
    <div class="col-md-4">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-sm btn-secondary btn">Search</button>
            </div>
        </div>
    </div>        
        
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Tanggal Pengerjaan</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Nilai</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>19/03/2021</td>
            <td>Matematika</td>
            <td>70</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>19/03/2021</td>
            <td>Bahasa Indonesia</td>
            <td>85</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>19/03/2021</td>
            <td>IPA</td>
            <td>90</td>
          </tr>
        </tbody>
      </table>
      <button type="button" class="btn btn-secondary">Kembali</button>   
  </div>
</div>
</body>
</html>
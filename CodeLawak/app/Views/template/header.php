
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sanber - Latihan Bootstrap</title>
    <!-- <linkrel="stylesheethref="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />" -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">  
      
    
    <!-- <link rel="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"> -->

    <title>TryO - Tryout berbasis online</title>
    <style>
        body {
            height: 100%;
            font-size: 1rem;
            font-family: 'Montserrat', sans-serif;
        }

        #gradient {
            background: #536976;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #292E49, #536976);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #292E49, #536976);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        a {
            text-decoration: none;
            color: black;
        }

        html {
            scroll-behavior: smooth;
        }

    </style>
</head>

<body>
    <!--Navbar top-->
    <div class="d-flex justify-content-end bg-dark">
      <ul class="nav nav">
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white">Help</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white">Contact Admin</a>
        </li>
      </ul>
    </div>

    <!--Navbar Middle-->
    <div
      class="navbar navbar-expand-sm navbar-light justify-content-between"
      style="background-color: #98bbd3" id="gradient"
    >
      <a class="navbar-brand" href="#"
        ><img src=<?= base_url('img/tryoA.png') ?> alt="" style="width: 150px; margin-left:50px"
      /></a>
      <h5 style="color: white; margin-right:50px">Username</h5>
    </div>
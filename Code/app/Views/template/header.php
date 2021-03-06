<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <linkrel="stylesheethref="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />" -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

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
    </ul>
  </div>

   <!--Navbar Middle-->
   <div
      class="navbar navbar-expand-sm navbar-light justify-content-between"
      id="gradient"
    >
      <a class="navbar-brand" href="#"
        ><img src="<?= base_url('img/tryoA.png') ?>" alt="" style="width: 9%"
      /></a>
      
      <button class="btn btn-sm btn-outline-light mr-3" style="margin-left: 10px; "><i class="fa fa-user mr-3"></i><?php echo session()->get('username'); ?></button>
      <a href="<?= base_url('LoginController/logout') ?>"><button class="btn btn-sm btn-outline-light mr-3" style="margin-left: 10px;"><i class="fas fa-sign-out-alt mr-3"></i>Logout</button></a>
    </div>
   
  </div>
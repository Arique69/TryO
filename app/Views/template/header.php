<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   
    <title>TryO - Tryout berbasis online</title>
    <style>
          body {
            height: 100%;
            font-size: 1rem;
            font-family: 'Montserrat', sans-serif;
        }

        #gradient {
            background: #536976;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #292E49, #536976);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #292E49, #536976); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        a {
            text-decoration: none;
            color: black;
        }

        html {
            scroll-behavior: smooth;
        }
        #username{
            color: white;

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="gradient">
        <div class="container">
            <a class="navbar-brand" href="#"><img src=<?= base_url('img/tryoA.png') ?> alt="" style="width: 15%;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
             </button>
               

            <div class="collapse navbar-collapse fixed-top position-relative justify-content-end" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">                           
                        <b><a href="#" class="link-light" id="username">Username</a></b>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
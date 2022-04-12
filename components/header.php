<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/css/bootstrap.custom.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito&display=swap">

    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <style type="text/css">
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <title>Home</title>
</head>
<body>
    
    <?php if(isset($_SESSION['___user___'])) : ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="/">
                Peduli Diri
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/catatan-perjalanan.php">Catatan Perjalanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/isi-data.php">Isi Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php endif ?>
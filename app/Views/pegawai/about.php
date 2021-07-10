<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>/laundry/assets/scss/main.css">

    <title>Lord of The Rinse</title>
</head>

<body>
    <div class="container my-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light custom-nav bg-transparent">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url() ?>/laundry/assets/img/logo.png" alt="Lord of the rinse">
                <span>Lord Of The Rinse</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Kontak</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link sign-up-button" href="sign-up.html">Sign Up</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link sign-in-button" href="/login">Sign In</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row custom-section">
            <div class="col-12 col-lg-4">
                <h1>Tentang</h1>
                <h2>Kami!</h2>
                <p>Aplikasi Lord of The Rinse adalah aplikasi yang memudahkan para penyedia jasa laundry dalam melakukan
                    pencatatan harian laundry mereka. Sudah siap untuk mencatat? Yuk, kita mulai!
                </p>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
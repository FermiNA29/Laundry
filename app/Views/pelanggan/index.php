<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- navbar -->

                <h1>Dashboard Laundry</h1>
                <a href="/pelanggan/tambah" class="btn btn-primary">Tambah Laundry</a>

                <!-- table -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Berat</th>
                            <th scope="col">Paket</th>
                            <th scope="col">Tanggal Masuk</th>
                            <th scope="col">Tanggal Keluar</th>
                            <th scope="col">Harga</th>
                            <th scope="col">status</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;; ?>
                        <?php foreach ($pelanggan as $dat) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $dat->nama; ?></td>
                                <td><?= $dat->berat; ?></td>
                                <td><?= $dat->paket; ?></td>
                                <td><?= $dat->tglMasuk; ?></td>
                                <td><?= $dat->tglKeluar; ?></td>
                                <td>Rp. <?= $dat->berat * $dat->harga; ?></td>
                                <td><?= $dat->status == 0 ?  "Belum diambil" :  "Diambil"; ?></td>
                                <td>
                                    <a href="/pelanggan/edit/<?php echo $dat->id ?>" class="btn btn-info">Edit</a>
                                    <form action="/pelanggan/hapus/<?php echo $dat->id ?>" method="POST" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- table -->

            </div>
        </div>
    </div>
</body>

</html>
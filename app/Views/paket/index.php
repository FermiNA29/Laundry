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
                <h1>Dashboard Paket</h1>

                <a href="/paket/tambah" class="btn btn-primary">Tambah</a>
                <!-- table -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis Paket</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($paket as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $p->paket; ?></td>
                                <td><?= $p->harga; ?></td>
                                <td>
                                    <a href="/paket/edit/<?php echo $p->id ?>" class="btn btn-info">Edit</a>
                                    <form action="/paket/hapus/<?php echo $p->id ?>" method="POST" class="d-inline">
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
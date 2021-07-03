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
                <h1>Data Pegawai</h1>
                <a href="/pegawai/tambah" class="btn btn-primary">Tambah</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Level</th>
                            <td scope="col">Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pegawai as $user) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $user->username; ?></td>
                                <td><?= $user->nama; ?></td>
                                <td><?= $user->alamat; ?></td>
                                <td><?= $user->role; ?></td>
                                <td>
                                    <a href="/pegawai/edit/<?= $user->id; ?>" class="btn btn-primary">Edit</a>
                                    <?php
                                    if ($user->level == 2) {
                                        echo '<form action="/pegawai/hapus/' . $user->id . '" method="POST" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>';
                                    } else {
                                        echo "";
                                    }

                                    ?>
                                    <!-- <form action="/pegawai/hapus/<?= $user->id; ?>" method="POST" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form> -->

                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
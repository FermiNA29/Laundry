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
                <h1>Edit Data Pegawai</h1>

                <!-- form -->
                <form action="/pegawai/update/<?= $user["id"]; ?>" method="POST">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" value="<?= $user["username"]; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" value="<?= $user["password"]; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= $user["nama"]; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?= $user["alamat"]; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan address">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Level</label>
                        <select class="form-control" name="level" id="exampleFormControlSelect1">
                            <option selected>Pilih...</option>
                            <option value="1" <?= $user["level"] == 1 ? "selected" : ""; ?>>Admin</option>
                            <option value="2" <?= $user["level"] == 2 ? "selected" : ""; ?>>Pegawai</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- form -->
            </div>
        </div>
    </div>
</body>

</html>
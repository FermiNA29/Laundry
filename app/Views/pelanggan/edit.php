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

                <h1>Form Tambah Laundry</h1>

                <!-- form -->
                <form action="/pelanggan/update/<?= $user["id"]; ?>" method="POST">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $user["nama"]; ?>" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="berat">Berat</label>
                        <input type="text" name="berat" class="form-control" id="berat" value="<?= $user["berat"]; ?>" placeholder="Masukan Berat">
                    </div>
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Paket</label>
                    <select class="custom-select my-1 mr-sm-2" name="paket" id="inlineFormCustomSelectPref">
                        <option selected>Pilih Paket</option>
                        <?php foreach ($paket as $p) : ?>
                            <option value="<?= $p['id'] ?>" <?= $user["idPaket"] == $p['id'] ? "selected" : ""; ?>><?= $p['paket'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <div class="form-group">
                        <label for="tglMasuk">Tanggal Masuk</label>
                        <input type="date" name="tglMasuk" class="form-control" id="tglMasuk" value="<?= $user["tglMasuk"]; ?>" placeholder="Masukan Tanggal">
                    </div>
                    <div class="form-group">
                        <label for="tglKeluar">Tanggal Keluar</label>
                        <input type="date" name="tglKeluar" class="form-control" id="tglKeluar" value="<?= $user["tglKeluar"]; ?>" placeholder="Masukan Tanggal">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status1" <?= $user["status"] == 1 ? "checked" : ""; ?> value="1">
                            <label class="form-check-label" for="status1">
                                Diambil
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status2" <?= $user["status"] == 0 ? "checked" : ""; ?> value="0">
                            <label class="form-check-label" for="status2">
                                Belum diambil
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- form -->
            </div>
        </div>
    </div>
</body>

</html>
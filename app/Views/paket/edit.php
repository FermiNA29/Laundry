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
                <form action="/paket/update/<?= $paket["id"]; ?>" method="POST">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="paket">Jenis Paket</label>
                        <input type="text" name="paket" class="form-control" id="paket" value="<?= $paket["paket"]; ?>" placeholder="Masukan Jenis Paket">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga" value="<?= $paket["harga"]; ?>" placeholder="Masukan harga">
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
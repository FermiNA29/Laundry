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
                <h1>Edit Data Role</h1>

                <!-- form -->
                <form action="/role/update/<?= $user["id"]; ?>" method="POST">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama">Role</label>
                        <input type="text" name="nama" value="<?= $user["nama"]; ?>" class="form-control" id="nama" placeholder="Masukan Role">
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
                <!-- form -->
            </div>
        </div>
    </div>
</body>

</html>
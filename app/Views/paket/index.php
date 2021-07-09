<?= $this->extend('/layouts/admin/master'); ?>

<?= $this->section('name'); ?>
<?= $nama; ?>
<?= $this->endsection(); ?>

<?= $this->section('content'); ?>
<a href="/paket/tambah" class="btn btn-primary">Tambah</a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Manage Account</h6>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
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

</div>
<?= $this->endsection(); ?>

</html>
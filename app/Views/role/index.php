<?= $this->extend('/layouts/admin/master'); ?>

<?= $this->section('name'); ?>
<?= $nama; ?>
<?= $this->endsection(); ?>

<?= $this->section('content'); ?>
<a href="/role/tambah" class="btn btn-primary">Tambah</a>

<!-- table -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Manage Account</h6>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Role</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;; ?>
            <?php foreach ($role as $r) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $r->nama; ?></td>
                    <td>
                        <a href="/role/edit/<?= $r->id; ?>" class="btn btn-primary">Edit</a>
                        <form action="/role/hapus/<?php echo $r->id ?>" method="POST" class="d-inline">
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
</div>
<!-- table -->
<?= $this->endsection(); ?>
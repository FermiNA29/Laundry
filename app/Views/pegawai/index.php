<?= $this->extend('/layouts/admin/master'); ?>


<?= $this->section('content'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Manage Account</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="/pegawai/tambah" class="btn btn-primary mb-3">Tambah</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pegawai as $user) : ?>
                        <tr>
                            <td><?= $i; ?></td>
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
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>
<?= $this->extend('/layouts/pegawai/master'); ?>

<?= $this->section('name'); ?>
<?= $nama; ?>
<?= $this->endsection(); ?>

<?= $this->section('content'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Catatan Terakhir</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Berat</th>
                        <th>Paket</th>
                        <th>Tgl Masuk</th>
                        <th>Tgl Keluar</th>
                        <th>Harga</th>
                        <th>status</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Berat</th>
                        <th>Paket</th>
                        <th>Tgl Masuk</th>
                        <th>Tgl Keluar</th>
                        <th>Harga</th>
                        <th>status</th>
                        <th>aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pelanggan as $dat) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $dat['nama']; ?></td>
                            <td><?= $dat['berat']; ?></td>
                            <td><?= $dat['paket']; ?></td>
                            <td><?= $dat['tglMasuk']; ?></td>
                            <td><?= $dat['tglKeluar']; ?></td>
                            <td>Rp. <?= $dat['berat'] * $dat['harga']; ?></td>
                            <td><?= $dat['status'] == 0 ?  "Belum diambil" :  "Diambil"; ?></td>
                            <td>
                                <a href="/pelanggan/edit/<?php echo $dat['id'] ?>" class="btn btn-info">Edit</a>
                                <form action="/pelanggan/hapus/<?php echo $dat['id'] ?>" method="POST" class="d-inline">
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
    </div>
</div>
<!-- table -->

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Catatan Terakhir</h6>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="" method="POST">
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" name="keyword" placeholder="Cari nama...." aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Berat</th>
                            <th scope="col">Paket</th>
                            <th scope="col">Tgl Masuk</th>
                            <th scope="col">Tgl Keluar</th>
                            <th scope="col">Harga</th>
                            <th scope="col">status</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (1 * ($currentPage - 1)); ?>
                        <?php foreach ($pelanggan as $dat) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $dat['nama']; ?></td>
                                <td><?= $dat['berat']; ?></td>
                                <td><?= $dat['paket']; ?></td>
                                <td><?= $dat['tglMasuk']; ?></td>
                                <td><?= $dat['tglKeluar']; ?></td>
                                <td>Rp. <?= $dat['berat'] * $dat['harga']; ?></td>
                                <td><?= $dat['status'] == 0 ?  "Belum diambil" :  "Diambil"; ?></td>
                                <td>
                                    <a href="/pelanggan/edit/<?php echo $dat['id'] ?>" class="btn btn-info">Edit</a>
                                    <form action="/pelanggan/hapus/<?php echo $dat['id'] ?>" method="POST" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <?php $i++; ?>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav> -->
                <?= $pager->links('pelanggan', 'pelanggan_pagination') ?>
            </div>
        </div>

    </div>
</div>
<?= $this->endsection(); ?>
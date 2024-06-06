<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>List Komik</h2>
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('success') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            <?php endif ?>
            <a href="/komik/create" class="btn btn-primary">Tambah data</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($komik as $rk) : ?>
                        <tr>
                            <td scope="row"><?= $no++; ?></td>
                            <td><img src="/img/<?= $rk['sampul']; ?>" alt="" width=" 100"></td>
                            <td><?= $rk['judul']; ?></td>
                            <td><a href="/komik/detail/<?= $rk['slug']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
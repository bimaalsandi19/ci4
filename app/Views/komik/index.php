<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>List Komik</h2>
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
                            <td><a href="" class="btn btn-success">Detail</a></td>
                        </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
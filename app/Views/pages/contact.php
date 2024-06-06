<?php $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Contact</h2>
            <?php foreach ($alamat as $ra) : ?>

                <ul>
                    <li> <?= $ra['tipe']; ?></li>
                    <li> <?= $ra['alamat']; ?></li>
                </ul>

            <?php endforeach ?>

        </div>
    </div>
</div>

<?php $this->endSection(); ?>
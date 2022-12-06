<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Daftar Poli</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr align="middle">
                    <th>No</th>
                    <th>Nama Poli</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($polis as $index => $poli) : ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $poli['nama_poli'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
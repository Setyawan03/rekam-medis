<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Daftar Medis</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr align="middle">
                    <th>No</th>
                    <th>Id Pasien</th>
                    <th>Id Poli</th>
                    <th>Nama Pasien</th>
                    <th>Alamat</th>
                    <th>Tanggal Periksa</th>
                    <th>Keluhan</th>
                    <th>Diagnosa</th>
                    <th>Resep</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rekammedis as $index => $rekammedis) : ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $rekammedis['pasien_id'] ?></td>
                        <td><?= $rekammedis['poli_id'] ?></td>
                        <td><?= $rekammedis['nama'] ?></td>
                        <td><?= $rekammedis['tanggal'] ?></td>
                        <td><?= $rekammedis['keluhan'] ?></td>
                        <td><?= $rekammedis['alamat'] ?></td>
                        <td><?= $rekammedis['diagnosa'] ?></td>
                        <td><?= $rekammedis['resep'] ?></td>
                        <td><?= $rekammedis['username'] ?></td>
                        <td><?= $rekammedis['role'] ?></td>
                        <td></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
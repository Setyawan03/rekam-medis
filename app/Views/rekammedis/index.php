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
                    <th>Nama Pasien</th>
                    <th>Nama Poli</th>
                    <th>Alamat</th>
                    <th>Tanggal Berobat</th>
                    <th>Keluhan</th>
                    <th>Diagnosa</th>
                    <th>Resep</th>
                    <th>Nama Dokter</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rekammedis as $index => $rekammedis) : ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $rekammedis['nama_pasien'] ?></td>
                        <td><?= $rekammedis['nama_poli'] ?></td>
                        <td><?= $rekammedis['alamat'] ?></td>
                        <td><?= $rekammedis['tanggal'] ?></td>
                        <td><?= $rekammedis['keluhan'] ?></td>
                        <td><?= $rekammedis['diagnosa'] ?></td>
                        <td><?= $rekammedis['resep'] ?></td>
                        <td><?= $rekammedis['nama_dokter'] ?></td>
                        <td>
                            <a href="<?= base_url('rekammedis/deleted') . "/" . $rekammedis['id'] ?>"><i class="fas fa-trash"></i></a>
                            <a href="<?= base_url('rekammedis/edit') . "/" . $rekammedis['id'] ?>"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
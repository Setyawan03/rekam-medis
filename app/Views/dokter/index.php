<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Daftar Dokter</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr align="middle">
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Alamat</th>
                    <th>Spesialis</th>
                    <th>Jadwal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dokters as $key => $dokter) : ?>
                    <tr>
                        <td align="middle"><?= $key + 1 ?></td>
                        <td><?= $dokter['nama_dokter'] ?></td>
                        <td><?= $dokter['alamat'] ?></td>
                        <td><?= $dokter['spesialis'] ?></td>
                        <td><?= $dokter['no_hp'] ?></td>
                        <td><a href="<?= base_url('dokter/deleted') . "/" . $dokter['id'] ?>"><i class="fas fa-trash"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
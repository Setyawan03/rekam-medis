<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Daftar Pasien</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr align="middle">
                    <th>No</th>
                    <th>No Kartu</th>
                    <th>Nama Pasien</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>No Handphone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pasiens as $key => $pasien) : ?>
                    <tr>
                        <td align="middle"><?= $key + 1 ?></td>
                        <td><?= $pasien['no_pasien'] ?></td>
                        <td><?= $pasien['nama_pasien'] ?></td>
                        <td><?= $pasien['jenis_kelamin'] ?></td>
                        <td><?= $pasien['alamat'] ?></td>
                        <td><?= $pasien['tmpt_lahir'] . ', ' . $pasien['tgl_lahir'] ?></td>
                        <td><?= $pasien['no_hp'] ?></td>
                        <td align="middle">
                            <a href="<?= base_url('pasien/deleted') . "/" . $pasien['id'] ?>"><i class="fas fa-trash"></i></a>
                            <a href="<?= base_url('pasien/edit') . "/" . $pasien['id'] ?>"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
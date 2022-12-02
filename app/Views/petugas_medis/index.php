<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Daftar Petugas</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr align="middle">
                    <th>No</th>
                    <th>Nama Petugas</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>No Handphone</th>
                    <th>Jabatan</th>
                    <th>Poli</th>
                    <th>Username</th>
                    <th>User Akses</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($petugas_medis as $index => $petugas) : ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $petugas['nama'] ?></td>
                        <td><?= $petugas['alamat'] ?></td>
                        <td><?= $petugas['jenis_kelamin'] ?></td>
                        <td><?= $petugas['no_hp'] ?></td>
                        <td><?= $petugas['jabatan'] ?></td>
                        <td><?= $petugas['nama_poli'] ?></td>
                        <td><?= $petugas['username'] ?></td>
                        <td><?= $petugas['role'] ?></td>
                        <td></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
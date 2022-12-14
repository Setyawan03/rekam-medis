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
                    <th>Id User</th>
                    <th>Id Poli</th>
                    <th>Nama Petugas</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>No Handphone</th>
                    <th>Jabatan</th>
                    <th>Username</th>
                    <th>User Akses</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($petugas_medis as $index => $petugas) : ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $petugas['user_id'] ?></td>
                        <td><?= $petugas['poli_id'] ?></td>
                        <td><?= $petugas['nama'] ?></td>
                        <td><?= $petugas['alamat'] ?></td>
                        <td><?= $petugas['jenis_kelamin'] ?></td>
                        <td><?= $petugas['no_hp'] ?></td>
                        <td><?= $petugas['jabatan'] ?></td>
                        <td><?= $petugas['nama_poli'] ?></td>
                        <td><?= $petugas['username'] ?></td>
                        <td><?= $petugas['role'] ?></td>
                        <td>
                            <a href="<?= base_url('petugas_medis/deleted') . "/" . $petugas['id'] ?>"><i class="fas fa-trash"></i></a>
                            <a href="<?= base_url('petugas_medis/edit') . "/" . $petugas['id'] ?>"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
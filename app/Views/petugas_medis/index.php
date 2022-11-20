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
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
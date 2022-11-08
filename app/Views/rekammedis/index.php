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
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>No Handphone</th>
                    <th>Keluhan</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
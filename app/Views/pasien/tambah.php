<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Tambah Pasien</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Alamat</th>
                    <th>No Handphone</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
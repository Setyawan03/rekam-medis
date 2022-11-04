<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Daftar Dokter</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr align=middle>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Alamat</th>
                    <th>No Handphone</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
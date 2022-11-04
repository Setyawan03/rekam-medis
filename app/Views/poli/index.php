<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Daftar Poli</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Poli</th>
                    <th>Alamat</th>
                    <th>No Handphone</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
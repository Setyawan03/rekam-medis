<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Tambah Pasien</h3>
        <a class="navbar-brand" href="#">
            <img src="/dist/img/plus-removebg-preview.png" width="35" height="35" alt="">
        </a>
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
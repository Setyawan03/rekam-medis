<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Ubah Poli</h3>
    </div>
    <div class="card-body">
        <form action="<?= base_url() ?>/poli/update/<?= $polis['id']; ?>" method="POST">
            <div class="form-group">
                <label for="">Nama Poli</label>
                <input value="<?= $polis['nama_poli']; ?>" type="text" name="nama_poli" class="form-control" placeholder="Input Nama Poli">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
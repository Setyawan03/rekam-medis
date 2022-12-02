<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Tambah Pasien</h3>
    </div>
    <div class="card-body">
        <form action="<?= base_url('pasien/add') ?>" method="POST">
            <div class="form-group">
                <label for="">Tanggal Berobat</label>
                <input type="date" name="tgl_lahir" class="form-control" placeholder="Input Tempat Lahir">
            </div>
            <div class="form-group">
                <label for="">Keluhan</label>
                <textarea name="keluhan" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">Diagnosa</label>
                <textarea name="diagnosa" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">Resep Obat</label>
                <textarea name="resep" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Tambah Dokter</h3>
    </div>
    <div class="card-body">
        <form action="<?= base_url('dokter/add') ?>" method="POST">
            <div class="form-group">
                <label for="">Nama Dokter</label>
                <input type="text" name="nama_dokter" class="form-control" placeholder="Input Nama Dokter">
            </div>
            <div class="form-group">
                <label for="">Spesialis</label>
                <input type="text" name="spesialis" class="form-control" placeholder="Input Spesialis">
            </div>
            <div class="form-group">
                <label for="">Kontak</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Input Nomor HP">
            </div>
            <div class="form-group">
                <label for="">Jadwal</label>
                <input type="text" name="jadwal" class="form-control" placeholder="Input Jadwal">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="alamat" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
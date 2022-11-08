<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Tambah Pasien</h3>
    </div>
    <div class="card-body">
        <form action="<?= base_url('pasien/add') ?>" method="POST">
            <div class="form-group">
                <label for="">Nama Pasien</label>
                <input type="text" name="nama_pasien" class="form-control" placeholder="Input Nama Pasien">
            </div>
            <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input type="text" name="tmpt_lahir" class="form-control" placeholder="Input Tempat Lahir">
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" placeholder="Input Tempat Lahir">
            </div>
            <div class="form-group">
                <label for="">Kontak</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Input Nomor HP">
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
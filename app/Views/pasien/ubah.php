<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Ubah Pasien</h3>
    </div>
    <div class="card-body">
        <form action="<?= base_url() ?>/pasien/update/<?= $pasiens['id']; ?>" method="POST">
            <div class="form-group">
                <label for="">Nomor Kartu Pasien</label>
                <input value="<?= $pasiens['no_pasien']; ?>" type="text" name="no_pasien" class="form-control" placeholder="Input Nomor Kartu Pasien">
            </div>
            <div class="form-group">
                <label for="">Nama Pasien</label>
                <input value="<?= $pasiens['nama_pasien']; ?>" type="text" name="nama_pasien" class="form-control" placeholder="Input Nama Pasien">
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input value="<?= $pasiens['tmpt_lahir']; ?>" type="text" name="tmpt_lahir" class="form-control" placeholder="Input Tempat Lahir">
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input value="<?= $pasiens['tgl_lahir']; ?>" type="date" name="tgl_lahir" class="form-control" placeholder="Input Tempat Lahir">
            </div>
            <div class="form-group">
                <label for="">Kontak</label>
                <input value="<?= $pasiens['no_hp']; ?>" type="text" name="no_hp" class="form-control" placeholder="Input Nomor HP">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="alamat" rows="5" class="form-control"><?= $pasiens['alamat']; ?></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
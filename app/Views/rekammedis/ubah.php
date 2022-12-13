<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Ubah Rekam</h3>
    </div>
    <div class="card-body">
        <form action="<?= base_url() ?>/rekammedis/update/<?= $data['id']; ?>" method="POST">
            <div class="form-group">
                <label for="">Nama Pasin</label>
                <input type="text" name="alamat" value="<?= $pasien['nama_pasien'] ?>" class="form-control" placeholder="Input Alamat">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat" value="<?= $pasien['alamat'] ?>" class="form-control" placeholder="Input Alamat">
            </div>
            <div class="form-group">
                <label for="">Poli</label>
                <select name="poli_id" class="form-control">
                    <option value=""></option>
                    <?php foreach ($polis as $key => $poli) : ?>
                        <option value="<?= $poli['id'] ?>"><?= $poli['nama_poli'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
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
                <label for="">Nama Dokter</label>
                <input type="text" name="nama_dokter" class="form-control" placeholder="Input Nama Dokter">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
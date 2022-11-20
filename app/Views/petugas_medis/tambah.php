<?= $this->extend('Layout') ?>

<?= $this->section('views') ?>
<div class="card">
    <div class="card-header">
        <h3>Tambah Petugas</h3>
    </div>
    <div class="card-body">
        <form action="<?= base_url('petugas_medis/add') ?>" method="POST">
            <div class="form-group">
                <label for="">Nama Petugas</label>
                <input type="text" name="nama" class="form-control" placeholder="Input Nama Petugas">
            </div>
            <div class="form-group">
                <label for="">Jabatan</label>
                <select name="jabatan" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="dokter">Dokter</option>
                    <option value="perawat">Perawat</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
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
                <label for="">Poli</label>
                <select name="id_poli" class="form-control">
                    <option value=""></option>
                    <?php foreach ($polis as $key => $poli) : ?>
                        <option value="<?= $poli['id'] ?>"><?= $poli['nama_poli'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>
    <?= $this->endSection() ?>
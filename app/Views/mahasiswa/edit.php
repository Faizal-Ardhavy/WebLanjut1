<?= $this->extend('template')?>
<?= $this->section('content')?>
<form method="POST" action="/update/<?= $mahasiswa['id'] ?>">
    <div class="row">
        <div class="col-6">
            <div class="form-group mb-3">
                <label for="npm">NPM</label>
                <input type="text" class="form-control" id="npm" name="npm" aria-describedby="npm"
                    value="<?= $mahasiswa["npm"] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $mahasiswa['nama'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $mahasiswa["alamat"] ?>">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi"><?=$deskripsi?></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?= $this->endSection()?>
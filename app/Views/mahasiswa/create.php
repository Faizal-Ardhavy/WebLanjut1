<?= $this->extend('template')?>
<?= $this->section('content')?>

<form method="POST" action="/store">
    <div class="row">
        <div col-6>
            <div class="form-group mb-3">
                <label for="npm">NPM</label>
                <input type="text" class="form-control" id="npm" name="npm" aria-describedby="npm">
            </div>
            <div class="form-group mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="form-group mb-3">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
        </div>
        <div col-6>
            <div class="form-group mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary"><i class = "fa fa-paper-plane"></i>Submit</button>
</form>
<?= $this->endSection()?>
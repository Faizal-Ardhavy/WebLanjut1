<form method="POST" action="/update/<?= $id ?>">
    <div class="form-group mb-3">
        <label for="npm">NPM</label>
        <input type="text" class="form-control" id="npm" name="npm" aria-describedby="npm" value="<?= $npm ?>">
    </div>
    <div class="form-group mb-3">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="<?= $nama ?>">
    </div>
    <div class="form-group mb-3">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $alamat ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
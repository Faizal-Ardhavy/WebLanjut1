<?= $this->extend('template')?>
<?= $this->section('content')?>
<a href="/create" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i></if>Tambah</a>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">NPM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Alamat</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Created_At</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
    $no = 1;
    foreach($mahasiswa as $mhs):
    ?>
        <tr>
            <td scope="row"><?= $no ?></td>
            <td><?= $mhs['npm'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['alamat'] ?></td>
            <td><?= $mhs['deskripsi'] ?></td>
            <td><?= $mhs['created_at'] ?></td>
            <td>
                <div class="d-flex">
                    <a href="/edit/<?= $mhs['id'] ?>" type="button" class="btn btn-warning btn-sm mx-1">Edit</a>
                    <form method="POST" action="/delete/<?= $mhs['id'] ?>">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" name="submit" class="btn btn-danger btn-sm mx-1">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        <?php $no++; endforeach;?>
    </tbody>
</table>
<?= $this->endSection()?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Data Kursus</h5>
            <a href="?page=kursus_add" class="btn btn-primary"><i class="ti ti-plus"></i> Tambah Data</a>

            <hr>
            <table class="table table-hover table-bordered table-striped" style="border: 1px;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori Kursus</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Durasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $query = mysqli_query($konek, "select * from kursus");
                    while ($data = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['kategori'] ?></td>
                            <td><?= $data['judul'] ?></td>
                            <td><?= $data['deskripsi'] ?></td>
                            <td><?= $data['durasi'] ?></td>
                            <td>
                            <a href="?page=kursus_edit&id=<?= $data[0] ?>" class="btn btn-sm btn-warning"><i class="ti ti-edit"></i>Ubah</a>
                            <a href="?page=kursus_delete&id=<?= $data[0] ?>" onclick="return confirm('Yakin ingin menghapus data ini')" class="btn btn-sm btn-danger"><i class="ti ti-trash"></i>Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>  
    </div>
</div>
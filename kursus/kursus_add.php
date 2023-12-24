<?php
if (isset($_POST['simpan'])) { //jika button simpan diklik
    $kategori = $_POST['kategori']; //ambil nilai dari inputan kategori simpan di variabel $kategori
    $judul = $_POST['judul']; //ambil nilai dari inputan kategori simpan di variabel $judul
    $deskripsi = $_POST['deskripsi']; //ambil nilai dari inputan kategori simpan di variabel $deskripsi
    $durasi = $_POST['durasi']; //ambil nilai dari inputan kategori simpan di variabel $durasi
    $exe = mysqli_query($konek, "insert into kursus values(null, '$kategori', '$judul', '$deskripsi', '$durasi' )");
    if ($exe) { //jika berhasil menambahkan data
        echo "<script>alert('Data Kursus berhasil ditambahkan!!!')</script>"; //muncul pesan
        echo "<meta http-equiv='refresh' content='0; url=?page=kursus_read'>"; //mengalihkan halaman
    } else { //jika gagal menambahkan data
        echo "<script>alert('Data kursus gagal ditambahkan!!!')</script>"; //muncul pesan
        echo "<h1>" . mysqli_error($konek) . "</h1>"; //menampilkan isi pesan kesalahan
    }
}
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tambah Data Kursus</h5>
            <form method="post" action="">
            <div class="mb-4">
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kategori kursus</label>
                    <input type="text" name="kategori" required class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul</label>
                    <input type="text" name="judul" required class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" required class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Durasi</label>
                    <input type="text" name="durasi" required class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" name="simpan" class="btn btn-primary"><i class="ti ti-device-floppy"></i> Simpan</button>
                <a href="?page=kategori_read" class="btn btn-danger"><i class="ti ti-arrow-left"></i> Kembali</a>
            </form>
        </div>
    </div>
</div>
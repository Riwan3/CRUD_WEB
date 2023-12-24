<?php
$id = $_GET['id'];
if (isset($id)) { //jika button simpan diklik
    $kategori = $_POST['kategori']; //ambil nilai dari inputan kategori simpan di variabel $kategori
    $judul = $_POST['judul']; //ambil nilai dari inputan kategori simpan di variabel $judul
    $deskripsi = $_POST['deskripsi']; //ambil nilai dari inputan kategori simpan di variabel $deskripsi
    $durasi = $_POST['durasi']; //ambil nilai dari inputan kategori simpan di variabel $durasi
    $exe = mysqli_query($konek, "delete from kursus where id='$id'");
    // muncul pesan
    if ($exe) { //jika berhasil menambahkan data
        echo "<script>alert('Data kursus berhasil dihapus!!!')</script>"; //muncul pesan
        echo "<meta http-equiv='refresh' content='0; url=?page=kursus_read'>"; //mengalihkan halaman
    } else { //jika gagal menambahkan data
        echo "<script>alert('Data kursus gagal dihapus!!!')</script>"; //muncul pesan
        echo "<h1>" . mysqli_error($konek) . "</h1>"; //menampilkan isi pesan kesalahan
    }
}
?>

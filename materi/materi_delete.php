<?php
$id = $_GET['id'];
if (isset($id)) { //jika button simpan diklik
    $judul = $_POST['judul']; //ambil nilai dari inputan materi simpan di variabel $judul
    $deskripsi = $_POST['deskripsi']; //ambil nilai dari inputan materi simpan di variabel $deskripsi
    $link = $_POST['link']; //ambil nilai dari inputan materi simpan di variabel $link
    $exe = mysqli_query($konek, "delete from materi where id='$id'");
    // muncul pesan
    if ($exe) { //jika berhasil menambahkan data
        echo "<script>alert('Data materi berhasil dihapus!!!')</script>"; //muncul pesan
        echo "<meta http-equiv='refresh' content='0; url=?page=materi_read'>"; //mengalihkan halaman
    } else { //jika gagal menambahkan data
        echo "<script>alert('Data materi gagal dihapus!!!')</script>"; //muncul pesan
        echo "<h1>" . mysqli_error($konek) . "</h1>"; //menampilkan isi pesan kesalahan
    }
}
?>

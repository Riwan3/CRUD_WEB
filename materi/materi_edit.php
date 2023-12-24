<?php
$id = $_GET['id'];
if (isset($_POST['simpan'])) { //jika button simpan diklik
    $kategori = $_POST['kategori']; //ambil nilai dari inputan kategori simpan di variabel $kategori
    $judul = $_POST['judul']; //ambil nilai dari inputan materi simpan di variabel $kategori
    $deskripsi = $_POST['deskripsi']; //ambil nilai dari inputan materi simpan di variabel $keterangan
    $link = $_POST['link']; //ambil nilai dari inputan materi simpan di variabel link
    
    $exe = mysqli_query($konek, "update materi set kategori='$kategori', judul='$judul', deskripsi='$deskripsi', link='$link ' where id='$id'");
    if ($exe) { //jika berhasil menambahkan data
        echo "<script>alert('Data materi berhasil diperbaharui!!!')</script>"; //muncul pesan
        echo "<meta http-equiv='refresh' content='0; url=?page=materi_read'>"; //mengalihkan halaman
    } else { //jika gagal menambahkan data
        echo "<script>alert('Data materi gagal diperbaharui!!!')</script>"; //muncul pesan
        echo "<h1>" . mysqli_error($konek) . "</h1>"; //menampilkan isi pesan kesalahan
    }
}
$query = mysqli_query($konek,"select * from materi where id='$id'");
$data = mysqli_fetch_array($query);
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Ubah Data materi</h5>
            <form method="post" action="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kategori Kursus</label>
                <select name="kategori" class="form-control">
                    <?php 
                    $result = mysqli_query($konek,"select kategori from kursus");
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $select = ($_POST['kategori'] == $row['kategori']) ? 'select' :'';
                            echo "<option value='{$row['kategori']}' $select>{$row['kategori']}</option>";
                        }
                    }
                    ?>
                </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul</label>
                    <input type="text" value="<?=$data[2]?>" name="judul" required class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                    <input type="text" value="<?=$data[3]?>" name="deskripsi" required class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Link</label>
                    <input type="text" value="<?=$data[4]?>" name="link" required class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit"  name="simpan" class="btn btn-primary"><i class="ti ti-device-floppy"></i> Simpan</button>
                <a href="?page=kategori_read" class="btn btn-danger"><i class="ti ti-arrow-left"></i> Kembali</a>
            </form>
        </div>
    </div>
</div>
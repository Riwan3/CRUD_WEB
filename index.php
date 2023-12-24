<?php
include "pengaturan/koneksi.php";
include "template/sidebar.php";
include "template/header.php";
$page = $_GET['page'];
switch ($page) {
    case "dashboard";
        include "dashboard/dashboard_view.php";
        break;
    case "kursus_read";
        include "kursus/kursus_read.php";
        break;
    case "kursus_add";
        include "kursus/kursus_add.php";
        break;
    case "kursus_edit";
        include "kursus/kursus_edit.php";
        break;
    case "kursus_delete";
        include "kursus/kursus_delete.php";
        break;
    case "materi_read";
        include "materi/materi_read.php";
        break;
    case "materi_add";
        include "materi/materi_add.php";
        break;
    case "materi_edit";
        include "materi/materi_edit.php";
        break;
    case "materi_delete";
        include "materi/materi_delete.php";
        break;
}

include "template/footer.php";

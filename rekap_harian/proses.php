<?php
require_once "../auth/config/config.php";
require "../assets/libraries/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

// $_POST['add'] as the same as the name button submit on form add.php
if (isset($_POST['add'])) {
    // as the same as name on form in add.php
    $uuid = Uuid::uuid4()->toString();
    $bulan = trim(mysqli_real_escape_string($connect, $_POST['bulan']));
    $nama_barang = trim(mysqli_real_escape_string($connect, $_POST['nama_barang']));
    $masuk = trim(mysqli_real_escape_string($connect, $_POST['masuk']));
    $keluar = trim(mysqli_real_escape_string($connect, $_POST['keluar']));
    $pengurus = trim(mysqli_real_escape_string($connect, $_POST['pengurus']));
    $laba = trim(mysqli_real_escape_string($connect, $_POST['laba']));
    $keterangan = trim(mysqli_real_escape_string($connect, $_POST['keterangan']));
    $paraf = trim(mysqli_real_escape_string($connect, $_POST['paraf']));
    mysqli_query($connect, "INSERT INTO rekap_harian (id_rh, bulan, nama_barang, masuk, keluar, pengurus, laba, keterangan, paraf) VALUES ('$uuid' ,'$bulan', '$nama_barang', '$masuk', '$keluar', '$pengurus', '$laba', '$keterangan','$paraf')") or die(mysqli_error($connect));
    echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])) {
    // as the same as the name on form in edit.php
    $id = $_POST['id'];
    $bulan = trim(mysqli_real_escape_string($connect, $_POST['bulan']));
    $nama_barang = trim(mysqli_real_escape_string($connect, $_POST['nama_barang']));
    $masuk = trim(mysqli_real_escape_string($connect, $_POST['masuk']));
    $keluar = trim(mysqli_real_escape_string($connect, $_POST['keluar']));
    $pengurus = trim(mysqli_real_escape_string($connect, $_POST['pengurus']));
    $laba = trim(mysqli_real_escape_string($connect, $_POST['laba']));
    $keterangan = trim(mysqli_real_escape_string($connect, $_POST['keterangan']));
    $paraf = trim(mysqli_real_escape_string($connect, $_POST['paraf']));
    mysqli_query($connect, "UPDATE rekap_harian SET bulan = '$bulan', nama_barang = '$nama_barang', masuk = '$masuk', keluar = '$keluar', pengurus = '$pengurus', laba = '$laba', keterangan = '$keterangan', paraf = '$paraf' WHERE laba = '$id'") or die(mysqli_error($connect));
    echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['import'])) {
    // $_FILES as the same as the name form input on import.php
    // Upload file
    $file = $_FILES['file']['name'];
    $ekstensi = explode(".", $file);
    // Round microtime is the random file names
    $file_name = "file-" . round(microtime(true)) . "." . end($ekstensi);
    $sumber = $_FILES['file']['tmp_name'];
    $target_dir = "../assets/file/";
    $target_file = $target_dir . $file_name;
    move_uploaded_file($sumber, $target_file);

    // Using PHPOFFICE/PHPEXCEL
    // Read file
    $obj = PHPExcel_IOFactory::load($target_file);
    $all_data = $obj->getActiveSheet()->toArray(null, true, true, true);
    $sql = "INSERT INTO rekap_harian (id_rh, bulan, nama_barang, masuk, keluar, pengurus, laba, keterangan, paraf) VALUES";
    // Looping data
    // The data minimum on excel file is 23 data
    for ($i = 3; $i <= count($all_data); $i++) {
        $uuid = Uuid::uuid4()->toString();
        $bulan = $all_data[$i]['B'];
        $nama_barang = $all_data[$i]['C'];
        $masuk = $all_data[$i]['D'];
        $keluar = $all_data[$i]['E'];
        $pengurus = $all_data[$i]['F'];
        $laba = $all_data[$i]['G'];
        $keterangan = $all_data[$i]['H'];
        $paraf = $all_data[$i]['I'];
        $sql .= "('$uuid', '$bulan', '$nama_barang', '$masuk', '$keluar', '$pengurus', '$laba', '$keterangan', '$paraf'),";
    }
    $sql = substr($sql, 0, -1);
    mysqli_query($connect, $sql) or die(mysqli_error($connect));
    unlink($target_file);
    echo "<script>window.location='data.php';</script>";
}

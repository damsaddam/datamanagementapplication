<?php
require_once "../auth/config/config.php";
require "../assets/libraries/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

// $_POST['add'] as the same as the name button submit on form add.php
if (isset($_POST['add'])) {
    // as the same as name on form in add.php
    $uuid = Uuid::uuid4()->toString();
    $tgl_keluar = trim(mysqli_real_escape_string($connect, $_POST['tgl_keluar']));
    $id_barang = trim(mysqli_real_escape_string($connect, $_POST['id_barang']));
    $nama_barang = trim(mysqli_real_escape_string($connect, $_POST['nama_barang']));
    $merk = trim(mysqli_real_escape_string($connect, $_POST['merk']));
    $no_suratjalan = trim(mysqli_real_escape_string($connect, $_POST['no_suratjalan']));
    $pengirim = trim(mysqli_real_escape_string($connect, $_POST['pengirim']));
    $jumlah = trim(mysqli_real_escape_string($connect, $_POST['jumlah']));
    $sql_cek_idbarang = mysqli_query($connect, "SELECT * FROM barang_keluar WHERE id_barang = '$id_barang'") or die(mysqli_error($connect));
    if (mysqli_num_rows($sql_cek_idbarang) > 0) {
        echo "<script>
                alert('Id barang sudah pernah diinput sebelumnya. Mohon cek kembali dengan teliti.');
                window.location='add.php';
            </script>";
    } else {
        mysqli_query($connect, "INSERT INTO barang_keluar (id_keluar, tgl_keluar, id_barang, nama_barang, merk, no_suratjalan, pengirim, jumlah) VALUES ('$uuid' ,'$tgl_keluar', '$id_barang', '$nama_barang', '$merk', '$no_suratjalan', '$pengirim', '$jumlah')") or die(mysqli_error($connect));
        echo "<script>window.location='data.php';</script>";
    }
} else if (isset($_POST['edit'])) {
    // as the same as the name on form in edit.php
    $id = $_POST['id'];
    $tgl_keluar = trim(mysqli_real_escape_string($connect, $_POST['tgl_keluar']));
    $id_barang = trim(mysqli_real_escape_string($connect, $_POST['id_barang']));
    $nama_barang = trim(mysqli_real_escape_string($connect, $_POST['nama_barang']));
    $merk = trim(mysqli_real_escape_string($connect, $_POST['merk']));
    $no_suratjalan = trim(mysqli_real_escape_string($connect, $_POST['no_suratjalan']));
    $pengirim = trim(mysqli_real_escape_string($connect, $_POST['pengirim']));
    $jumlah = trim(mysqli_real_escape_string($connect, $_POST['jumlah']));
    mysqli_query($connect, "UPDATE barang_keluar SET tgl_keluar = '$tgl_keluar', id_barang = '$id_barang', nama_barang = '$nama_barang', merk = '$merk', no_suratjalan = '$no_suratjalan', pengirim = '$pengirim', jumlah = '$jumlah' WHERE id_barang = '$id'") or die(mysqli_error($connect));
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
    $sql = "INSERT INTO barang_keluar (id_keluar, tgl_keluar, id_barang, nama_barang, merk, no_suratjalan, pengirim, jumlah) VALUES";
    // Looping data
    // The data minimum on excel file is 23 data
    for ($i = 3; $i <= count($all_data); $i++) {
        $uuid = Uuid::uuid4()->toString();
        $tgl_keluar = $all_data[$i]['B'];
        $id_barang = $all_data[$i]['C'];
        $nama_barang = $all_data[$i]['D'];
        $merk = $all_data[$i]['E'];
        $no_suratjalan = $all_data[$i]['F'];
        $pengirim = $all_data[$i]['G'];
        $jumlah = $all_data[$i]['H'];
        $sql .= "('$uuid', '$tgl_keluar', '$id_barang', '$nama_barang', '$merk', '$no_suratjalan', '$pengirim', '$jumlah'),";
    }
    $sql = substr($sql, 0, -1);
    mysqli_query($connect, $sql) or die(mysqli_error($connect));
    unlink($target_file);
    echo "<script>window.location='data.php';</script>";
}

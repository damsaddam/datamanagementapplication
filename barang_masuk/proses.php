<?php
require_once "../auth/config/config.php";
require "../assets/libraries/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

// $_POST['add'] as the same as the name button submit on form add.php
if (isset($_POST['add'])) {
    // as the same as name on form in add.php
    $uuid = Uuid::uuid4()->toString();
    $tgl_masuk = trim(mysqli_real_escape_string($connect, $_POST['tgl_masuk']));
    $id_barang = trim(mysqli_real_escape_string($connect, $_POST['id_barang']));
    $nama_barang = trim(mysqli_real_escape_string($connect, $_POST['nama_barang']));
    $pengirim = trim(mysqli_real_escape_string($connect, $_POST['pengirim']));
    $no_suratjalan = trim(mysqli_real_escape_string($connect, $_POST['no_suratjalan']));
    $jumlah = trim(mysqli_real_escape_string($connect, $_POST['jumlah']));
    $penerima = trim(mysqli_real_escape_string($connect, $_POST['penerima']));
    $sql_cek_idbarang = mysqli_query($connect, "SELECT * FROM barang_masuk WHERE id_barang = '$id_barang'") or die(mysqli_error($connect));
    if (mysqli_num_rows($sql_cek_idbarang) > 0) {
        echo "<script>
                alert('Id barang sudah pernah diinput sebelumnya. Mohon cek kembali dengan teliti.');
                window.location='add.php';
            </script>";
    } else {
        mysqli_query($connect, "INSERT INTO barang_masuk (id_masuk, tgl_masuk, id_barang, nama_barang, pengirim, no_suratjalan, jumlah, penerima) VALUES ('$uuid' ,'$tgl_masuk', '$id_barang', '$nama_barang', '$pengirim', '$no_suratjalan', '$jumlah', '$penerima')") or die(mysqli_error($connect));
        echo "<script>window.location='data.php';</script>";
    }
} else if (isset($_POST['edit'])) {
    // as the same as the name on form in edit.php
    $id = $_POST['id'];
    $tgl_masuk = trim(mysqli_real_escape_string($connect, $_POST['tgl_masuk']));
    $id_barang = trim(mysqli_real_escape_string($connect, $_POST['id_barang']));
    $nama_barang = trim(mysqli_real_escape_string($connect, $_POST['nama_barang']));
    $pengirim = trim(mysqli_real_escape_string($connect, $_POST['pengirim']));
    $no_suratjalan = trim(mysqli_real_escape_string($connect, $_POST['no_suratjalan']));
    $jumlah = trim(mysqli_real_escape_string($connect, $_POST['jumlah']));
    $penerima = trim(mysqli_real_escape_string($connect, $_POST['penerima']));
    mysqli_query($connect, "UPDATE barang_masuk SET tgl_masuk = '$tgl_masuk', id_barang = '$id_barang', nama_barang = '$nama_barang', pengirim = '$pengirim', no_suratjalan = '$no_suratjalan', jumlah = '$jumlah', penerima = '$penerima' WHERE id_barang = '$id'") or die(mysqli_error($connect));
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
    $sql = "INSERT INTO barang_masuk (id_masuk, tgl_masuk, id_barang, nama_barang, pengirim, no_suratjalan, jumlah, penerima) VALUES";
    // Looping data
    // The data minimum on excel file is 23 data
    for ($i = 3; $i <= count($all_data); $i++) {
        $uuid = Uuid::uuid4()->toString();
        $tgl_masuk = $all_data[$i]['B'];
        $id_barang = $all_data[$i]['C'];
        $nama_barang = $all_data[$i]['D'];
        $pengirim = $all_data[$i]['E'];
        $no_suratjalan = $all_data[$i]['F'];
        $jumlah = $all_data[$i]['G'];
        $penerima = $all_data[$i]['H'];
        $sql .= "('$uuid', '$tgl_masuk', '$id_barang', '$nama_barang', '$pengirim', '$no_suratjalan', '$jumlah', '$penerima'),";
    }
    $sql = substr($sql, 0, -1);
    mysqli_query($connect, $sql) or die(mysqli_error($connect));
    unlink($target_file);
    echo "<script>window.location='data.php';</script>";
}

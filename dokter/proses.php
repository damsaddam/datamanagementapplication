<?php
require_once "../auth/config/config.php";
require "../assets/libraries/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

// $_POST['add'] as the same as the name button submit on form add.php
if (isset($_POST['add'])) {
    // as the same as name on form in add.php
    $uuid = Uuid::uuid4()->toString();
    $sip = trim(mysqli_real_escape_string($connect, $_POST['sip']));
    $nama_dokter = trim(mysqli_real_escape_string($connect, $_POST['nama_dokter']));
    $ttl = trim(mysqli_real_escape_string($connect, $_POST['ttl']));
    $jenis_kelamin = trim(mysqli_real_escape_string($connect, $_POST['jenis_kelamin']));
    $alamat = trim(mysqli_real_escape_string($connect, $_POST['alamat']));
    $no_telp = trim(mysqli_real_escape_string($connect, $_POST['no_telp']));
    $spesialis = trim(mysqli_real_escape_string($connect, $_POST['spesialis']));
    $sql_cek_sip = mysqli_query($connect, "SELECT * FROM dokter WHERE sip = '$sip'") or die(mysqli_error($connect));
    if (mysqli_num_rows($sql_cek_sip) > 0) {
        echo "<script>
                alert('SIP sudah pernah diinput. Mohon cek kembali dengan teliti.');
                window.location='add.php';
            </script>";
    } else {
        mysqli_query($connect, "INSERT INTO dokter (id_dokter, sip, nama_dokter, ttl, jenis_kelamin, alamat, no_telp, spesialis) VALUES ('$uuid', '$sip', '$nama_dokter', '$ttl', '$jenis_kelamin', '$alamat', '$no_telp', '$spesialis')") or die(mysqli_error($connect));
        echo "<script>window.location='data.php';</script>";
    }
} else if (isset($_POST['edit'])) {
    // as the same as name on form in edit.php
    $id = $_POST['id'];
    $sip = trim(mysqli_real_escape_string($connect, $_POST['sip']));
    $nama_dokter = trim(mysqli_real_escape_string($connect, $_POST['nama_dokter']));
    $ttl = trim(mysqli_real_escape_string($connect, $_POST['ttl']));
    $jenis_kelamin = trim(mysqli_real_escape_string($connect, $_POST['jenis_kelamin']));
    $alamat = trim(mysqli_real_escape_string($connect, $_POST['alamat']));
    $no_telp = trim(mysqli_real_escape_string($connect, $_POST['no_telp']));
    $spesialis = trim(mysqli_real_escape_string($connect, $_POST['spesialis']));
    mysqli_query($connect, "UPDATE dokter SET sip = '$sip', nama_dokter = '$nama_dokter', ttl = '$ttl', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', no_telp = '$no_telp', spesialis = '$spesialis' WHERE id_dokter = '$id'") or die(mysqli_error($connect));
    echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['import'])) {
    // $_FILES as the same as the name form input on import.php
    $file = $_FILES['file']['name'];
    $ekstensi = explode(".", $file);
    // Round microtime is the random file names
    $file_name = "file-" . round(microtime(true)) . "." . end($ekstensi);
    $sumber = $_FILES['file']['tmp_name'];
    $target_dir = "../assets/file/";
    $target_file = $target_dir . $file_name;
    move_uploaded_file($sumber, $target_file);

    // Using PHPOFFICE/PHPEXCEL
    $obj = PHPExcel_IOFactory::load($target_file);
    $all_data = $obj->getActiveSheet()->toArray(null, true, true, true);
    $sql = "INSERT INTO dokter (id_dokter, sip, nama_dokter, ttl, jenis_kelamin, alamat, no_telp, spesialis) VALUES";
    // Looping data
    // The data minimum on excel file is 23 data
    for ($i = 3; $i <= count($all_data); $i++) {
        $uuid = Uuid::uuid4()->toString();
        $sip = $all_data[$i]['B'];
        $nama_dokter = $all_data[$i]['C'];
        $ttl = $all_data[$i]['D'];
        $jenis_kelamin = $all_data[$i]['E'];
        $alamat = $all_data[$i]['F'];
        $no_telp = $all_data[$i]['G'];
        $spesialis = $all_data[$i]['H'];
        $sql .= "('$uuid', '$sip', '$nama_dokter', '$ttl', '$jenis_kelamin', '$alamat', '$no_telp', '$spesialis'),";
    }
    $sql_cek_sip = mysqli_query($connect, "SELECT * FROM dokter WHERE sip = '$sip'") or die(mysqli_error($connect));
    $sql = substr($sql, 0, -1);
    if (mysqli_num_rows($sql_cek_sip) > 0) {
        echo "<script>
                alert('Terdapat SIP yang sudah pernah diinput. Mohon cek kembali dengan teliti.');
                window.location='import.php';
            </script>";
        // Unlink work for delete file so that these file does not piled up
        unlink($target_file);
    } else {
        mysqli_query($connect, $sql) or die(mysqli_error($connect));
        echo "<script>window.location='data.php';</script>";
        unlink($target_file);
    }
}

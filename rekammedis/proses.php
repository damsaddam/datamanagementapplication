<?php
require_once "../auth/config/config.php";
require "../assets/libraries/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

// $_POST['add'] as the same as the name button submit on form add.php
if (isset($_POST['add'])) {
    // as the same as name on form in add.php
    $uuid = Uuid::uuid4()->toString();
    $tgl_periksa = trim(mysqli_real_escape_string($connect, $_POST['tgl_periksa']));
    $no_rm = trim(mysqli_real_escape_string($connect, $_POST['no_rm']));
    $id_pasien = trim(mysqli_real_escape_string($connect, $_POST['id_pasien']));
    $id_dokter = trim(mysqli_real_escape_string($connect, $_POST['id_dokter']));
    $jenis_patologi = trim(mysqli_real_escape_string($connect, $_POST['jenis_patologi']));
    $diagnosis = trim(mysqli_real_escape_string($connect, $_POST['diagnosis']));
    $hasil_pembayaran = trim(mysqli_real_escape_string($connect, $_POST['hasil_pembayaran']));
    mysqli_query($connect, "INSERT INTO rekam_medis (id_rm, tgl_periksa, no_rm, id_pasien, id_dokter, jenis_patologi, diagnosis, hasil_pembayaran) VALUES ('$uuid', '$tgl_periksa', '$no_rm', '$id_pasien', '$id_dokter', '$jenis_patologi', '$diagnosis', '$hasil_pembayaran')") or die(mysqli_error($connect));
    echo "<script>window.location='data.php';</script>";
}

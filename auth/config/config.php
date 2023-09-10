<?php
// To setting default time zone
date_default_timezone_set('Asia/Jakarta');
// To secure the access information from the user that matches their session id.
session_start();

// The procedural version to connect to a database.
// Echo to display the text.
$connect = mysqli_connect('localhost', 'root', '', 'datamanagementapplication');
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}

// A base url function
function base_url($url = null)
{
    $base_url = 'http://localhost/datamanagementapplication';
    if ($url != null) {
        return $base_url . '/' . $url;
    } else {
        return $base_url;
    }
}

function tgl_indo($tgl)
{
    $tanggal = substr($tgl, 8, 2);
    $bulan = substr($tgl, 5, 2);
    $tahun = substr($tgl, 0, 4);
    return $tanggal . "/" . $bulan . "/" . $tahun;
}

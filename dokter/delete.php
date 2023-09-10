<?php
require_once "../auth/config/config.php";

mysqli_query($connect, "DELETE FROM dokter WHERE id_dokter = '$_GET[id]'") or die(mysqli_error($connect));
echo "<script>window.location='data.php';</script>";

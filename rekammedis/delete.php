<?php
require_once "../auth/config/config.php";

mysqli_query($connect, "DELETE FROM rekam_medis WHERE id_rm = '$_GET[id]'") or die(mysqli_error($connect));
echo "<script>window.location='data.php';</script>";

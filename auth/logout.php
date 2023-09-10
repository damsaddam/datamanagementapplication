<!-- Include config -->
<?php
require_once '../auth/config/config.php';

// Delete a user session
unset($_SESSION['user']);
echo "<script>window.location='" . base_url('auth/login.php') . "';</script>";
?>
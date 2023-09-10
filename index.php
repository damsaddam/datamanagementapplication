<!-- Include config -->
<?php
require_once 'auth/config/config.php';

// Redirect to dashboard (main page)
if (isset($_SESSION['user'])) {
    echo "<script>window.location='" . base_url('dashboard') . "';</script>";
} else {
    echo "<script>window.location='" . base_url('auth/login.php') . "';</script>";
}
?>
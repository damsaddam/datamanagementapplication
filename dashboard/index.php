<?php include_once('../_header.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agdasima&family=Edu+SA+Beginner:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agdasima&family=Edu+SA+Beginner:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>OPNAME AMSKY APP</title>
    <style>
        body {
            background: #000428;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #004e92, #000428);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #004e92, #000428);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: rgb(255, 255, 255);
        }

        .brand {
            text-align: center;
            font-family: 'Agdasima', sans-serif;
            font-weight: bold;
            letter-spacing: 5px;
            margin: 0;
            padding: 0;
        }

        .fullscreen {
            display: flex;
            justify-content: flex-start;
            width: 19px;
            transition: transform 0.5s;
        }

        .fullscreen:hover {
            transform: scale(1.2);
        }

        .fullscreen i {
            font-size: 19px;
            color: white;
        }

        .content {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 17px;
            text-align: justify;
            margin-top: 20px;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        .scroll-menu {
            display: flex;
            justify-content: flex-start;
            margin: 0;
            padding: 0;
        }

        .scroll {
            width: 28px;
            height: 28px;
            cursor: pointer;
            border-radius: 50%;
            transition: transform 0.5s;
            background: black url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;
        }

        .scroll:hover {
            transform: scale(1.2)
        }
    </style>
</head>

<body>
    <div class="row header">
        <div class="col-12">
            <div class="fullscreen">
                <a href="#menu-toggle" id="menu-toggle" data-toggle="tooltip" data-placement="right" title="Fullscreen"><i class="bi bi-arrows-fullscreen"></i></i></a>
            </div>
            <h1 class="brand">DASHBOARD</h1>
        </div>
    </div>
    <div class="row content">
        <div class="col-12">
            <p>Selamat datang <b> <?= $_SESSION['user']; ?> </b>di OPNAME AMSKY APP. Mohon isi data dengan teliti, lakukan double check, agar menghindari kesalahan dalam memasukkan data. Bila sudah selesai menggunakan aplikasi, mohon <b>logout</b> terlebih dahulu, untuk menghindari pihak yang tidak bertanggung jawab mengakses aplikasi ini atau hal yang tidak diinginkan terjadi. Terimakasih. Semoga harimu menyenangkan!</p>
        </div>
        <div class="scroll-menu">
            <a href="#" class="scroll" data-toggle="tooltip" data-placement="right" title="Back to the top"></a>
        </div>
    </div>
    <script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

    <!-- Tooltip -->
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <!-- Fullscreen Toggle -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>

</html>

<?php include_once('../_footer.php') ?>
<?php include_once('../_header.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Agdasima&family=Edu+SA+Beginner:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

    <title>TAMBAH DATA BARANG MASUK</title>
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
            display: flex;
            justify-content: center;
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
            font-size: 18px;
            margin-top: 0;
            padding: 0;
        }

        .back {
            display: flex;
            justify-content: end;
            margin-bottom: 4px;
        }

        .back button {
            border-radius: 8px;
            padding: 5px 10px;
            background: none;
        }

        .back button:hover {
            background: black;
        }

        .back a i {
            padding: 0;
            font-size: 26px;
            color: white;
        }

        form .form-group label {
            letter-spacing: 2px;
        }

        form .form-group input {
            background-color: black;
            color: white;
            font-size: 16px;
        }

        form input[type="date"]::-webkit-calendar-picker-indicator {
            display: block;
            background: url(https://mywildalberta.ca/images/GFX-MWA-Parks-Reservations.png) no-repeat;
            width: 20px;
            height: 14px;
            cursor: pointer;
        }

        form .form-group textarea {
            background-color: black;
            color: white;
            font-size: 16px;
        }

        .save {
            display: flex;
            justify-content: center;
        }

        .save button {
            border-radius: 8px;
            padding: 5px 10px;
            background: none;
        }

        .save button:hover {
            background: black;
        }

        .save i {
            font-size: 26px;
            color: white;
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
            <h1 class="brand">TAMBAH DATA BARANG MASUK</h1>
        </div>
    </div>
    <div class="row content">
        <div class="col-12">
            <div class="back">
                <button data-toggle="tooltip" data-placement="left" title="Klik untuk kembali ke data barang masuk"><a href="data.php"><i class="bi bi-arrow-90deg-left"></i></a></button>
            </div>
            <div class="col-lg-8 col-lg-offset-2">
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="tgl_masuk">Tgl. Masuk</label>
                        <input type="date" name="tgl_masuk" id="tgl_masuk" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="id_barang">ID Barang</label>
                        <input type="text" name="id_barang" id="id_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="pengirim">Pengirim/Merk</label>
                        <input type="text" name="pengirim" id="pengirim" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="no_suratjalan">No. Surat Jalan</label>
                        <input type="text" name="no_suratjalan" id="no_suratjalan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" name="jumlah" id="jumlah" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="penerima">Penerima</label>
                        <input type="text" name="penerima" id="penerima" class="form-control" required>
                    </div>
                    <div class="save">
                        <!-- name as the same as (isset($_POST['add'])) -->
                        <button type="submit" name="add" data-toggle="tooltip" data-placement="right" title="Klik untuk simpan data"><i class="bi bi-save-fill"></i></button>
                    </div>
                </form>
                <div class="scroll-menu">
                    <a href="#" class="scroll" data-toggle="tooltip" data-placement="right" title="Back to the top"></a>
                </div>
            </div>
        </div>
    </div>

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
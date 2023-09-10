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

    <title>IMPORT DATA PASIEN</title>
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

        .regulator {
            display: flex;
            justify-content: end;
            margin-bottom: 4px;
        }

        .regulator .download {
            margin-right: 5px;
        }

        .regulator button {
            border-radius: 8px;
            padding: 5px 10px;
            background: none;
        }

        .regulator button:hover {
            background: black;
        }

        .regulator a i {
            padding: 0;
            font-size: 26px;
            color: white;
        }

        form .form-group label {
            letter-spacing: 2px;
        }

        form .form-group input {
            color: white;
            background-color: black;
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

        code {
            text-align: justify;
            color: white;
            background-color: rgb(255, 0, 0);
        }
    </style>
</head>

<body>
    <div class="row header">
        <div class="col-12">
            <div class="fullscreen">
                <a href="#menu-toggle" id="menu-toggle" data-toggle="tooltip" data-placement="right" title="Fullscreen"><i class="bi bi-arrows-fullscreen"></i></i></a>
            </div>
            <h1 class="brand">IMPORT DATA PASIEN</h1>
        </div>
    </div>
    <div class="row content">
        <div class="col-12">
            <div class="regulator">
                <button class="download" data-toggle="tooltip" data-placement="top" title="Download template file excel data pasien"><a href="../assets/file/template/DATA PASIEN KLINIK PRIMA UTAMA MEDIKA.xlsx"><i class="bi bi-file-earmark-arrow-down-fill"></i></a></button>
                <button class="back" data-toggle="tooltip" data-placement="top" title="Klik untuk kembali ke data pasien"><a href="data.php"><i class="bi bi-arrow-90deg-left"></i></a></button>
            </div>
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file">Pilih File Excel</label>
                        <!-- Input file name as the same as the $_FILES on proses.php -->
                        <input type="file" name="file" id="file" class="form-control" required>
                    </div>
                    <div class="save">
                        <!-- name as the same as (isset($_POST['import'])) -->
                        <button type="submit" name="import" data-toggle="tooltip" data-placement="right" title="Klik untuk import file excel"><i class="bi bi-file-excel-fill"></i></button>
                    </div>
                    <code>
                        <h4>Note: data yang diimport hanya file excel (.xlsx) dan data di dalamnya harus berisi minimal 23 data. Terimakasih.</h4>
                    </code>
                </form>
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
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

    <!-- Select2 - JQuery -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>TAMBAH REKAM MEDIS</title>
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

        .select2-container .select2-selection--single {
            background-color: black;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: rgb(0, 255, 255) transparent transparent transparent;
        }

        .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
            border-color: transparent transparent rgb(0, 255, 255) transparent;
        }


        .select2-container--default .select2-selection--single .select2-selection__rendered,
        .select2-dropdown {
            color: white;
            font-family: 'Roboto Condensed', sans-serif;
        }

        .select2-dropdown {
            background-color: black;
            font-family: 'Roboto Condensed', sans-serif;
            color: white;
            font-size: 15.5px;
        }

        input.select2-search__field {
            background-color: black;
            color: white;
        }

        .select2-results .select2-results__options .select2-results__option--selectable {
            background-color: black;
            color: white;
        }

        .select2-results .select2-results__options .select2-results__option--selectable:hover {
            background: #000428;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #004e92, #000428);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #004e92, #000428);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: rgb(255, 255, 255);
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
            <h1 class="brand">TAMBAH REKAM MEDIS</h1>
        </div>
    </div>
    <div class="row content">
        <div class="col-12">
            <div class="back">
                <button data-toggle="tooltip" data-placement="left" title="Klik untuk kembali ke data rekam medis"><a href="data.php"><i class="bi bi-arrow-90deg-left"></i></a></button>
            </div>
            <div class="col-lg-8 col-lg-offset-2">
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="tgl_periksa">Tgl Periksa</label>
                        <input type="date" name="tgl_periksa" min="2023-01-01" id="tgl_periksa" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="no_rm">No. RM</label><br>
                        <select class="js-example-basic-single form-control" id="no_rm" name="no_rm" required>
                            <option value="">Pilih No. RM</option>
                            <?php
                            $sql_no_rm = mysqli_query($connect, "SELECT * FROM pasien ORDER BY no_rm ASC") or die(mysqli_error($connect));
                            while ($data_no_rm = mysqli_fetch_array($sql_no_rm)) {
                                echo '<option value="' . $data_no_rm['no_rm'] . '">' . $data_no_rm['no_rm'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_pasien">Pasien</label><br>
                        <select class="js-example-basic-single form-control" id="id_pasien" name="id_pasien" required>
                            <option value="">Pilih Pasien</option>
                            <?php
                            $sql_pasien = mysqli_query($connect, "SELECT * FROM pasien ORDER BY nama_pasien") or die(mysqli_error($connect));
                            while ($data_pasien = mysqli_fetch_array($sql_pasien)) {
                                echo '<option value="' . $data_pasien['id_pasien'] . '">' . $data_pasien['nama_pasien'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_dokter">Dokter</label><br>
                        <select class="js-example-basic-single form-control" id="id_dokter" name="id_dokter" required>
                            <option value="">Pilih Dokter</option>
                            <?php
                            $sql_dokter = mysqli_query($connect, "SELECT * FROM dokter ORDER BY nama_dokter ASC") or die(mysqli_error($connect));
                            while ($data_dokter = mysqli_fetch_array($sql_dokter)) {
                                echo '<option value="' . $data_dokter['id_dokter'] . '">' . $data_dokter['nama_dokter'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenis_patologi">Jenis Patologi</label>
                        <textarea name="jenis_patologi" id="jenis_patologi" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="diagnosis">Diagnosis Klinik</label>
                        <textarea name="diagnosis" id="diagnosis" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="hasil_pembayaran">Hasil Pembayaran (Rp)</label>
                        <input type="text" name="hasil_pembayaran" id="hasil_pembayaran" class="form-control" required>
                    </div>
                    <div class="save">
                        <!-- name as the same as (isset($_POST['add'])) -->
                        <button type="submit" name="add" data-toggle="tooltip" data-placement="right" title="Klik untuk menambahkan data rekam medis"><i class="bi bi-save-fill"></i></button>
                    </div>
                </form>
                <div class="scroll-menu">
                    <a href="#" class="scroll" data-toggle="tooltip" data-placement="right" title="Back to the top"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- CKEditor -->
    <script>
        // Replace the <textarea id=""> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace('jenis_patologi', {
            uiColor: '#9CFF2E'
        });
        CKEDITOR.replace('diagnosis', {
            uiColor: '#9CFF2E'
        });
    </script>
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

    <!-- Select2 - JQuery -->
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>

<?php include_once('../_footer.php') ?>
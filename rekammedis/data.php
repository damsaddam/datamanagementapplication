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

    <title>DATA REKAM MEDIS</title>
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
            margin-top: 0;
            padding: 0;
        }

        .content .right {
            position: absolute;
            right: 4px;
            top: 115px;
            z-index: 1;
        }

        .content .right .add {
            color: white;
            border: 0px;
            font-size: 17px;
            padding: 4px 18px 4px 18px;
            margin-right: 5px;
            background: #005C97;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #363795, #005C97);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #363795, #005C97);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        .content .right .add i {
            padding: 0 3px 0 0;
        }

        .content .right .add:hover {
            color: rgb(0, 255, 255);
        }

        table * {
            background-color: black;
            color: white;
            text-align: justify;
            font-size: 16px;
        }

        table thead * {
            text-align: start;
            color: rgb(0, 255, 255);
        }


        .table tr .center {
            display: flex;
            justify-content: center;
            padding-right: 0;
        }

        table tr .center #edit,
        table tr .center #delete {
            color: white;
        }

        table tr .center #edit i:hover {
            color: rgb(0, 255, 0);
        }

        table tr .center #delete i:hover {
            color: rgb(255, 0, 0);
        }

        #myTable_filter {
            flex: 50%;
            margin: 0;
            font-size: 15px;
        }

        #myTable_filter input {
            background-color: black;
            color: rgb(0, 255, 255);
            width: 171px;
            font-size: 15px;
            border: 1px solid rgb(0, 255, 255);
        }

        .dt-buttons,
        #myTable_filter {
            display: flex;
            flex-wrap: wrap;
        }

        .dt-buttons {
            flex: 50%;
            margin: 0 0 5px 0;
        }

        .dt-buttons button {
            font-size: 16.5px;
            background-color: black;
            color: rgb(0, 255, 255);
            border: 1px solid rgb(0, 255, 255);
        }

        .dt-buttons button:hover {
            color: white;
        }

        .dataTables_paginate ul li * {
            background-color: black;
            color: rgb(0, 255, 255);
            border: 0;
        }

        .dataTables_paginate ul li#myTable_previous a,
        .dataTables_paginate ul li#myTable_next a {
            color: rgb(0, 255, 255);
            background-color: black;
        }

        .dataTables_paginate ul li.active a {
            background-color: rgb(0, 255, 255);
            color: black;
        }

        .dataTables_paginate ul li.active a:hover {
            background-color: rgb(0, 255, 255);
            color: black;
        }

        .dataTables_paginate ul li.active:active * {
            background-color: rgb(0, 255, 255);
            color: black;
        }

        .dataTables_info {
            font-size: 15px;
            font-family: 'Roboto Condensed', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        .scroll-menu {
            display: flex;
            justify-content: flex-start;
            margin: 22px 0 0 0;
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

        .all-data {
            float: left;
            padding: 0;
            margin: 0;
            font-size: 15px;
            font-family: 'Roboto Condensed', sans-serif;
        }
    </style>
</head>

<body>
    <div class="row header">
        <div class="col-12">
            <div class="fullscreen">
                <a href="#menu-toggle" id="menu-toggle" data-toggle="tooltip" data-placement="right" title="Fullscreen"><i class="bi bi-arrows-fullscreen"></i></i></a>
            </div>
            <h1 class="brand">DATA REKAM MEDIS</h1>
        </div>
    </div>
    <div class="row content">
        <div class="col-12">
            <div class="right">
                <a href="add.php" class="btn add" data-toggle="tooltip" data-placement="top" title="Klik untuk menambahkan data rekam medis"><i class="bi bi-file-earmark-plus-fill"></i>Add</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tgl Periksa</th>
                            <th>No. RM</th>
                            <th>Pasien</th>
                            <th>Dokter</th>
                            <th>Keluhan</th>
                            <th>Diagnosis</th>
                            <th>Tindakan</th>
                            <th>Hasil Pembayaran (Rp)</th>
                            <th><i class="bi bi-gear-wide-connected"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $batas = 100;
                        $hal = @$_GET['hal'];
                        if (empty($hal)) {
                            $posisi = 0;
                            $hal = 1;
                        } else {
                            $posisi = ($hal - 1) * $batas;
                        }
                        $no = 1;
                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            $pencarian = trim(mysqli_real_escape_string($connect, $_POST['pencarian']));
                            if ($pencarian != '') {
                                $sql = "SELECT * FROM rekam_medis";
                                $query = $sql;
                                $queryJml = $sql;
                            } else {
                                $query = "SELECT * FROM rekam_medis $posisi, $batas";
                                $queryJml = "SELECT * FROM rekam_medis";
                                $no = $posisi + 1;
                            }
                        } else {
                            $query = "SELECT * FROM rekam_medis LIMIT $posisi, $batas";
                            $queryJml = "SELECT * FROM rekam_medis";
                            $no = $posisi + 1;
                        }
                        $query = "SELECT * FROM rekam_medis INNER JOIN pasien ON rekam_medis.id_pasien = pasien.id_pasien INNER JOIN dokter ON rekam_medis.id_dokter = dokter.id_dokter ORDER BY tgl_periksa, nama_pasien ASC";
                        // Select the database use mysqli_query() and if this has an error it will display use or die(mysqli_error())
                        $sql_rekam_medis = mysqli_query($connect, $query) or die(mysqli_error($connect));
                        if (mysqli_num_rows($sql_rekam_medis) > 0) {
                            while ($data = mysqli_fetch_array($sql_rekam_medis)) { ?>
                                <tr>
                                    <!-- Customize with the name in database (phpmyadmin) -->
                                    <td><?= $no++ ?>.</td>
                                    <td><?= tgl_indo($data['tgl_periksa']); ?></td>
                                    <td><?= $data['no_rm']; ?></td>
                                    <td><?= $data['nama_pasien']; ?></td>
                                    <td><?= $data['nama_dokter']; ?></td>
                                    <td><?= $data['keluhan']; ?></td>
                                    <td><?= $data['diagnosis']; ?></td>
                                    <td><?= $data['tindakan']; ?></td>
                                    <td><?= $data['hasil_pembayaran']; ?></td>
                                    <td class="center">
                                        <a href="delete.php?id=<?= $data['id_rm'] ?>" id="delete" data-toggle="tooltip" data-placement="top" title="Klik untuk delete data" onclick="return confirm('Apakah anda yakin ingin delete data ini?')"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
            if (@$_POST['pencarian'] == '') { ?>
                <div class="all-data" style="font-weight: bold;">
                    <?php
                    $jml = mysqli_num_rows(mysqli_query($connect, $queryJml));
                    echo "Total data: $jml";
                    ?>
                </div>
                <div style="float: right; margin: 0; padding: 0;">
                    <ul class="pagination pagination-sm" style="padding: 0; margin: 0; font-family: 'Roboto Condensed', sans-serif; font-weight: bold;">
                        <?php
                        $jml_hal = ceil($jml / $batas);
                        for ($i = 1; $i <= $jml_hal; $i++) {
                            if ($i != $hal) {
                                echo "<li><a href=\"?hal=$i\">$i</a></li>";
                            } else {
                                echo "<li class=\"active\"><a>$i</a></li>";
                            }
                        }
                        ?>
                    </ul>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="scroll-menu">
            <a href="#" class="scroll" data-toggle="tooltip" data-placement="right" title="Back to the top"></a>
        </div>
    </div>

    <!-- Tooltip and Data Tables -->
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
            // Data Table Configuration
            $('#myTable').DataTable({
                "paginate": false,
                "info": false,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'pdf',
                        title: 'REKAM MEDIS KLINIK PRIMA UTAMA MEDIKA',
                        download: 'open',
                        orientation: 'portrait'
                    },
                    {
                        extend: 'excel',
                        title: 'REKAM MEDIS KLINIK PRIMA UTAMA MEDIKA'
                    },
                    {
                        extend: 'print',
                        title: 'REKAM MEDIS KLINIK PRIMA UTAMA MEDIKA'
                    },
                    'copy'
                ]
            });

        });
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
<!-- Include config -->
<?php
require_once '../auth/config/config.php';
// Redirect to index.php (main page)
if (isset($_SESSION['user'])) {
    echo "<script>window.location='" . base_url() . "';</script>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN - OPNAME AMSKY APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Agdasima&family=Edu+SA+Beginner:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/img/gudang.png">
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

        .login-logo h1 {
            font-family: 'Barlow', sans-serif;
            font-weight: bold;
            color: white;
            font-size: 40px;
            margin-top: 2%;
            border-right: 2px solid whitesmoke;
            width: 30.5%;
            white-space: nowrap;
            overflow: hidden;
            letter-spacing: 1px;
            animation: typing 2s,
                cursor .4s step-end infinite alternate;
        }

        /* cursor blinking */
        @keyframes cursor {
            50% {
                border-color: transparent;
            }
        }

        /* typing effect */
        @keyframes typing {
            from {
                width: 0;
            }
        }

        form * {
            color: white;
        }

        .form-label {
            font-family: 'Agdasima', sans-serif;
            font-size: 30px;
            letter-spacing: 2px;
        }

        .login {
            display: flex;
            justify-content: center;
        }

        #submit {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 19px;
            font-weight: bold;
            padding: 2px 25px 2px 25px;
            background-color: whitesmoke;
            color: black;
        }

        #submit:hover {
            background-color: rgb(207, 207, 207);
        }

        .alert {
            background-color: #ea868f;
            color: #2c0b0e;
            border: 1px solid #ea868f;
        }

        .header-alert {
            font-weight: bold;
            font-size: 15px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin: 0;
        }

        i {
            margin-right: 10px;
            font-size: 16px;
        }

        .body-alert {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            text-align: justify;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="login-logo d-flex justify-content-center align-items-center">
            <h1><b>OPNAME AMSKY APP</b></h1>
        </div>
        <div class="content d-flex justify-content-center align-items-center">
            <div class="col-4">
                <img src="../assets/img/loginimage.png" class="img-fluid" alt="A doctor does a checking">
            </div>
            <div class="col-4">
                <!-- $_POST['login'], $user, and $pass must be the same as the input name on form-->
                <!-- Connect to a database -->
                <?php
                if (isset($_POST['login'])) {
                    $user = trim(mysqli_real_escape_string($connect, $_POST['user']));
                    // sha1 the same as the name of database function
                    $pass = sha1(trim(mysqli_real_escape_string($connect, $_POST['pass'])));
                    // select from user the same as the database name and username or password the same as the database column. mysqli_error serve as tracking error
                    $sql_login = mysqli_query($connect, "SELECT * FROM user WHERE username = '$user' AND password = '$pass'") or die(mysqli_error($connect));
                    if (mysqli_num_rows($sql_login) > 0) {
                        $_SESSION['user'] = $user;
                        echo "<script>window.location='" . base_url() . "';</script>";
                    } else { ?>
                        <div class="alert alert-dismissible fade show" role="alert">
                            <p class="header-alert"><i class="bi bi-exclamation-triangle-fill"></i>LOGIN GAGAL</p>
                            <p class="body-alert">Username/password yang anda masukkan salah. Silahkan coba lagi.</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                <?php
                    }
                }
                ?>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="user" class="form-label">Username</label>
                        <input type="text" class="form-control" id="user" name="user" placeholder="Type your username" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Type your password" required>
                    </div>
                    <div class="login">
                        <button type="submit" id="submit" name="login" class="btn">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>
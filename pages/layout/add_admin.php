<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthCare</title>
    <link rel="stylesheet" type="text/css" href="../../css/stylelogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="login">
        <p class= "headlogin"><img src="../../img/logo.png" style="float:left;"><h1 class="tulisanr"> Healthcare </p> 
        <form method="POST" action="">
            <center>
                <br>
                <br>
                <h1>Daftar</h1>
                <!-- <p class="garisatas">Lorem ipsum lorem</p> -->
                <br>
                <input type="text" placeholder="masukkan email anda" name="email">
                <input type="password" placeholder="masukkan password anda" name="password">
                <input type="password" placeholder="ulangi password anda" name="password2">
                <br>
                <br>
                <a> <button name="btn">Daftar</button></a>
                <br>
                <h5> Sudah memiliki akun? <a class="lain" href="login.php">Login </a></h5>
        </form>
        </center>
    </div>
    <div class="right">
        <img src="../../img/logoWhite.png" style="text-align: center;">
        <br>
        <h1>HealthCare</h1>
    </div>
    </div>
</body>

</html>

<style type="text/css">
    * {
        padding: 0px;
        margin: 0px;
        margin-top: 0px;
    }
    .garisatas{
        text-align: left;
        font-size: 12px;
        font-family: monsterat;
        margin: 5px;
    }
    .login {
        width: 83%;
        height: 580px;
    }

    button {
        color: white;

    }

    input {
        font-family: sans-serif;
        font-size: 15px;
        width: 350px;
        height: 40px;
    }

    button {
        width: 350px;
        height: 40px;
        font-family: sans-serif;
    }
    .headlogin{
    height: 60px;
    width: 100px;
    margin-left: 40px;
    margin-top: 40px;
    }
    .tulisanr {
         font-family: sans-serif;
        font-size: 25px;
        margin-left:120px;
        max-width: 300px;
        max-height: 40px;
        margin-top: -60px;
        margin-bottom:400px;
    }
    form {
        margin-left: 80px;
        margin-top: 30px;


    }

    .lain {
        color: #078A73;
    }
    .right{
    display: grid;
    background-color: #00B98E;
    margin-left: 670px ;
    max-height: 750px;
    margin-top: -700px;
}
    .right img{

    width: 330px;
    height: 180px;
    margin-left: 200px;
    margin-top: 290px;
    margin: center;
    }
.right h1{
    font-size: 40px;
    font-weight: bold;
    margin-left: 40px;
    font-family: sans-serif;

     color: #078A73;
     text-align: center;
     margin-top: 280px;
 }
 @media screen and (max-width: 922px) {
    .right.login {
        width:100%;
    }
 }
</style>
<?php
include('core/koneksi.php');
error_reporting(0);
// cek validasi email
if (isset($_POST['btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password == $password2) {
        $sql = "SELECT * FROM login_admin WHERE email='$email'";
        $result = mysqli_query($koneksi, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
            $result = mysqli_query($koneksi, $sql);
            if ($result) {
                echo "<script>alert('registrasi berhasil!')
                window.location.href = 'login.php'
                </script>";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
?>
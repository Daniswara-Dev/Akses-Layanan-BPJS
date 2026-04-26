<?php
include 'koneksi.php';

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' OR email='$email'");

    if (mysqli_num_rows($cek) > 0) {
        echo "Username atau email sudah digunakan!";
    } else {

        $hash = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$hash')");

        echo "Register berhasil!";
    }
}
?>
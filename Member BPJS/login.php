<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    $data = mysqli_fetch_assoc($query);

    if ($data) {

        if (password_verify($password, $data['password'])) {

            $_SESSION['username'] = $data['username'];

            // redirect biar ga stuck
            header("Location: index.php");
            exit;

        } else {
            echo "Password salah!";
        }

    } else {
        echo "Username tidak ditemukan!";
    }
}
?>
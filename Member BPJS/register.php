<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($cek) > 0) {
        echo "Username sudah dipakai!";
    } else {
        mysqli_query($conn, "INSERT INTO users (username, email, password) 
        VALUES ('$username', '$email', '$password')");

        header("Location: index.php?status=register_sukses");
        exit;
    }
}
?>
<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE username = '$username' and password = '$password'");
    $cek = mysqli_num_rows($sql);
    
    if($cek > 0){
        $data = mysqli_fetch_assoc($sql);
            $_SESSION['username']=$data['username'];
            $_SESSION['password']=$data['password'];
            header("Location:halamanberbeda.php");
    }else{
        $_SESSION['gagal_login_Maaf']="Maaf!";
        $_SESSION['gagal_login']="username dan password salah";
        header("Location:v_login.php");
    }
}




















?>
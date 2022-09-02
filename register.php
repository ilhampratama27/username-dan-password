<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password']);
$nama = $_POST['nama'];

$sql = "INSERT INTO pendaftaran (username,password,nama) VALUES ('$username','$password','$nama')";

$hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    header("Location:v_login.php");
  }
else {
	echo "Gagal insert data";
	exit;
}  

?>
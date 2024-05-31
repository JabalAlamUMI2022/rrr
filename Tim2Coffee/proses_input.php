<?php
include "koneksi.php";
   $nama = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
   $username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
   $level = (isset($_POST['level'])) ? htmlentities($_POST['level']) : "";
   $nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";
   $password = (isset($_POST['password'])) ? htmlentities($_POST['password']) : "";

   if(!empty($_POST['submit_usn_valid'])){
    $query = mysqli_query($conn, "INSERT INTO tb_user (nama, username, level, noHp, password) 
    values ('$nama', '$username', '$level','$nohp', '$password')");
    if(!$query){
        $message = '<script>alert("Data Gagal Dimasukkan")</script>';
    } else{
        $message = '<script>alert("Data Berhasil Dimasukkan")
        </script>';
    }
   } echo $message;
?>
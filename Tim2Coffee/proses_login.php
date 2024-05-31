<?php
   include "koneksi.php";
   session_start();

   $username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
   $password = (isset($_POST['password'])) ? htmlentities($_POST['password']) : "";
   if (!empty ($_POST['submit_validate'])) {
      $query = mysqli_query($conn,"SELECT * FROM tb_user WHERE username = '$username' && password = '$password'");
      $hasil = mysqli_fetch_array($query);
      if ($hasil) {
         $_SESSION["username"] = $username;
         header('Location: index.php');
         exit();
      } else {
         echo "Username dan Password Salah";
      }
   }
?>
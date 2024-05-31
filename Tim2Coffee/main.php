<?php
//session_start();
if(empty ($_SESSION['username'])){
  header('location:login');
}
include "koneksi.php";
$query = mysqli_query($conn,"SELECT * FROM tb_user WHERE 
username = '$_SESSION[username]'");
      $hasil = mysqli_fetch_array($query);
echo $hasil['username'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tim2Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body style="height: 3000px;">
  <!-- header -->
    <?php include "header.php";?>
  <!-- end header -->
    <div class="container-lg">
      <div class="row">
        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>
        <!-- End Sidebar -->

        <!-- Content -->
        <?php 
          include $page;
        ?>
        <!-- End Content -->
      </div>
      <div class="fixed-bottom text-center mb-2">
        Copyright 2024
      </div>
    </div>

    <script src="https://cdn.0jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>
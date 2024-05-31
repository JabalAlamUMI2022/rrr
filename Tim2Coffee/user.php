<?php
include "koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM tb_user");
while ($record = mysqli_fetch_array($query)){
  $result[] = $record;
}
?>
<div class="col-lg-9 mt-2">
  <div class="card">
    <div class="card-header">
      Halaman User
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col d-flex justify-content-end">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModaltambahUser">Tambah User</button>
        </div>
      </div>

      <!-- Modal Tambah User Baru-->
<div class="modal fade" id="ModaltambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="colom">
        <form class="needs-validation" novalidate action="proses_input.php" method="POST">
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="Masukkan nama anda" name="nama" 
  required> <label for="floatingInput">Nama</label>
  <div class="invalid-feedback">
                    Masukkan Nama
            </div>
</div>
</div>
<div class="col">
      <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="username" name="username" required>
  <label for="floatingInput">Username</label>
  <div class="invalid-feedback">
                    Masukkan Username
            </div>
</div>
</div>
</div>
<div class="form-floating mb-3">
<select class="form-select" aria-label="Default select example" name="level" required>
  <option selected hidden value="0">Pilih Level User</option>
  <option value="1">Pemilik</option>
  <option value="2">Kasir</option>
  <option value="3">Pelayan</option>
  <option value="4">Chef</option>
</select>
<label for="floatingInput">Level User </label>
<div class="invalid-feedback">
    Pilih Level
</div>
</div>
<div class="col-lg-8" >
      <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder=")10xxxxx" name="nohp">
  <label for="floatingInput">No HP</label>
</div>
</div>
</div>
<div class="form-floating mb-3">
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" 
   name="password"> <label for="floatingPassword">Password</label>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit_usn_valid" value="123">Save changes</button>
      </div>
</form>
      </div>
      
    </div>
  </div>
</div>
<?php
if(empty($result)){
  echo "User tidak ada";
} else {

 ?>
      <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Level</th>
            <th scope="col">No HP</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $no = 1;

          foreach($result as $row){ ?>
          <tr>
            <th scope="row"><?php echo $no++?></th>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['level'] ?></td>
            <td><?php echo $row['noHp'] ?></td>
            <td>
              <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#ViewModal">
                <i class="bi bi-eye-fill"></i></button>
              <button class="btn btn-warn btn-sm"><i class="bi bi-pencil"></i></i></button>
              <button class="btn btn-info btn-sm"><i class="bi bi-trash-fill"></i></button>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>
      <?php  }?>
    </div>
</div>



<!-- Modal View-->
<div class="modal fade" id="ViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Data User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict';

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false);
            });
        })();
    </script>
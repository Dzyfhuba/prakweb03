<?php include "../env.php" ?>
<?php include "../config.php" ?>
<?php include "../profile.php" ?>
<?php include "../auth.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../head.php" ?>
</head>

<body>
  <?php include "../navbar.php" ?>
  <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="card h-75 w-50" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">
        <div class="card-header text-center">
          Register
        </div>
        <div class="card-body" style="overflow-y: scroll;">
          <form action="register.php" method="POST" >
            <div class="row">
              <div class="form-group col">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" placeholder="Enter Full Name" name="nama" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group col">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select class="custom-select" id="jenis_kelamin" name="jenis_kelamin">
                  <option value="" disabled selected>Pilih Jenis Kelamin</option>
                  <option value="pria">Pria</option>
                  <option value="wanita">Wanita</option>
                </select>
              </div>
              <div class="form-group col">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <div class="md-form md-outline input-with-post-icon datepicker">
                  <input placeholder="Masukkan Tanggal Lahir" type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="alamat">Alamat:</label>
              <input type="text" class="form-control" id="alamat" placeholder="Enter alamat" name="alamat" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="row justify-content-center fixed-bottom position-sticky m-1">
              <button type="submit" class="btn btn-primary w-75" name="register">login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
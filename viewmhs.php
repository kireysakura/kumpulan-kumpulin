<?php require"header.php" ?>
<?php require"navbar.php" ?>

    

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tabel Mahasiswa</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                   <?php 
// koneksi dengan database
$conn = mysqli_connect("localhost","root","","unis");
//koneksi ke table
$result = mysqli_query($conn, "SELECT * FROM mhs");
//menampilkan data dalam table
// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs);

// // menapilkan keseluruhan data pada table
// while ($mhs = mysqli_fetch_assoc($result)){
//   var_dump($mhs); //tes terkirim atau tidak 
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
  <!-- navbar -->
   <nav class="navbar navbar-expand-sm" style="background-color: #e3f2fd;" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Read</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="create.php">Create</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="update.php">Update</a>
        </li>
    </div>
  </div>
</nav>

<!-- end  navbar -->
 <div class="container">

      <!-- konten -->
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>nama</th>
            <th>alamat</th>
            <th>jenis kelamin</th>
            <th>agama</th>
            <th>sekolah asal</th>
            <th>email</th>
            <th>opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php while($mhs = mysqli_fetch_assoc($result)) : ?>
<tr>
  <th><?= $no++;?></th>
  <td><?= $mhs["nama"];?></td>
  <td><?= $mhs["alamat"];?></td>
  <td><?= $mhs["jk"];?></td>
  <td><?= $mhs["agama"];?></td>
  <td><?= $mhs["sekolah_asal"];?></td>
  <td><?= $mhs["email"];?></td>
  <td>
    <a href=""><i class="bi bi-option"></i></a>
    <a href=""><i class="bi bi-trash3"></i></a>
  </td>
</tr>
<?php endwhile; ?>
        </tbody>
      </table>
 </div>
        </tbody> 
      </table> 
    </div> 

</div>
</body>
</html>

                    <!-- Content Row -->

                    

                    <!-- Content Row -->
                   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php require"footer.php" ?>
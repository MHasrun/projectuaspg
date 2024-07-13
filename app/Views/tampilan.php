<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Dosen</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Custom CSS for Bright Theme -->
  <style>
    body {
      background-color: #f8f9fa;
      color: #212529;
    }
    .navbar {
      background-color: #007bff !important;
    }
    .navbar .nav-link {
      color: #ffffff !important;
    }
    .navbar .nav-link:hover {
      color: #d1ecf1 !important;
    }
    .sidebar {
      background-color: #007bff;
      padding-top: 15px;
    }
    .sidebar a {
      color: #ffffff !important;
      display: block;
      padding: 10px 15px;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #0056b3;
    }
    .sidebar .nav-icon {
      margin-right: 10px;
    }
    .content-wrapper {
      padding: 20px;
    }
    .table {
      background-color: #ffffff;
    }
    .thead-dark th {
      background-color: #343a40;
      color: #ffffff;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
  </style>
</head>
<body>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Dosen Universitas Kedondong</a>
  </nav>

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid mt-4">
        <div class="row">
          <div class="col-md-12">

            <?php if(!empty(session()->getFlashdata('message'))) : ?>
            <div class="alert alert-success">
              <?php echo session()->getFlashdata('message'); ?>
            </div>
            <?php endif ?>

            <!-- Tombol untuk memunculkan modal -->
            <button onclick="window.location.href='/tambah-data-dosen'" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> TAMBAH DATA</button>

            <!-- Tabel Data Dosen -->
            <table class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>Kode Dosen</th>
                  <th>Nama</th>
                  <th>Mata Kuliah</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($DataDosen as $key => $dosen) : ?>
                <tr>
                  <td><?php echo $dosen['kode_dosen'] ?></td>
                  <td><?php echo $dosen['nama'] ?></td>
                  <td><?php echo $dosen['matkul'] ?></td>
                  <td class="text-center">
                    <a href="notifikasi/dosen-masuk/<?= $dosen['id_dosen'];?>" class="btn btn-warning btn-sm"><i class=""></i> masuk</a>
                    <a href="notifikasi/dosen-tidak-masuk/<?= $dosen['id_dosen'];?>" class="btn btn-danger btn-sm"><i class=""></i> tidak masuk</a>
                  </td>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

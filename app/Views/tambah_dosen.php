<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Dosen</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Custom CSS for Elegant Theme -->
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
      height: 100vh;
      position: fixed;
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
      margin-left: 220px;
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
    .form-group label {
      font-weight: bold;
    }
    .alert {
      margin-top: 20px;
    }
  </style>
</head>
<body>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Tambah Dosen Universitas Tigaraksa</a>
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

            <!-- Form Tambah Data Dosen -->
            <form action="/tambah-data-dosen" method="post">
              <div class="form-group">
                <label for="kode_dosen">Kode Dosen:</label>
                <input type="text" name="kode_dosen" id="kode_dosen" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="nama">Nama Dosen:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="matkul">Nama Mata Kuliah:</label>
                <input type="text" name="matkul" id="matkul" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Dosen</button>
              <a href="/dosen" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
            </form>
            
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

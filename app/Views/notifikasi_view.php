<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS for Unique Notification Style -->
    <style>
        body {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: #212529;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            animation: slideIn 0.7s ease-out;
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 20px 20px 0 0;
            text-align: center;
            font-size: 1.5rem;
            padding: 1.25rem 1.5rem;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="card bg-light text-dark w-50">
        <div class="card-header">
            <i class="fas fa-bell"></i> Notifikasi
        </div>
        <div class="card-body">
            <div class="alert alert-info">
                <h4 class="alert-heading">Notifikasi Terkirim!</h4>
                <p><?= $message; ?></p>
            </div>
            <div class="d-flex justify-content-between">
                <a href="/dosen" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali ke Data Dosen</a>
                <a href="/" class="btn btn-secondary"><i class="fas fa-home"></i> Ke Beranda</a>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  
  <style>
    body {
      background-color: #f1f5f9;
      font-family: Arial, sans-serif;
    }

    /* Navbar styles */
    .navbar {
      background: linear-gradient(90deg, rgba(36,0,2,1) 0%, rgba(121,9,9,1) 50%, rgba(255,0,212,1) 100%);
    }
    .navbar-brand {
      color: #f8f9fa;
      font-weight: bold;
    }
    .nav-link {
      color: #ffffff;
      font-weight: bold;
    }
    .nav-link:hover {
      color: #ffb703;
    }

    /* Dropdown styles */
    .dropdown-menu {
      background-color: #d3f9d8;
      border: 1px solid rgba(0, 0, 0, 0.1);
    }
    .dropdown-item:hover {
      background-color: #ffb703;
      color: #000000;
    }

    /* Navbar-toggler button */
    .navbar-toggler {
      border: none;
    }
    .navbar-toggler:focus {
      box-shadow: none;
    }

    /* Custom Banner */
    .custom-banner {
      background: url('https://source.unsplash.com/random/1920x300') no-repeat center center;
      background-size: cover;
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffb703;
      font-size: 2.5rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
      font-family: 'Poppins', sans-serif; /* Using Poppins font */
      font-weight: 700; /* Bold font weight */
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php">DASHBOARD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="products.php">Master</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaksi.php">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rekap.php">Rekap</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a>
        </li>
      </ul>
    </div>
    <span class="navbar-text">
        Admin: <?= $_SESSION['admin_email']; ?>
      </span>
  </div>
</nav>

<!-- Custom banner with Google Font (Poppins) -->
<div class="custom-banner">
  Welcome Admin
</div>

</body>
</html>

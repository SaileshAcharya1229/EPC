<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$page = $_GET['page'] ?? 'home';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .wrapper {
      display: flex;
      min-height: 100vh;
    }
    #sidebar {
      width: 250px;
      background-color: #111;
      color: white;
    }
    #main-content {
      flex-grow: 1;
      padding: 20px;
    }
  </style>
</head>
<body>
  <?php include 'partials/header.php'; ?>
  <div class="wrapper">
    <?php include 'partials/sidebar.php'; ?>

    <div id="main-content">
      <?php
        if ($page === 'addblogs') {
            include 'partials/addblogs.php';
        } elseif ($page === 'viewblogs') {
            include 'partials/viewblogs.php';
        } else {
            include 'partials/dashboard-strip.php'; // Or home.php if you have it
        }
      ?>
    </div>
  </div>
  <?php include 'partials/footer.php'; ?>
</body>
</html>

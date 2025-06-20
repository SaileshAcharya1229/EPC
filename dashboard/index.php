<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 🔐 Access control: check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // redirect to login if not logged in
    exit();
}

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
      
    }
    #sidebar {
      width: 250px;
      /* background-color: #111; */
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
        } elseif ($page === 'categories') {
            include 'partials/categories.php';
        } elseif ($page === 'addcategory') {
            include 'partials/addcategory.php';
        } elseif ($page === 'service_list') {
            include 'partials/service_list.php'; 
         } elseif ($page === 'manage_site') {
            include 'partials/manage_site.php';
         }
         elseif ($page === 'add_services') {
            include 'partials/add_services.php';
            
        } elseif ($page === 'settings') {
            include 'partials/settings.php';
        } 
        
        else {
            include 'partials/dashboard-strip.php'; // Or home.php if you have it
        }
      ?>
    </div>
  </div>
  <?php include 'partials/footer.php'; ?>
</body>
</html>

<!-- File: partials/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/style.css" />
  
</head>
<body>
  <!-- Top Navbar -->
  <nav class="navbar navbar-light bg-white shadow-sm px-4 py-2 d-flex justify-content-between align-items-center">
    <div class="navbar-brand fw-bold">YourLogo</div>
    
    <div class="dropdown">
      <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-circle" id="profileDropdown" style="cursor:pointer;" />
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><a class="dropdown-item" href="#">Logout</a></li>
      </ul>
    </div>
  </nav>

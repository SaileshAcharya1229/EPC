<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EPC</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="./css/dashboard.css" />
  </head>
  <body>
<!-- Header Section -->
<header class="dashboard-header">
  <div class="header-container">
    <div class="left-section">
      <div class="logo">MyDashboard</div>
      <nav class="menu-tab">
        <a href="#">Home</a>
        <a href="#">Profile</a>
        <a href="#">Settings</a>
      </nav>
    </div>

    <div class="search-section">
      <input type="text" placeholder="Search..." />
    </div>

    <div class="right-section">
      <div class="icon">🔔</div>
      <div class="icon">💬</div>
      <div class="icon">⚙️</div>
      <div class="profile-pic">
        <img src="asset/profile.png" alt="Profile" />
      </div>
    </div>
  </div>
</header>

<div class="dashboard-wrapper">
  <nav class="dashboard-sidebar">
    <ul>
      <li class="tab active"><i class="fas fa-chart-line"></i><span>Dashboard</span></li>
      <li class="tab"><i class="fas fa-user"></i><span>Profile</span></li>
      <li class="tab"><i class="fas fa-database"></i><span>Data</span></li>
      <li class="tab"><i class="fas fa-cog"></i><span>Settings</span></li>
      <li class="tab"><i class="fas fa-envelope"></i><span>Messages</span></li>
      <li class="tab"><i class="fas fa-bell"></i><span>Notifications</span></li>
      <li class="tab logout"><i class="fas fa-sign-out-alt"></i><span>Logout</span></li>
    </ul>
  </nav>

  <main class="dashboard-main">
    <!-- Future content goes here -->
  </main>
</div>
</body>
</html>

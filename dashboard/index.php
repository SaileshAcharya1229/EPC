<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EPC Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="css/dashboard.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.7/easypiechart.min.css" />
</head>
<body>
  <header class="dashboard-header">
    <div class="header-container">
      <div class="left-section">
        <div class="logo">EPC Dashboard</div>
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
        <li class="tab"><i class="fas fa-user"></i><span>Users</span></li>
        <li class="tab"><i class="fas fa-store"></i><span>Vendors</span></li>
        <li class="tab"><i class="fas fa-box"></i><span>Sales</span></li>
        <li class="tab"><i class="fas fa-list"></i><span>Orders</span></li>
        <li class="tab logout"><i class="fas fa-sign-out-alt"></i><span>Logout</span></li>
      </ul>
    </nav>

    <main class="dashboard-main">
      <section class="overview container">
        <h2>Overview</h2>
        <div class="card-container">
          <a href="users.php" class="card" id="users">
            <i class="fas fa-users"></i>
            <h3>Total Users</h3>
            <p class="value"></p>
          </a>
          <a href="vendors.php" class="card" id="vendors">
            <i class="fas fa-store"></i>
            <h3>Total Vendors</h3>
            <p class="value"></p>
          </a>
          <a href="sales.php" class="card" id="sales">
            <i class="fas fa-box"></i>
            <h3>Total Sales</h3>
            <p class="value"></p>
          </a>
          <a href="orders.php" class="card" id="orders">
            <i class="fas fa-list"></i>
            <h3>Total Orders</h3>
            <p class="value"></p>
          </a>
          <div class="card-container">
          <a href="revenue.php" class="card" id="revenue">
            <i class="fas fa-revenue"></i>
            <h3>Total Revenue</h3>
            <p class="value"></p>
          </a>
        </div>

       

        
      </section>
    </main>
  </div>
<!-- 
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.7/jquery.easypiechart.min.js"></script>
  <script src="js/dashboard.js"></script> -->
</body>
</html>
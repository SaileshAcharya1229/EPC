<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EPC Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
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
        <div class="icon"><i class="fas fa-bell"></i></div>
        <div class="icon"><i class="fas fa-comment"></i></div>
        <div class="icon"><i class="fas fa-cog"></i></div>
        <div class="profile-pic">
          <img src="asset/profile.png" alt="Profile" />
        </div>
      </div>
    </div>
  </header>

  <div class="dashboard-wrapper">
    <nav class="dashboard-sidebar">
      <ul>
        <li class="tab active"><i class="fas fa-gauge"></i><span>Dashboard</span></li>
        <li class="tab"><i class="fas fa-users"></i><span>Users</span></li>
        <li class="tab"><i class="fas fa-store"></i><span>Vendors</span></li>
        <li class="tab"><i class="fas fa-box"></i><span>Sales</span></li>
        <li class="tab"><i class="fas fa-bag-shopping"></i><span>Orders</span></li>
        <li class="tab logout"><i class="fas fa-sign-out"></i><span>Logout</span></li>
      </ul>
    </nav>

    <main class="dashboard-main">
      <section class="overview container">
        <h2>Overview</h2>
        <div class="card-container">
          <a href="users.php" class="card">
            <i class="fas fa-users"></i>
            <h3>Total Users</h3>
            <p class="value"></p>
          </a>
          <a href="vendors.php" class="card">
            <i class="fas fa-store"></i>
            <h3>Total Vendors</h3>
            <p class="value"></p>
          </a>
          <a href="sales.php" class="card">
            <i class="fas fa-box"></i>
            <h3>Total Sales</h3>
            <p class="value"></p>
          </a>
          <a href="orders.php" class="card">
            <i class="fas fa-bag-shopping"></i>
            <h3>Total Orders</h3>
            <p class="value"></p>
          </a>
        </div>

        <div class="revenue-breakdown">
          <h3>Revenue Breakdown</h3>
          <div class="revenue-pie">
            <div class="chart" data-percent="25" id="rev-daily-chart"><span>Daily</span></div>
            <div class="chart" data-percent="60" id="rev-monthly-chart"><span>Monthly</span></div>
            <div class="chart" data-percent="90" id="rev-yearly-chart"><span>Yearly</span></div>
          </div>
        </div>

        <div class="pending-approvals">
          <h3>Pending Approvals</h3>
          <div class="card-container">
            <a href="pending_vendors.php" class="card">
              <i class="fas fa-user-clock"></i>
              <h3>Vendors</h3>
              <p id="pending-vendors"></p>
            </a>
            <a href="pending_listings.php" class="card">
              <i class="fas fa-clipboard-list"></i>
              <h3>Listings</h3>
              <p id="pending-listings"></p>
            </a>
            <a href="pending_reviews.php" class="card">
              <i class="fas fa-comments"></i>
              <h3>Reviews</h3>
              <p id="pending-reviews"></p>
            </a>
          </div>
        </div>
      </section>
    </main>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.7/jquery.easypiechart.min.js"></script>
  <script src="js/dashboard.js"></script>
</body>
</html>
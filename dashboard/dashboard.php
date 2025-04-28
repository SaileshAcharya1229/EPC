<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- External CSS -->
  <link rel="stylesheet" href=".dashboard/css/dashboard.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

<div class="dashboard-container">

  <!-- Sidebar -->
  <aside class="sidebar" id="sidebar">
    <div class="logo">LOGO</div>
    <nav class="nav-menu">
      <a href="#" class="nav-item active"><i class="fas fa-home"></i><span>Dashboard</span></a>
      <a href="#" class="nav-item"><i class="fas fa-chart-line"></i><span>Reports</span></a>
      <a href="#" class="nav-item"><i class="fas fa-chart-pie"></i><span>Analytics</span></a>
      <a href="#" class="nav-item"><i class="fas fa-cogs"></i><span>Settings</span></a>
      <a href="#" class="nav-item"><i class="fas fa-users"></i><span>Users</span></a>
      <a href="#" class="nav-item"><i class="fas fa-bell"></i><span>Notifications</span></a>
      <a href="#" class="nav-item logout"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="main-content" id="main-content">
    
    <!-- Top Header -->
    <header class="main-header">
      <div class="header-left">
        <button class="menu-toggle" id="menu-toggle"><i class="fas fa-bars"></i></button>
        <h2>Dashboard</h2>
      </div>
      <div class="header-right">
        <div class="search-box">
          <input type="text" placeholder="Search...">
          <i class="fas fa-search"></i>
        </div>
        <i class="fas fa-cog"></i>
        <i class="fas fa-envelope"></i>
        <i class="fas fa-bell"></i>
      </div>
    </header>

    <!-- Overview Section -->
    <section class="overview">
      <div class="overview-header">
        <h3>Overview</h3>
        <button class="last-week-btn"><i class="fas fa-calendar-alt"></i> Last week</button>
      </div>
      
      <div class="overview-cards">
        <div class="card">
          <div class="card-icon">
            <i class="fas fa-coins"></i>
          </div>
          <div class="card-details">
            <div class="card-top">
              <span class="card-percentage">-85.1%</span>
            </div>
            <div class="card-bottom">
              <h4>Total Revenue</h4>
              <p>19.6K</p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-icon">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <div class="card-details">
            <div class="card-top">
              <span class="card-percentage">-85%</span>
            </div>
            <div class="card-bottom">
              <h4>Net Profit</h4>
              <p>7.1K</p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-icon">
            <i class="fas fa-box"></i>
          </div>
          <div class="card-details">
            <div class="card-top">
              <span class="card-percentage">-88.4%</span>
            </div>
            <div class="card-bottom">
              <h4>Items Sold</h4>
              <p>43</p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <div class="card-details">
            <div class="card-top">
              <span class="card-percentage">-85.1%</span>
            </div>
            <div class="card-bottom">
              <h4>Growth</h4>
              <p>-85.1%</p>
            </div>
          </div>
        </div>
      </div>

    </section>

  </main>

</div>

<!-- Toggle Sidebar Script -->
<script>
  const menuToggle = document.getElementById('menu-toggle');
  const sidebar = document.getElementById('sidebar');
  const mainContent = document.getElementById('main-content');

  menuToggle.addEventListener('click', () => {
    sidebar.classList.toggle('sidebar-collapsed');
    mainContent.classList.toggle('main-expanded');
  });
</script>

</body>
</html>

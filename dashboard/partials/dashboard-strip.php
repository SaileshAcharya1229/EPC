<!-- File: partials/dashboard-strip.php -->
<?php
// Example data, replace with your actual data fetching logic
$totalBlogs = 43;
$totalServices = 15;
$totalCategories = 8;
?>

<div class="container-fluid">
  <!-- Row 1: Three boxes -->
  <div class="row mb-4">
    <div class="col-md-4">
      <div class="card text-center">
        <div class="card-body">
          <h2 class="text-primary"><?php echo $totalBlogs; ?></h2>
          <p>Total Blogs</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-center">
        <div class="card-body">
          <h2 class="text-success"><?php echo $totalServices; ?></h2>
          <p>Total Services</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-center">
        <div class="card-body">
          <h2 class="text-warning"><?php echo $totalCategories; ?></h2>
          <p>Total Categories</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Row 2: Filter + Chart -->
  <div class="row">
    <div class="col-12 mb-3">
      <form id="filterForm" class="form-inline">
        <label for="filterRange" class="mr-2 font-weight-bold">Show Data For:</label>
        <select id="filterRange" class="form-control">
          <option value="week">This Week</option>
          <option value="month" selected>This Month</option>
          <option value="year">This Year</option>
        </select>
      </form>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <canvas id="dashboardChart" height="100"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Bootstrap (if not already included) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script>
const chartDataSets = {
  week: {
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    blogs:   [5, 7, 6, 8, 4, 5, 7],
    services:[2, 3, 2, 4, 1, 2, 1],
    categories:[1, 1, 2, 1, 1, 1, 1]
  },
  month: {
    labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
    blogs:   [12, 10, 11, 9],
    services:[4, 5, 3, 3],
    categories:[2, 2, 2, 2]
  },
  year: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    blogs:   [3, 4, 5, 6, 4, 5, 3, 4, 5, 6, 4, 5],
    services:[1, 2, 2, 1, 2, 1, 2, 2, 1, 2, 1, 2],
    categories:[1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
  }
};

let ctx = document.getElementById('dashboardChart').getContext('2d');
let dashboardChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: chartDataSets.month.labels,
    datasets: [
      {
        label: 'Blogs',
        data: chartDataSets.month.blogs,
        backgroundColor: '#007bff'
      },
      {
        label: 'Services',
        data: chartDataSets.month.services,
        backgroundColor: '#28a745'
      },
      {
        label: 'Categories',
        data: chartDataSets.month.categories,
        backgroundColor: '#ffc107'
      }
    ]
  },
  options: {
    responsive: true,
    scales: {
      y: { beginAtZero: true }
    }
  }
});

document.getElementById('filterRange').addEventListener('change', function() {
  const range = this.value;
  dashboardChart.data.labels = chartDataSets[range].labels;
  dashboardChart.data.datasets[0].data = chartDataSets[range].blogs;
  dashboardChart.data.datasets[1].data = chartDataSets[range].services;
  dashboardChart.data.datasets[2].data = chartDataSets[range].categories;
  dashboardChart.update();
});
</script>
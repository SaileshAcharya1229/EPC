$(document).ready(function () {
  $.ajax({
    url: "fetch_dashboard_data.php",
    method: "GET",
    dataType: "json",
    success: function (data) {
      $("#users .value").text(data.total_users);
      $("#vendors .value").text(data.total_vendors);
      $("#sales .value").text(data.total_sales);
      $("#orders .value").text(data.total_orders);

      $("#pending-vendors").text(data.pending.vendors);
      $("#pending-listings").text(data.pending.listings);
      $("#pending-reviews").text(data.pending.reviews);

      $("#rev-daily-chart")
        .data("percent", data.revenue.daily_percent)
        .easyPieChart({ size: 120, barColor: "#1abc9c" });
      $("#rev-monthly-chart")
        .data("percent", data.revenue.monthly_percent)
        .easyPieChart({ size: 120, barColor: "#3498db" });
      $("#rev-yearly-chart")
        .data("percent", data.revenue.yearly_percent)
        .easyPieChart({ size: 120, barColor: "#9b59b6" });
    },
    error: function () {
      alert("Failed to load dashboard data.");
    },
  });
});

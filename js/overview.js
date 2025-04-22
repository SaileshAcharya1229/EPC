$(document).ready(function () {
  $.ajax({
    url: "fetch_overview.php",
    type: "GET",
    dataType: "json",
    success: function (data) {
      if (data.total_revenue) {
        $("#total-revenue .this-week").text("$" + data.total_revenue.this_week);
        $("#total-revenue .last-week").text("$" + data.total_revenue.last_week);
      }
      if (data.net_profit) {
        $("#net-profit .this-week").text("$" + data.net_profit.this_week);
        $("#net-profit .last-week").text("$" + data.net_profit.last_week);
      }
      if (data.time_sold) {
        $("#time-sold .this-week").text(data.time_sold.this_week + " hrs");
        $("#time-sold .last-week").text(data.time_sold.last_week + " hrs");
      }
      if (data.growth) {
        $("#growth .this-week").text(data.growth.this_week + "%");
        $("#growth .last-week").text(data.growth.last_week + "%");
      }
    },
    error: function () {
      alert("Error fetching data.");
    },
  });
});

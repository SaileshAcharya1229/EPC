<?php
header('Content-Type: application/json');
$mysqli = new mysqli("localhost", "root", "", "your_db_name");

if ($mysqli->connect_error) {
  echo json_encode(["error" => "Connection failed"]);
  exit();
}

$data = [];
$query = "SELECT metric, this_week, last_week FROM overview_data";
$result = $mysqli->query($query);

while ($row = $result->fetch_assoc()) {
  $data[$row['metric']] = [
    "this_week" => $row["this_week"],
    "last_week" => $row["last_week"]
  ];
}

echo json_encode($data);
?>

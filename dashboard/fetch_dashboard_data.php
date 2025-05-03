<?php
header('Content-Type: application/json');
include 'db_connection.php';

$response = [
  'total_users' => 1200,
  'total_vendors' => 150,
  'total_sales' => 3200,
  'total_orders' => 900,
  'revenue' => [
    'daily' => '$2,000',
    'monthly' => '$45,000',
    'yearly' => '$540,000'
  ],
  'pending' => [
    'vendors' => 10,
    'listings' => 7,
    'reviews' => 25
  ]
];

echo json_encode($response);
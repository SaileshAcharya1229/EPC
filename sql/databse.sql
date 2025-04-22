CREATE TABLE overview_data (
  metric VARCHAR(50),
  this_week FLOAT,
  last_week FLOAT
);

INSERT INTO overview_data (metric, this_week, last_week) VALUES
('total_revenue', 5000, 4200),
('net_profit', 1800, 1600),
('time_sold', 120, 100),
('growth', 15, 10);

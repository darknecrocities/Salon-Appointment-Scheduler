CREATE DATABASE salon;

\c salon

CREATE TABLE customers (
  customer_id SERIAL PRIMARY KEY,
  name VARCHAR NOT NULL,
  phone VARCHAR UNIQUE NOT NULL
);

CREATE TABLE services (
  service_id SERIAL PRIMARY KEY,
  name VARCHAR NOT NULL
);

CREATE TABLE appointments (
  appointment_id SERIAL PRIMARY KEY,
  customer_id INT REFERENCES customers(customer_id),
  service_id INT REFERENCES services(service_id),
  time VARCHAR NOT NULL
);

INSERT INTO services (name) VALUES 
('cut'), 
('color'), 
('perm');

CREATE TABLE user (
  user_id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  email VARCHAR(255),
  password VARCHAR(255),
  registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  user_key VARCHAR(255)
);

CREATE TABLE profile (
  profile_id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  address VARCHAR(255),
  phone_number VARCHAR(15)
);

CREATE TABLE ticket (
  ticket_id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  date_time_purchased DATETIME,
  ticket_type VARCHAR(50),
  price DECIMAL(10, 2)
);

CREATE TABLE merchandise (
  merchandise_id INT PRIMARY KEY AUTO_INCREMENT,
  description VARCHAR(255),
  price DECIMAL(10, 2),
  stock INT
);

CREATE TABLE admin (
  admin_id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  email VARCHAR(255),
  password VARCHAR(255)
);

CREATE TABLE ticket_type (
  ticket_type_id INT PRIMARY KEY, AUTO_INCREMENT
  description VARCHAR(255),
  price DECIMAL(10, 2)
);

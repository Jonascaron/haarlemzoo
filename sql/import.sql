CREATE TABLE user (
  user_id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  email VARCHAR(255),
  password VARCHAR(255),
  registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
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
  date_time_purchased TIMESTAMP,
  ticket_type INT,
  price INT(100)
);

CREATE TABLE merchandise (
  merchandise_id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  date_time_purchased TIMESTAMP,
  merchandise_type_id INT,
  price INT(100)
);

CREATE TABLE merchandise_type (
  merchandise_type_id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255),
  description VARCHAR(255),
  price INT(100),
  stock INT
);

CREATE TABLE admin (
  admin_id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  email VARCHAR(255),
  password VARCHAR(255)
);

CREATE TABLE ticket_type (
  ticket_type_id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255),
  description VARCHAR(255),
  price INT(100)
);

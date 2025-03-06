CREATE DATABASE test_db;

USE test_db;

CREATE TABLE User (
	user_id int NOT NULL AUTO_INCREMENT,
	first_name varchar(255) NOT NULL,
	last_name varchar(255) NOT NULL,
	username varchar(255) NOT NULL,
	email varchar(50),
	phone_num int(11),
	password varchar(40),
	primary key(user_id)
);

CREATE TABLE Products (
	product_id int NOT NULL AUTO_INCREMENT,
    product_name varchar(255) NOT NULL,
    primary key (product_id)
);

CREATE TABLE Orders (
	order_id int NOT NULL AUTO_INCREMENT,
    cust_first_name  varchar(255) NOT NULL,
    cust_last_name  varchar(255) NOT NULL,
    product_id int NOT NULL,
    order_date date NOT NULL,
    amount int NOT NULL,
    status ENUM ('Processing','Completed','Cancelled') NOT NULL,
    primary key (order_id),
    FOREIGN KEY (product_id) REFERENCES Products(product_id) ON DELETE CASCADE
);

ALTER TABLE Products
ADD category ENUM('iPhone', 'AirPods', 'Accessories') NOT NULL;

INSERT INTO Products (product_name, category) VALUES
('iPhone 14', 'iPhone'),
('iPhone 15', 'iPhone'),
('iPhone 15 Plus', 'iPhone'),
('iPhone 16', 'iPhone'),
('iPhone 16e', 'iPhone'),
('iPhone 16 Pro', 'iPhone'),
('Airpods 4', 'AirPods'),
('Airpods Pro', 'AirPods'),
('Airpods Max', 'AirPods'),
('iPhone Case', 'Accessories'),
('Wireless Charger', 'Accessories'),
('Lightning Cable', 'Accessories');

ALTER TABLE Products
ADD price int NOT NULL;

UPDATE Products SET price = 49990 WHERE product_id = 1;
UPDATE Products SET price = 56990 WHERE product_id = 2;
UPDATE Products SET price = 62990 WHERE product_id = 3;
UPDATE Products SET price = 68990 WHERE product_id = 4;
UPDATE Products SET price = 52990 WHERE product_id = 5;
UPDATE Products SET price = 78990 WHERE product_id = 6;
UPDATE Products SET price = 9990 WHERE product_id = 7;
UPDATE Products SET price = 14990 WHERE product_id = 8;
UPDATE Products SET price = 32990 WHERE product_id = 9;
UPDATE Products SET price = 1290 WHERE product_id = 10;
UPDATE Products SET price = 1990 WHERE product_id = 11;
UPDATE Products SET price = 990 WHERE product_id = 12;

NSERT INTO Orders (cust_first_name, cust_last_name, product_id, order_date, amount, status) VALUES
('Judie', 'Mendoza', 1, '2025-03-01', 49990, 'Processing'),    -- iPhone 14
('Krishla', 'Santos', 5, '2025-03-02', 52990, 'Completed'),       -- iPhone 16e
('Nicolas', 'Reyes', 8, '2025-03-03', 14990, 'Cancelled'),         -- AirPods Pro
('Pau', 'Garcia', 3, '2025-03-04', 62990, 'Processing'),        -- iPhone 15 Plus
('Anecka', 'Lopez', 7, '2025-03-05', 9990, 'Completed'),        -- AirPods 4
('Lina', 'Fernandez', 12, '2025-03-06', 990, 'Processing'),     -- Lightning Cable
('Kurt', 'Gonzales', 4, '2025-03-07', 68990, 'Cancelled'),    -- iPhone 16
('Isabel', 'Torres', 9, '2025-03-08', 32990, 'Completed'),      -- AirPods Max
('Eric', 'Ramos', 6, '2025-03-09', 78990, 'Processing'),      -- iPhone 16 Pro
('Catherine', 'Mendoza', 11, '2025-03-10', 1990, 'Completed');  -- Wireless Charger
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

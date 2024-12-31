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
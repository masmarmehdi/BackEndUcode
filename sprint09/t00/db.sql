CREATE DATABASE sword;
USE sword;
CREATE USER "mmasmar"@'localhost' IDENTIFIED BY 'securepass';
GRANT ALL ON sword.* TO "mmasmar"@"localhost";
CREATE TABLE users (
    id INT primary key AUTO_INCREMENT,
    fullname  VARCHAR(15) UNIQUE,
    username VARCHAR(20),
    password VARCHAR(20),
    email VARCHAR(30),
);
USE ucode_web;
CREATE TABLE heroes
(
   id INT primary key AUTO_INCREMENT NOT NULL,
   name VARCHAR(30) UNIQUE,
   description VARCHAR(500),
   race VARCHAR(30) DEFAULT 'human',
   class_role ENUM('tankman', 'healer', 'dps')
);
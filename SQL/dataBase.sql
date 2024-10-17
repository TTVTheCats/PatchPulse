CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30),
    email VARCHAR(40),
    password VARCHAR(50),
    agree_terms BOOLEAN
);

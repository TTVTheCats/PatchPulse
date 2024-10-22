CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30),
    email VARCHAR(40),
    password VARCHAR(255), /* 255 Necessario per contenere la password criptata*/
    agree_terms BOOLEAN
);

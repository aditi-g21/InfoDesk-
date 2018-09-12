CREATE DATABASE details;
USE details;

CREATE TABLE information(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    sys_username VARCHAR(32) NOT NULL,
    sys_password VARCHAR(32) NOT NULL,
    info_username VARCHAR(32) NOT NULL,
    info_password VARCHAR(32) NOT NULL,
    status BOOLEAN DEFAULT 0 NOT NULL,
    first_name VARCHAR(32) NOT NULL,
    last_name VARCHAR(32) NOT NULL,
    email VARCHAR(32) NOT NULL,
    reg_no INT UNSIGNED NOT NULL,
    phone_no BIGINT(10) UNSIGNED NOT NULL,
    clg_name VARCHAR(50) NOT NULL,
    card_type INT(1) UNSIGNED NOT NULL
);


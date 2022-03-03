DROP IF EXISTS users;
CREATE TABLE users(
    user_id int AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR (99) not NULL,
    user_email VARCHAR (99) not NULL,
    user_password VARCHAR (99) not NULL,
    user_state int(1) DEFAULT 1,
    user_time_created DATETIME DEFAULT CURRENT_TIMESTAMP,
    user_time_update DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE posts(
    id INT AUTO_INCREMENT,
    title VARCHAR(255),
    body TEXT,
    author VARCHAR(255),
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)  
    );
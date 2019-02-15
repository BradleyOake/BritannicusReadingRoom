CREATE TABLE users(
    userId INTEGER NOT NULL PRIMARY KEY,
    username CHAR(20) NOT NULL,
    password CHAR(50) NOT NULL,
    salt CHAR(10) NOT NULL,
    email CHAR(40) NOT NULL
);

INSERT INTO users(userId, username, password, salt, email) VALUES(1, 'connor', 'reading', 2586340281, 'connor@readingroom.com');
INSERT INTO users(userId, username, password, salt, email) VALUES(2, 'admin', 'admin', 3824001813, 'ziggy6005@gmail.com');
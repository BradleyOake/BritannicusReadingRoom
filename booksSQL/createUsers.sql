CREATE TABLE tblUsers(
    UserId INTEGER NOT NULL PRIMARY KEY,
    Username CHAR(20) NOT NULL,
    Password CHAR(50) NOT NULL,
    Salt CHAR(10) NOT NULL,
    Email CHAR(40) NOT NULL
);

INSERT INTO tblUsers(UserId, Username, Password, Salt, Email) 
       VALUES(1, 'connor', '3da36475b59758aa8a5d1adf1433d89f', 2586340281, 'connor@readingroom.com'),
		     (2, 'admin', '9a29698129279d5987ebab04beff5f9e', 3824001813, 'ziggy6005@gmail.com');
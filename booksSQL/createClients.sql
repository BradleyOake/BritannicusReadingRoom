DROP TABLE IF EXISTS tblClients;

CREATE TABLE tblClients(
		ClientId CHAR(5) PRIMARY KEY,
		ClientName VARCHAR(75) NOT NULL,
		ClientPhoneNumber CHAR(10),
		ClientEmail VARCHAR(50),
		ClientAddress VARCHAR(100));

/*Dealers*/
INSERT INTO tblClients (ClientId, ClientName, ClientPhoneNumber, ClientEmail, ClientAddress)
		VALUES ('D0001','Barns & Noble','9059146570','noble@barns.ca','Oshawa Secret Center'),
               ('D0002','Johnny Books','7057877570','booksAreLife@msn.ca','7869 Kent Street');

/*Clients*/
INSERT INTO tblClients (ClientId, ClientName, ClientPhoneNumber, ClientEmail, ClientAddress)
		VALUES ('C0001','Ron Colberty','5559891530','colbertyR@gmail.ca','N/A'),
               		('C0002','Cathy Ridgefield','5551234567','ChattyCathy@hotmail.com','N/A'),
			('C0003','Peter Smirtle','8787059140','SmirtleTurtle@sympatico.ca','N/A'),
			('C0004','Coles Bookman','4557008833','coles@aol.com','N/A'),
			('C0005','Karl Jones','9954446521','karlBook@gmail.ca','N/A'),
			('C0006','Herman Galore','5458889563','galore@hotmail.ca','N/A'),
			('C0007','Kenny Rodgers','9845221326','kenRod@gmail.ca','N/A'),
			('C0008','Jeremy Page','8479557000','pagemasters@books.ca','N/A'),
			('C0009','Laura Irate','9054523310','imIrate@gmail.ca','N/A'),
			('C0010','Jane Courier','4165552033','couriers@hotmail.com','N/A'),
			('C0011','James Penguin','4055663012','jPeng@msn.ca','N/A'),
			('C0012','Johnny Salami','7057877570','salami@gmail.ca','N/A'),
			('C0013','Carol Jennings','4578006321','myJennings@msn.ca','N/A'),
			('C0014','Michael Merry','9737007264','merryMike@hotmail.ca','N/A'),
			('C0015','William Fredricks','6478559978','wilyFred@gmail.ca','N/A');

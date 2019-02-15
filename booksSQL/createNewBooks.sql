DROP TABLE IF EXISTS tblNewBooks;


CREATE TABLE tblNewBooks(
		ItemId CHAR(13) PRIMARY KEY REFERENCES tblItems(ItemId),

		Publisher VARCHAR(50),

		BindingType VARCHAR(10),

		Quantity INTEGER);


INSERT INTO tblNewBooks (ItemId, Publisher, BindingType, Quantity)
 
       VALUES('9783161484100', 'Tree Books', 'Hard Cover', 357),

		('6949869237858', 'Cadburry Inc.', 'Paper Back', 100),

		('2069209823495', 'Pronto Books', 'Paper Back', 20),

		('0109318539582', 'Fiddy Publishers', 'Hard Cover', 20),

		('3596840982235', 'Sick Slick Books', 'Hard Cover', 21),

		('1234567891234','Pronto Books','Hard Cover',50),

		('8794768359173','Cadburry Inc.','Hard Cover',45),

		('8885757375815','Frank Publishing','Hard Cover',87),

		('0097857463889','Fiddy Publishers','Paper Back',98),

		('1243476474757','Fiddy Publishers','Paper Back',345),

		('9845763657564','Fiddy Publishers','Hard Cover',76),

		('6758463457966','Cadburry Inc.','Hard Cover',10),

		('5672345457676','Cadburry Inc.','Paper Back',12),

		('9876549876546','Cadburry Inc.','Paper Back',6),

		('7645352436767','Cadburry Inc.','Paper Back',3),

		('2345696543356','Cadburry Inc.','Hard Cover',1),

		('9076541234546','Two Stops Inc.','Hard Cover',9),

		('7688674332556','Two Stops Inc.','Hard Cover',17),

		('1232345634572','Two Stops Inc.','Paper Back',88),

		('7689842345234','Two Stops Inc.','Paper Back',11);


SELECT * FROM tblItems INNER JOIN tblNewBooks ON (tblItems.ItemId = tblNewBooks.ItemId);
DROP TABLE IF EXISTS tblCustomerCollections;

CREATE TABLE tblCustomerCollections(
		ItemId CHAR(13),
		ClientId CHAR(5),
		PRIMARY KEY(ItemId,ClientId));
		
INSERT INTO tblCustomerCollections (ItemId, ClientId) 
       VALUES
		 ('B0001','C0001'),
		 ('M0004','C0001'),
		 ('M0003','C0002'),
		 ('M0005','D0001'),
		 ('B0003','D0002');

select * from tblCustomerCollections;
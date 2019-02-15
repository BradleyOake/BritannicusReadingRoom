DROP TABLE IF EXISTS tblWishListItems;

CREATE TABLE tblWishListItems(
		WishListItemId CHAR(5) PRIMARY KEY,
		ClientId CHAR(5),
		WishListTitle VARCHAR(75) NOT NULL,
		ItemType VARCHAR(1) NOT NULL,
		Notes VARCHAR(500),
		DateRequested DATE
);
		
INSERT INTO tblWishListItems(WishListItemId, ClientId, WishListTitle, ItemType, Notes, DateRequested)
	VALUES ('00000', 'C0002', 'Catcher in the Rye', 'B', 'They want a mint copy', '2015-02-18'),
		   ('00001', 'D0001', 'Map of Atlantis', 'M', 'Must be inexpensive', '2015-02-18'),
		   ('00002', 'D0002', 'Large Map of the World ', 'M', 'They want a mint copy', '2015-02-18'),
		   ('00003', 'C0003', 'Guide to Catching Ladies', 'B', 'First Publishing with error on page 56', '2015-02-18'),
		   ('00004', 'C0003', 'First Bible', 'B', 'They are willing to pay 34 Million...', '2015-02-18');
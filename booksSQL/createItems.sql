DROP TABLE IF EXISTS tblItems CASCADE;

CREATE TABLE tblItems(
		ItemId CHAR(13) PRIMARY KEY,
		Title VARCHAR(75) NOT NULL,
		Author VARCHAR(75) NOT NULL,
		PublishDate DATE, 
		Price NUMERIC(15,2),
		PricingDate DATE);
		
INSERT INTO tblItems(ItemId, Title, Author, PublishDate, Price, PricingDate) VALUES
	('B0001', 'Oliver Twist', 'Charles Dickens', '1837-01-01', 356.99, '2015-02-05'),
	('B0002', 'The Taming of the Shrew', 'William Shakespeare', '1590-01-01', 34356.99, '2015-02-05'),
	('B0003', 'The Tragedy of Hamlet, Prince of Denmark', 'William Shakespeare', '1930-01-01', 68000, '2015-02-27'),
	('B0004', 'Songs For The Philologists', 'J. R. R. Tolkien, E. V. Gordon & Others', '1937-01-01', 29700, '2015-02-27'),
	('B0005', 'To Kill A Mockingbird', 'Harper Lee', '1960-01-01', 12000, '2015-02-27'),
	('B0006', 'Of Mice and Men', 'John Steinbeck', '1937-01-01', 1800, '2015-02-27'),
	('B0007', 'Moby Dick', 'Herman Melville', '1851-01-01', 1800, '2015-02-27'),
	('B0008', 'If I Ran the Circus', 'Dr. Seuss', '1956-01-01', 1800, '2015-02-27'),
	('B0009', 'Alibaster''s Riddle','Todd Pool','2010-05-09',3000,'2015-03-05'),
	('B0010', 'Race for Freedom','Oliver Riddle','1945-03-09',5000,'2015-03-05'),
	('B0011', 'To Run a Mill','Massy Fries','1890-05-23',30000,'2015-03-05'),
	('B0012', 'Grace Harper','Otto Octavious','1870-04-14',250,'2015-03-05'),
	('B0013', 'Lawyer','Ron Goostuv','1970-08-13',60,'2015-03-05'),
	('B0014', 'Of Sheep and Aliens','Reggy Wright','2012-01-01',100,'2015-03-05'),
	('B0015', 'Two Stools','Pauli Pront','1912-01-01',100000,'2015-03-05'),
	('B0016', 'Crypt Rocks','Todd Fiddle','1915-01-01',300,'2015-03-05'),
	('B0017', 'Two Nights','Todd Pool','1899-04-19',2470,'2015-03-05'),
	('B0018', 'Book of Monroe','Heather Winter','1799-05-10',5500,'2015-03-05'),
	('B0019', 'Elvis the First','Sivle Tsrif','1930-06-09',1000,'2015-03-05'),
	('B0020', 'Godfree','Reed Fog','1901-05-20',45000,'2015-03-05'),
	('B0021', 'The Tales of Beedle the Bard', 'J.K. Rowling', '2008-12-04', 22000, '2015-03-05');
	

	
INSERT INTO tblItems(ItemId, Title, Author, PublishDate, Price, PricingDate) VALUES
	('9783161484100', 'Fifty Shades of Grey', 'Marky Mark', '2015-01-10', 13.99, '2015-02-05'),
	('6949869237858', 'Love Songers and Superman', 'McJagger', '2014-01-10', 10, '2015-02-27'),
	('2069209823495', '12 Nights With You', 'Grace Wilton the Fifth', '2015-01-10', 24.99, '2015-02-05'),
	('0109318539582', 'How To Love a Cat', 'Lady Claw of Dutchen House', '2015-01-10', 53.99, '2015-02-05'),
	('3596840982235', 'Pimp my Ride Part III', 'Xzibit', '2015-01-10', 103.99, '2015-02-05'),
	('1234567891234', 'Love','Author Fits','2014-01-01',20,'2015-03-05'),
	('8794768359173', 'Far West','Paul rider','2015-05-23',10,'2015-03-05'),
	('8885757375815', 'Space or Zeus','Rick Rastle','2013-02-21',15,'2015-03-05'),
	('0097857463889', 'Run on!','Fitch Roller','2015-08-17',17,'2015-03-05'),
	('1243476474757', 'Space!','Mike Mittle','2015-09-20',34,'2015-03-05'),
	('9845763657564', 'Internet Speak 101','Mr. Red','2015-01-02',15,'2015-03-05'),
	('6758463457966', 'Twelve Days ''til D-Day','Westle Wallish','2015-02-02',15,'2015-03-05'),
	('5672345457676', 'Most Wanted Pancakes','George Formont','2012-01-01',15,'2015-03-05'),
	('9876549876546', 'Hot Wedding Guide','Kyle River','2013-04-24',16,'2015-03-05'),
	('7645352436767', 'Minecraft Guide to Gold','Mark Door','2015-04-06',25,'2015-03-05'),
	('2345696543356', 'Starcraft Master Guide','Kevin McFreeman','2015-01-01',29,'2015-03-05'),
	('9076541234546', 'Sam the Ape','Genny Kyle','2015-02-05',31,'2015-03-05'),
	('7688674332556', 'Curious John','Kelly Iople','2015-02-06',30,'2015-03-05'),
	('1232345634572', 'Nerves','Maki Komi','2015-02-07',65,'2015-03-05'),
	('7689842345234', 'Mild Pain','Alister Crawlette','2015-02-09',20,'2015-03-05');

INSERT INTO tblItems(ItemId, Title, Author, PublishDate, Price, PricingDate) VALUES
	('M0001', 'Carathago (Cathage, Tunisia)', 'Hartmann Schedel', '1493-01-01', 295.00, '2015-02-04'),
	('M0002', 'The Scottish ruined Scotland', 'Groundskeeper Willie', '2000-01-01', 2295.00, '20015-02-04'),
	('M0003', 'First Map of the World', 'Ron White', '0100-01-01', 150000, '2015-02-04'),
	('M0004', 'Great Southern Africa', 'Steve McAfrinia', '2002-01-01', 350, '2015-02-04'),
	('M0005', 'The True White North', 'Alf Whitfield', '1910-01-01', 3500, '2015-02-04'),
	('M0006','The Great Bel','Rich Price','1920-01-01',3000,'2015-03-05'),
	('M0007','Belize In Colour','Guy La Fromage','1884-01-01',150000,'2015-03-05'),
	('M0008','Burundi Plains','Grace Green','1935-01-06',6000,'2015-03-05'),
	('M0009','Cambodia Old','Peter Patricks','1768-01-01',700,'2015-03-05'),
	('M0010','Cameroon Ridges','Frank New','1904-01-01',4000,'2015-03-05'),
	('M0011','China Regions','William Vlioge','1875-01-01',5000,'2015-03-05'),
	('M0012','Cyprus Hill','Gee Goate','2000-01-01',300,'2015-03-05'),
	('M0013','Czech After the Wars','Mohammed Abed','1955-01-01',5000,'2015-03-05'),
	('M0014','Dominica Before the Republic','Hillary Dutch','1699-01-01',10000,'2015-03-05'),
	('M0015','Salvador Map','Patrick Rice','1894-01-01',10000,'2015-03-05'),
	('M0016','Ethiopia Desert','Ray Dutch','1960-01-01',150000,'2015-03-05'),
	('M0017','Fiji Green','John Snow','1973-01-01',120000,'2015-03-05'),
	('M0018','Ancient Greece','Keeve Lopes','0100-01-01',8000,'2015-03-05'),
	('M0019','Guinea of the Pigs','Yoki Makzi','1200-01-01',50,'2015-03-05'),
	('M0020','Guyana Painting','Ty Rottermound','1920-01-01',2000,'2015-03-05');


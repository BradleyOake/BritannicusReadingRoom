DROP TABLE IF EXISTS tblConditions;

CREATE TABLE tblConditions(
		Grade CHAR(3) PRIMARY KEY,
		ConditionName VARCHAR(20) NOT NULL);
		
INSERT INTO tblConditions(Grade, ConditionName)
 VALUES ('P', 'Poor'),
		('G-', 'Good Minus'),
		('G', 'Good'),
		('G+', 'Good Plus'),
		('VG-', 'Very Good Minus'),
		('VG', 'Very Good'),
		('VG+', 'Very Good Plus'),
		('F-', 'Fine Minus'),
		('F', 'Fine'),
		('F+', 'Fine Plus'),
		('VF-', 'Very Fine Minus'),
		('VF', 'Very Fine'),
		('VF+', 'Very Fine Plus'),
		('NM-', 'Near Mint Minus'),
		('NM', 'Near Mint'),
		('NM+', 'Near Mint Plus'),
		('M', 'Mint'),
		('GM', 'Gem Mint');


SELECT * FROM tblConditions;
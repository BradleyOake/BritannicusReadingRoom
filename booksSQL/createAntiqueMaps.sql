DROP TABLE IF EXISTS tblAntiqueMaps;

CREATE TABLE tblAntiqueMaps(
		ItemId CHAR(13) PRIMARY KEY REFERENCES tblItems(ItemId),
		ConditionGrade CHAR(3),
        Location VARCHAR(50),
        Dimensions VARCHAR(20),
        Coloring VARCHAR(20),
        AcquisitionPrice NUMERIC(15,2),
        InStock BOOLEAN,
        ConditionDescription VARCHAR(500),
        MapDescription VARCHAR(500));

INSERT INTO tblAntiqueMaps(ItemId,ConditionGrade,Location,Dimensions,Coloring,AcquisitionPrice,InStock,ConditionDescription,MapDescription)
		VALUES ('M0001','VG+','Nuremberg','9.5 x 8.5 inches', 'Uncoloured', 150 , TRUE, 'Small tearing in bottom right corner', 'Nice example of Hartmann Schedels view of Carthage in Tunisia, albeit largely fantasy, from the Latin edition of the Nuremberg Chronicle' ),
		('M0002','VG','Scotland','22.5 x 20.5 inches', 'Hand Coloured', 1150, TRUE, 'Water Damage along bottom', 'Good map of some Scottish fields, nothing else... just fields.' ),
		('M0003','GM','World','100 x 80 inches', 'Uncoloured', 100000, FALSE, 'Perfection', 'Totally not a forgery' ),
		('M0004','VF-','Cape Town','32.5 x 40.5 inches', 'Uncoloured', 275, FALSE, 'Fading Ink', 'A perfect showing of the beauty that is Cape Town' ),
		('M0005','VF+','Canada','52.5 x 40.5 inches', 'Uncoloured', 575, FALSE, 'Worn Edges', 'Captures the power of the Canadian Shield' ),
		('M0006','F','Belarus','230 x 70 inches','Uncoloured',2300,TRUE,'Slight aging on corners','A true depiction of the colonies that once inhabited the area.'),
		('M0007','F+','Belize','650 x 500 inches','Coloured',120000,TRUE,'Top left corner small bend','Little is known of this wonderful area, truly a wonder.'),
		('M0008','VG+','Burundi','25 x 35 inches','Hand Painted',5400,TRUE,'Bottom Right corner torn off','A mastery capturing the true topographical points.'),
		('M0009','G+','Cambodia','67 x 67 inches','Colour Printed',500,TRUE,'Large crease down middle. Rip on left and right sides.','A very detailed map of the wet lands'),
		('M0010','P','Cameroon','99 x 100 inches','Uncoloured',3452,TRUE,'Almost unreadable. Torn in half. Missing top right corner', 'This map slightly shows the location of hidden treasure'),
		('M0011','NM','China','120 x 120 inches','Hand Painted',3400,TRUE,'Aged but Perfection','A topographical wonder.'),
		('M0012','G','Cyprus','55 x 55 inches','Uncoloured',120,TRUE, 'Horizontal and Vertical Crease. Very Aged.','A trail map'),
		('M0013','NM+','Czech Republic','24 x 76 inches','Uncoloured',3450,TRUE,'Minimal Aging on ink','Showing various little villages'),
		('M0014','M','Dominica','100 x 100 inches','Uncoloured',7600,TRUE,'Almost Perfection','Wonderful Forests.'),
		('M0015','GM','El Salvador','1000x 1000 inches','Colour Printed',7855,TRUE,'Perfection','Mostly art, but this does display some of the mountain ranges'),
		('M0016','F+','Ethiopia','500 x 600 inches','Colour Printed',120000,TRUE,'Crisp Paper makes for slight rips.','Mostly barren'),
		('M0017','VF+','Fiji','950 x 750 inches','Colour Printed',100000,TRUE,'Folds on corner','The lush green areas'),
		('M0018','G-','Greece','350 x 450 inches','Hand Painted',5000,TRUE,'Missing bottom corners','Ancient greece, mostly sacred place'),
		('M0019','P','Guinea','750 x 600 inches','Hand Painted',20,TRUE,'Burned all around, unreadable','Not much is know of this area, but this map is a reproduction.'),
		('M0020','NM-','Guyana','698 x 356 inches','Hand Painted',150,TRUE,'Single drop of wine on top of map.','Mostly mountain ranges. There is a small pond located in top right.');


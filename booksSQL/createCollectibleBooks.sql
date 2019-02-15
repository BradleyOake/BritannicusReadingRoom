DROP TABLE IF EXISTS tblCollectibleBooks;

CREATE TABLE tblCollectibleBooks(
		ItemId CHAR(13) PRIMARY KEY REFERENCES tblItems(ItemId),
		BookLanguage VARCHAR(20),
		ConditionGrade CHAR(3),
        AcquisitionPrice NUMERIC(15,2),
        InStock BOOLEAN NOT NULL,
        ConditionDescription VARCHAR(500),
        BookDescription VARCHAR(500));
		
INSERT INTO tblCollectibleBooks(ItemId, BookLanguage, ConditionGrade, AcquisitionPrice, InStock, ConditionDescription,BookDescription)
	VALUES  ('B0001', 'English', 'VG+', 205.67, FALSE, 'Binding in great condition. Small rips on pages 56 through 97.','Orphan steals then doesnt steal'),
			('B0002', 'English', 'G+', 205.67, FALSE, 'Binding broken','The lady was crazy, but then she was okay I guess.'),
			('B0003', 'English', 'F+', 205.67, TRUE, 'Bottom left corner rounded.','1 of 15 copies that were printed by Weimar Cranach Press'),
			('B0004', 'English', 'F', 205.67, TRUE, 'Corners bent.','Privately Printed in the Department of English At University College, London,1936. Most of the copies were destroyed in a fire that destroyed part of the building in which the press was housed. Only 14 copies are said to have survived.'),
			('B0005', 'English', 'NM', 205.67, TRUE, 'Stunning condition. Perfection','Everyone is poor. Educated man is not racist. Uneducated man is racist.'),
			('B0006', 'English', 'P', 205.67, TRUE, 'Pages in folder to keep together. Burns on some pages.','Two men looking for honest work, well... one was just looking for rabbits.'),
			('B0007', 'English', 'G+', 3545.99, TRUE, 'Binding ripped, pages torn.','A story about a man and his love for a white whale.'),
			('B0008', 'English', 'VF+', 2935.99, TRUE, 'Bends in pages.','Some things go to a circus'),
			('B0009', 'French',  'VG+',1000,TRUE,'Front page torn','First Edition -- A french book about the riddles that keep life interesting.'),
			('B0010', 'English', 'G+',3000,TRUE,'Missing pages','Limited Printing -- American soldiers run from a hoarde of zombie nazi''s'),
			('B0011', 'English', 'NM',21567,TRUE,'Almost perfect, aging spots','Last Copy- A women fights in a sexist world.'),
			('B0012', 'English', 'GM',100,TRUE,'Perfection','One lawyer must fight for his right to party'),
			('B0013', 'English', 'P',0,TRUE,'Missing pages, no cover','Author''s first book. An alien tries to fit in.'),
			('B0014', 'English', 'G-',20,TRUE,'Cover has pen on it, pages bent','Southern book about brothers'),
			('B0015', 'English', 'VF',45000,TRUE,'Bent corners','A wealthy mother dies a cold dark death.'),
			('B0016', 'English', 'VF-',100,TRUE,'Page 45 corner ripped','A scary tale'),
			('B0017', 'Spanish', 'M',200,TRUE,'Perfect','A manuscript that describes the life of a drunk.'),
			('B0018', 'English', 'NM-',500,TRUE,'Ware on binding','A singer biography'),
			('B0019', 'English', 'F',500,TRUE,'Cracks in binding','Elvis, the king of rock. A one of a kind book.'),
			('B0020', 'Russian', 'VF-',10000,TRUE,'Yellow pages','Russian protest book'),
			('B0021', 'English', 'VG',12000,TRUE,'Bent cover','Singer turned man');
			


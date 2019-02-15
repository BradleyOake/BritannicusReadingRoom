select * from tblitems where itemid ~ '^[0-9]'

SELECT tblitems.itemid, tblitems.title, tblitems.author, tblnewbooks.publisher, tblitems.publishdate, tblnewbooks.bindingtype, tblnewbooks.quantity, tblitems.price 
FROM tblitems, tblnewbooks 
WHERE tblitems.itemid ~ '^[0-9]'
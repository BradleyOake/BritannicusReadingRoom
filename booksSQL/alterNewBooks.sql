ALTER TABLE public.tblnewbooks
DROP CONSTRAINT tblnewbooks_itemid_fkey,
ADD CONSTRAINT pref_scores_gid_fkey
   FOREIGN KEY (itemid)
   REFERENCES tblitems(itemid)
   ON DELETE CASCADE;
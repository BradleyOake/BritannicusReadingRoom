ALTER TABLE public.tblcollectiblebooks
DROP CONSTRAINT tblcollectiblebooks_itemid_fkey,
ADD CONSTRAINT pref_scores_gid_fkey
   FOREIGN KEY (itemid)
   REFERENCES tblitems(itemid)
   ON DELETE CASCADE;
SELECT id,
       name,
       deleted,
       created,
       updated
FROM rezeptbuch_categories
WHERE deleted = :deleted
  AND id = :id;

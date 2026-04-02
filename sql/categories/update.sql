UPDATE rezeptbuch_categories
SET name    = :name,
    deleted = :deleted
WHERE id = :id;

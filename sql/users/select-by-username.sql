SELECT id,
       username,
       password,
       administrator,
       deleted,
       created,
       updated
FROM rezeptbuch_users
WHERE deleted = :deleted
  AND username = :username;

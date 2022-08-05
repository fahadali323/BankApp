ALTER TABLE Bank_Accounts
MODIFY COLUMN balance BIGINT;
ALTER TABLE Bank_Accounts
Alter balance set default 0;
UPDATE Bank_Accounts
SET account_type = 'world'
WHERE id = -1;

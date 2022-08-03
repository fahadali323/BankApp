ALTER TABLE Users
ADD firstName varchar(25) DEFAULT NULL;
ALTER TABLE Users
ADD lastName varchar(25) DEFAULT NULL;
ALTER TABLE Users
ADD visibility VARCHAR(15) DEFAULT 'public';

TABLE menu
itemName VARCHAR (50) PRIMARY KEY NOT NULL,
category VARCHAR (50) NOT NULL ,
price DECIMAL (5.2),

UPDATE menu
SET price = price *1.1
WHERE category = 'Soups'
OR category = 'Salads'
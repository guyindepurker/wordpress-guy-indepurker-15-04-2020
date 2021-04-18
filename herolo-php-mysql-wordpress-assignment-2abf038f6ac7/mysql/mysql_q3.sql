TABLE products
id INTEGER NOT NULL PRIMARY KEY, 
name  VARCHAR (30) NOT NULL,
price INTEGER NOT NULL


SELECT name,price FROM products WHERE price = (SELECT MIN(price) FROM products)

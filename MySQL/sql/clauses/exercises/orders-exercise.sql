USE sql_store;

SELECT *
FROM orders
WHERE order_date > '2018-12-31'; -- get every order done after 2018

SELECT *
FROM orders
WHERE order_date >= '2019-01-01'; -- same thing but better
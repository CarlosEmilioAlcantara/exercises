USE sql_store;

-- Will join the orders and customers table based on whichever columns they
-- happen to share
SELECT *
FROM orders o
NATURAL JOIN customers c
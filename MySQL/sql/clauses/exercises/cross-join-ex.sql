-- Do a cross join between shippers and products
-- using the implicit syntax
USE sql_store;

SELECT *
FROM shippers sh, products p;

-- and using the explicit syntax
SELECT *
FROM shippers sh
CROSS JOIN products p
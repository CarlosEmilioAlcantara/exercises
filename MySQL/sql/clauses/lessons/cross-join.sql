USE sql_store;

-- Joins each customer's first name with every product, like this:
-- Amber: Baron Bunny
-- Amber: Raven Bow
-- etc...
-- Then order by customer's first name
SELECT
    c.first_name AS customer,
    p.name AS product
FROM customers c
CROSS JOIN products p
ORDER BY c.first_name;

-- Cross joins can also be implicit
SELECT
    c.first_name AS customer,
    p.name AS product
FROM customers c, products p
ORDER BY c.first_name;
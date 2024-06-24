USE sql_store;

SELECT
    *
FROM
    customers
WHERE
    state = 'VA'
    OR state = 'GA'
    OR state = 'FL'; -- get all customers from VA, GA, and FL


SELECT
    *
FROM
    customers
WHERE
    state IN ('VA', 'FL', 'GA'); -- same as above but using IN 
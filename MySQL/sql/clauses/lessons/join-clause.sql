USE sql_store;

-- join the orders and customers table via their shared column customer_id
SELECT
    *
FROM
    orders
JOIN
    customers
    ON orders.customer_id = customers.customer_id 

-- this is the point of joining getting values from another table that 
-- has a shared column
SELECT
    order_id, first_name, last_name
FROM
    orders
JOIN
    customers
    ON orders.customer_id = customers.customer_id 

-- this won't work as customer_id is in both tables sql would have an
-- ambiguous error where it doesn't know in which table it should get
-- the customer_id column from
SELECT
    order_id, customer_id, first_name, last_name
FROM
    orders
JOIN
    customers
    ON orders.customer_id = customers.customer_id

-- to solve the issue above prefixed whichever table to get the column from
SELECT
    order_id, customers.customer_id, first_name, last_name
FROM
    orders
JOIN
    customers
    ON orders.customer_id = customers.customer_id

SELECT
    order_id, orders.customer_id, first_name, last_name
FROM
    orders
JOIN
    customers
    ON orders.customer_id = customers.customer_id

-- aliasing your tables would make prefixing much easier
SELECT
    order_id, o.customer_id, first_name, last_name
FROM
    orders AS o
JOIN
    customers AS c
    ON o.customer_id = c.customer_id

-- AS clause can be completely foregone when aliasing
SELECT
    order_id, o.customer_id, first_name, last_name
FROM
    orders o
JOIN
    customers c
    ON o.customer_id = c.customer_id
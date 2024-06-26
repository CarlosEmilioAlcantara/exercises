USE sql_store;

-- Get the customers whose
-- first names are Elka or ambur
SELECT
    *
FROM
    customers
WHERE
    first_name REGEXP 'elka|ambur'

-- last names end with ey or on
SELECT
    *
FROM
    customers
WHERE
    last_name REGEXP 'ey$|on$'

-- last names start with my or contains se
SELECT
    *
FROM
    customers
WHERE
    last_name REGEXP '^my|se'

-- last names contain b follwed by r or u
SELECT
    *
FROM
    customers
WHERE
    last_name REGEXP 'b[ru]'

SELECT
    *
FROM
    customers
WHERE
    last_name REGEXP 'br|bu' -- same as above but with |
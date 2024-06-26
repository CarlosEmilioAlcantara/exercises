-- Get the customers whose addresses contain trail or avenue
-- and phone numbers ending with 9

SELECT 
    *
FROM
    customers
WHERE
    address LIKE '%trail%' 
    OR
    address LIKE '%avenue%' -- match any address with trail or avenue
                            -- note how case insensitive MySQL is

SELECT
    *
FROM
    customers
WHERE
    phone LIKE '%9' -- incase of different number formats we do this instead
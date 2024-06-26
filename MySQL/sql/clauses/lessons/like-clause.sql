USE sql_store;

SELECT 
    *
FROM
    customers
WHERE
    last_name LIKE 'b%' -- match any last name beggining with b
                        -- % => any number of characters

SELECT 
    *
FROM
    customers
WHERE
    last_name LIKE '%b' -- match any last name ending with b

SELECT 
    *
FROM
    customers
WHERE
    last_name LIKE '%b%' -- match any last name with b somewhere in the middle

SELECT 
    *
FROM
    customers
WHERE
    last_name LIKE '_____y' -- match any last name ending with y and with 
                            -- exactly 5 characters before y
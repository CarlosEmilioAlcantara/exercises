USE sql_store;

SELECT 
    *
FROM
    customers
WHERE
    last_name REGEXP '^field' -- match any last name beggining with field

SELECT 
    *
FROM
    customers
WHERE
    last_name REGEXP 'field$' -- match any last name ending with field

SELECT 
    *
FROM
    customers
WHERE
    last_name REGEXP 'field|mac' -- match any last name with field or mac

SELECT 
    *
FROM
    customers
WHERE
    last_name REGEXP '[gim]e' -- match any last name with ge, ie, or me
                              -- anywhere in the string

SELECT 
    *
FROM
    customers
WHERE
    last_name REGEXP '[a-h]e' -- match any last name with a to h + e
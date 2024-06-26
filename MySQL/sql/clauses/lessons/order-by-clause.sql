USE sql_store;

SELECT
    *
FROM
    customers
ORDER BY    
    first_name; -- sort customers name ascending order

SELECT
    *
FROM
    customers
ORDER BY    
    first_name DESC; -- sort customers name descending order

SELECT
    *
FROM
    customers
ORDER BY    
    state, first_name DESC; -- sort customers by their state in ascending order
                            -- first then first_name in descending order

SELECT
    *
FROM
    customers
ORDER BY    
    birth_date; -- sort customers from oldest to youngest

SELECT
    first_name, last_name, 10 AS points 
FROM
    customers
ORDER BY    
    points, first_name; -- sort customers by the new alias
                        -- note that since they all have the point of 10
                        -- just sorting by points won't really do anything
                        -- this is merely an example that you can order by 
                        -- alias 

SELECT
    *
FROM
    customers
ORDER BY    
    birth_date; -- sort customers from oldest to youngest

SELECT
    first_name, last_name, 10 AS points 
FROM
    customers
ORDER BY    
    1, 2 -- sort by 1 => the first column selected so first_name, 
         -- and 2 => the second column selected so last_name
         -- A bit simpler but should be avoided as columns selected are
         -- quite volatile
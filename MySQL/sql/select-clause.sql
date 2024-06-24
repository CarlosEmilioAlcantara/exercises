SELECT first_name, last_name -- select only these certain columns
FROM customers

SELECT last_name, first_name -- query result arrangement can be changed
FROM customers               -- depending on column selection order
                             -- this will display the last_name column first


SELECT last_name, first_name, points + 10 -- if a column contains integers
FROM customers                            -- mathematical operations can be done
                                          -- on the values


SELECT last_name, first_name, points, points + 10 -- Like above but show
FROM customers                                    -- original values of points

SELECT 
    last_name,  -- You can break up a clause by having each column in a
    first_name, -- line
    points, 
    (points + 10) * 100 -- Keep in mind that MySQL follows PEMDAS
FROM customers 

SELECT 
    last_name,  
    first_name, 
    points, 
    (points + 10) * 100 AS discount -- Rename columns using the AS clause
FROM customers 
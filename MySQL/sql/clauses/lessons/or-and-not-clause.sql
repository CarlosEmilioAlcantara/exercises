USE sql_store;

SELECT *
FROM customers
WHERE birth_date > '1989-12-31' AND points > 1000; -- from 1990 and above
                                                   -- and with points
                                                   -- greater than 1000

SELECT *
FROM customers
WHERE birth_date >= '1990-01-01' OR points > 1000; -- from 1990 and above
                                                   -- or with points
                                                   -- greater than 1000

SELECT *
FROM customers
WHERE 
    birth_date >= '1990-01-01' -- from 1990 and above
    OR (points > 1000          -- or with points greater than 1000
    AND state = 'VA');         -- and living in VA

SELECT *
FROM customers
WHERE 
    birth_date >= '1990-01-01' OR (points > 1000 AND state = 'VA');          
    -- like above but using parentheses to separate operators

SELECT 
    *
FROM 
    customers
WHERE
    birth_date >= '1990-01-01' -- mozilla style
    OR (points > 1000 
    AND state = 'VA');          

SELECT 
    *
FROM 
    customers
WHERE NOT
    birth_date >= '1990-01-01' -- using NOT to get customers not born after 
    OR (points > 1000          -- 1989 or do not have points greater than 1000
    AND state = 'VA');         -- and not living in VA

SELECT
    *
FROM
    customers
WHERE NOT
    (birth_date >= '1990-01-01' OR points > 1000); -- reminder to always use
                                                   -- parentheses when
                                                   -- comppounding logical 
                                                   -- otherwise results will 
                                                   -- probably be not what you 
                                                   -- want

SELECT
    *
FROM
    customers
WHERE
    birth_date <= '1990-01-01' AND points < 1000; -- like above but not using
                                                  -- negation
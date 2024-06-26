USE sql_store;

SELECT
    *
FROM
    customers
LIMIT    
    9; -- limit row of records to only 9

SELECT
    *
FROM
    customers
LIMIT    
    6, 3; -- limit row of records to the 7th to 9th record
          -- this is called an offset, it means skip the first six records
          -- then display the following three rows
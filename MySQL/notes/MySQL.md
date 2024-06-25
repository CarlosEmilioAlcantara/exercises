# Table of Contents
- [Table of Contents](#table-of-contents)
- [Database](#database)
  - [Database Management System (DBMS)](#database-management-system-dbms)
    - [Relational DBMS](#relational-dbms)
    - [Non-relational DBMS](#non-relational-dbms)
- [MySQL](#mysql)
  - [Schema](#schema)
  - [Tables](#tables)
  - [Retrieving from Tables](#retrieving-from-tables)
    - [USE Statement](#use-statement)
    - [SELECT Statement](#select-statement)
  - [Multi-statement MySQL Queries](#multi-statement-mysql-queries)
  - [MySQL Clauses](#mysql-clauses)
    - [FROM Clause](#from-clause)
    - [WHERE Clause](#where-clause)
    - [ORDER BY Clause](#order-by-clause)
    - [AS Clause](#as-clause)
    - [DISTINCT Clause](#distinct-clause)
  - [Query Execution Order](#query-execution-order)
  - [Comments in MySQL](#comments-in-mysql)
  - [Statements vs Clauses](#statements-vs-clauses)
  - [Comparison Operators](#comparison-operators)
    - [Comparing Integers](#comparing-integers)
    - [Comparing Strings](#comparing-strings)
    - [Comparing Dates](#comparing-dates)
  - [Logical Operators](#logical-operators)
    - [AND](#and)
    - [OR](#or)
    - [NOT](#not)
    - [IN](#in)
    - [BETWEEN](#between)

# Database
A collection of data stored in a format that can be easily accessed.

## Database Management System (DBMS)
Allows for management and modification of databases through queries. Queries are requests used to access data from a database for retrieving and manipulating.

### Relational DBMS
Data is stored in tables connected through relationships. Each table stores data about an object.

<pre>
Customer <-> Orders
               ^
               |
               ⌄
            Products
</pre>

An example of a database containing three table. The customer is related to the orders table via what exactly he or she bought while the orders table is related to the products table as the orders table list exactly what products are being bought.

Examples of Relational DBMS:
1. MySQL
2. SQLite
3. MariaDB

Example of Relational DBMS Code (Query):
> ```sql
> SELECT *
> FROM products
> WHERE category = 'food'
> ORDER BY price
> ```

### Non-relational DBMS
Data is not stored in tables and there are no relationships.

Examples:
1. Spreadsheets
2. JSON
3. Text files
4. NoSQL

# MySQL
A widely used relational database management system. Free and open-source.

## Schema
A set of database objects -- such as tables and views. It includes the structure of those objects, but not the actual data that they contain.

![Schemas and tables in phpmyadmin](images/Capture.PNG)

## Tables
Contains the rows and columns of data. Each column has a unique name used to identify the type of data stored in it. Each row is a record of multiple kinds of data pertaining to a single object.

![Columns and rows in a table](images/a-table.PNG)

The above table contains the column customer_id containing a unique id representing each customer. The other columns contain data partaining to the name, birthdate, number, location, and customer points.

## Retrieving from Tables
### USE Statement
**USE** - select a database for querying.

> ```sql
> `USE sql_store`
> ```

The above code will select the database sql_store.

### SELECT Statement
**SELECT** - select columns in a table for querying.

> ```sql
> SELECT * FROM orders
> ```

The above code will select all columns in a table (and display them if you're using a visual database design tool). 

> ```sql
> SELECT customer_id, first_name FROM orders
> ```

The above code will select just the columns customer_id and first_name.

## Multi-statement MySQL Queries
> ```sql
> USE sql_store;
> SELECT customer_id, first_name FROM orders;
> ```

Keep in mind to have a semi-colon at the end of each statement in a multi-statement query.

## MySQL Clauses
Clauses are MySQL functions that help access a particular set of records.

Examples of clauses are:
1. WHERE - filter the query result where data is of specific value.
2. ORDER BY - arrange the result set either in ascending or descending order.
3. HAVING - apply functions in the query with the WHERE clause.
4. TOP - determine the number of record rows to be shown in the result.
5. GROUP BY - group rows that have the same values in the result set.
6. FROM - determines which table in a database to gather records from.
7. SELECT - select columns in a table for querying.
8. USE - select a database for querying.
9. AS - rename a column.
10. DISTINCT - remove duplicates of a result.

### FROM Clause
**FROM** - determines which table in a database to gather records from.

> ```sql
> SELECT * FROM customers
> ```

The above code will gather every record from the table customers.

### WHERE Clause
**WHERE** - filter the query result where data is of specific value.

> ```sql
> SELECT * FROM customers 
> WHERE customer_id = 1
> ```

The above code will filter the result so as to only show the record where the value of the column customer_id is equal to 1.

### ORDER BY Clause
**ORDER BY** - arrange the result set either in ascending rcending order.

> ```sql
> SELECT * FROM customers
> ORDER BY first_name
> ```

The above code will order the query result/show the records in descending order.

### AS Clause
**AS** - rename a column. Useful for when columns are created on query.

> ```sql
> SELECT 
>     last_name,  
>     first_name, 
>     points, 
>     (points + 10) * 100 AS discount -- Rename columns using the AS clause
> FROM customers 
> ```

The above code will rename the column where mathematical operation on the values of points are shown. Otherwise its name will be '(points + 10) * 100' but now it will display as discount which is way better.

### DISTINCT Clause
**DISTINCT** - remove duplicates of a result. Useful if you only need to count one of the results.

> ```sql
> SELECT DISTINCT state -- filter result to only show one result of each data
> FROM customers;       -- in a column, so if two people live in VA instead of
>                       -- displaying two VAs the result will only be one VA
> ```

## Query Execution Order
> SELECT > DISTINCT > AS > FROM/JOIN > WHERE > GROUP BY > HAVING > ORDER BY

The execution of queries have an order which cannot be changed.

## Comments in MySQL
> ```sql
> -- This is a comment that will not be executed
> SELECT * -- Select every column
> ```

To comment out lines in MySQL use two dashes and a space, '-- ', like so.

## Statements vs Clauses
> ```sql
> SELECT * FROM customers
> ```

The above is a statement, basically it's a complete line of a MySQL query while below is a clause, a single keyword that performs a function.

> `SELECT`

## Comparison Operators
These operators are used in the WHERE clause to filter the results to a certain value or up to a certain value or below a certain value or whatever that is not that value.

Comparison operators:
1. \> - greater than.
2. \>= - greater than or equal to.
3. < - less than.
4. <= - less than or equal to.
5. = - equal to
6. != or <> - not equal to.

### Comparing Integers
> ```sql
> SELECT *
> FROM customers
> WHERE points > 3000; -- retrieve all records where a customer's points is
>                      -- greater than 3000
> ```

The above code will filter the results to records with points value greater than 3000.

### Comparing Strings
> ```sql
> SELECT *
> FROM customers
> WHERE state = 'va'; -- retrieve all records where a customer's state is VA
>                     -- note how the query string is all lower case
>                     -- MySQL is case-insensitive
> ```

The above code will filter the results to all customers with a state of VA.

> ```sql
> SELECT *
> FROM customers
> WHERE state <> 'va'; -- retrieve all records where a customer's state is 
>                      -- not VA
>                      -- note the usage of <> instead of != to comply with
>                      -- standards
> ```

The above code will filter the results to all customers that is not from the state of VA.

### Comparing Dates
> ```sql
> SELECT *
> FROM persons
> WHERE birth_day > '2009-11-31' -- retrieve everyone who is Gen Alpha (skibidi)
> ```

The above code will get anyone who was born from the year 2010 onwards, basically anyone who is Gen Alpha (no cap).

## Logical Operators
Logical operators combine logical conditions in a WHERE clause to create complex queries.

List of MySQL Logical Operators:
1. ALL - TRUE if all of the subquery values are TRUE.
2. AND - TRUE if the conditions separated by AND is TRUE.
3. ANY - TRUE if any of the subquery values is TRUE.
4. BETWEEN - TRUE if the operand is within the range of comparisons.
5. EXISTS - TRUE if the subquery returns one or more records.
6. IN - TRUE if the operand is equal to one of a list of expressions.
7. LIKE - TRUE if the operand matches a pattern.
8. NOT - Displays a record if the condition(s) is NOT TRUE.
9. OR - TRUE if any of the conditions separated by OR is TRUE.
10. SOME - TRUE if any of the subquery values meet the condition.
    
### AND
**AND** - returns results if both subqueries returns a record where the desired data are both found.

> ```sql
> SELECT *
> FROM customers
> WHERE birth_date > '1989-12-31' AND points > 1000; -- from 1990 and above
>                                                    -- and with points
>                                                    -- greater than 1000
> ```

The above code will get every customer with birthdate from 1990 onwards and has points greater than 1000.

### OR
**OR** - returns results if either subquery returns a record where the desired data is found.

> ```sql
> SELECT *
> FROM customers
> WHERE birth_date >= '1990-01-01' OR points > 1000; -- from 1990 and above
>                                                    -- or with points
>                                                    -- greater than 1000
> ```

The above code will get every customer with birthdate from 1990 onwards or has points greater than 1000.

### NOT
**NOT** - negate the subquery and return the opposite.

> ```sql
> SELECT 
>     *
> FROM 
>     customers
> WHERE NOT
>     birth_date >= '1990-01-01' -- using NOT to get customers not born after 
>     OR (points > 1000          -- 1989 or do not have points greater than 1000
>     AND state = 'VA');         -- and not living in VA
> ```

The above code will get every customer with birthdate below 1990 onwards and has points less than 1000.

### IN
**IN** - return records where one of the listed items is found. 

> ```sql
SELECT
    *
FROM
    customers
WHERE
    state IN ('VA', 'FL', 'GA'); -- same as above but using IN 
> ```

The above code will get all records where the state is any of these three: VA, FL, GA.

> ```sql
SELECT
    *
FROM
    customers
WHERE
    state NOT IN ('VA', 'FL', 'GA'); -- same as above but using IN 
> ```

Using NOT clause to negate the query.

### BETWEEN
**BETWEEN** - return records with data in range of the two given values

> ```sql
SELECT
    *
FROM
    customers
WHERE
    points
    BETWEEN 1000 AND 3000; -- same thing but using BETWEEN, better
> ```

The above code will get values between 1000 and 3000.


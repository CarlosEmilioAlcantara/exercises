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
  - [Query Execution Order](#query-execution-order)
  - [Comments in MySQL](#comments-in-mysql)
  - [Statements vs Clauses](#statements-vs-clauses)

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
> `SELECT *`
> `FROM products`
> `WHERE category = 'food'`
> `ORDER BY price`

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

> `USE sql_store`

The above code will select the database sql_store.

### SELECT Statement
**SELECT** - select columns in a table for querying.

> `SELECT * FROM` `` `orders` ``

The above code will select all columns in a table (and display them if you're using a visual database design tool). 

> `SELECT customer_id, first_name FROM` `` `orders` ``

The above code will select just the columns customer_id and first_name.

## Multi-statement MySQL Queries
> `USE sql_store;`
> `SELECT customer_id, first_name FROM` `` `orders`; ``

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

### FROM Clause
**FROM** - determines which table in a database to gather records from.

> `SELECT * FROM` `` `customers` ``

The above code will gather every record from the table customers.

### WHERE Clause
**WHERE** - filter the query result where data is of specific value.

> `SELECT * FROM` `` `customers` ``
> `WHERE customer_id = 1`

The above code will filter the result so as to only show the record where the value of the column customer_id is equal to 1.

### ORDER BY Clause
**ORDER BY** - arrange the result set either in ascending or descending order.

> `SELECT * FROM` `` `customers` ``
> `ORDER BY first_name`

The above code will order the query result/show the records in descending order.

### AS Clause
**AS** - rename a column. Useful for when columns are created on query.

> `SELECT `
> `    last_name,  `
> `    first_name, `
> `    points, `
> `    (points + 10) * 100 AS discount -- Rename columns using the AS clause`
> `FROM customers `

The above code will rename the column where mathematical operation on the values of points are shown. Otherwise its name will be '(points + 10) * 100' but now it will display as discount which is way better.

## Query Execution Order
> SELECT > FROM/JOIN > WHERE > GROUP BY > HAVING > ORDER BY

The execution of queries have an order which cannot be changed.

## Comments in MySQL
> `-- This is a comment that will not be executed`
> `SELECT * -- Select every column`

To comment out lines in MySQL use two dashes and a space, '-- ', like so.

## Statements vs Clauses
> `SELECT * FROM` `` `customers` ``

The above is a statement, basically it's a complete line of a MySQL query while below is a clause, a single keyword that performs a function.

> `SELECT`


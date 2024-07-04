USE sql_hr;

-- This self join gets all the value of reports_to and matches it to the 
-- equivalent value in employee_id to create on organization chart (The
-- employees and who their manager are)
SELECT 
    e.employee_id,
    e.first_name,
    m.first_name AS manager
FROM
    employees e
JOIN
    employees m
    ON e.reports_to = m.employee_id
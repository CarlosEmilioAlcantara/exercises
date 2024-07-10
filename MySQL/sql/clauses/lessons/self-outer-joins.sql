USE sql_hr;

-- This will only show all the employees managed by the manager
-- Since no one manages the manager he or she will have no records shown
SELECT
    e.employee_id,
    e.first_name,
    m.first_name AS manager
FROM employees e
JOIN employees m
    ON e.reports_to = m.employee_id;

-- This will fix the problem by displaying the manager's records even if he or
-- she has no manager
SELECT
    e.employee_id,
    e.first_name,
    m.first_name AS manager
FROM employees e
LEFT JOIN employees m
    ON e.reports_to = m.employee_id;
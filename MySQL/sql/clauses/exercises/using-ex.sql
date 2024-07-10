-- Write a query that joins the payments table with the clients table and
-- payment_methods table to show the date, client name, payment amount, and
-- payment method name
USE sql_invoicing;

SELECT
    p.date,
    c.name,
    p.amount,
    pm.name
FROM clients c
JOIN payments p
    USING (client_id)
JOIN payment_methods pm
    ON p.payment_method = pm.payment_method_id;
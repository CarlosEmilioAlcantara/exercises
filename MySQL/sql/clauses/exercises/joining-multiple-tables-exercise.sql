USE sql_invoicing;

-- Join the payments table with the payment_methods table and the clients table.
-- Show the payment_id, client_id, invoice_id, client_name, date, amount, and
-- payment_method

SELECT
    p.payment_id,
    c.client_id,
    p.invoice_id,
    c.name AS client,
    p.date,
    p.amount,
    pm.payment_method_id,
    pm.name payment_method_name
FROM payments p
JOIN payment_methods pm
    ON p.payment_method = pm.payment_method_id
JOIN clients c
    ON p.client_id = c.client_id
;
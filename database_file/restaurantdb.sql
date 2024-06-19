
-- Create the database
-- CREATE DATABASE restaurantdb;

-- select the database

-- USE restaurantdb;


-- Create the staff table
CREATE TABLE tblstaff (
    staff_id   INT AUTO_INCREMENT PRIMARY KEY,
    staff_name VARCHAR(255),
    sex     CHAR(10),
    phone   VARCHAR(255),
    address VARCHAR(255)
);

-- Insert the staff table
INSERT INTO tblstaff (staff_name, sex, phone, address) VALUES
('General', 'Male', 'None', 'Battambang'),
('Admin', 'Male', '012 123 456', 'Battambang'),
('Owner', 'Female', '012 789 012', 'Battambang');

-- Select the staff table
SELECT * FROM tblstaff;




-- Create the customer table
CREATE TABLE tblcustomer (
    customer_id   INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(50),
    contact       VARCHAR(255)
);

-- Insert the customer table
INSERT INTO tblcustomer (customer_name, contact) VALUES
('General', 'None'),
('Pheareak', '012 234 567'),
('Borit', 'borit@gmail.com');

-- Select the customer table
SELECT * FROM tblcustomer;




-- Create the table table
CREATE TABLE tbltable (
    table_id   INT AUTO_INCREMENT PRIMARY KEY,
    table_name VARCHAR(50)
);

-- Insert the table table
INSERT INTO tbltable (table_name) VALUES
('General'),
('VIP A01'),
('VIP A02');

-- Select the table table
SELECT * FROM tbltable;




-- Create the item table
CREATE TABLE tblitem (
    item_id    INT AUTO_INCREMENT PRIMARY KEY,
    item_name  VARCHAR(50),
    unit_price FLOAT
);

-- Insert the item table
INSERT INTO tblitem (item_name, unit_price) VALUES
('Chicken', 0.5),
('Soup', 1.5),
('Khmer Noodle', 0.75);

-- Select the item table
SELECT * FROM tblitem;




-- Create the order table
CREATE TABLE tblorder (
    order_id     INT AUTO_INCREMENT PRIMARY KEY,
    date_created DATETIME,
    staff_id     INT,
    customer_id  INT,
    table_id     INT,
    STATUS       VARCHAR(10),
    total        FLOAT,
    
    FOREIGN KEY (staff_id) REFERENCES tblstaff (staff_id),
    FOREIGN KEY (customer_id) REFERENCES tblcustomer (customer_id),
    FOREIGN KEY (table_id) REFERENCES tbltable (table_id)
);

-- Insert the order table
INSERT INTO tblorder (date_created, staff_id, customer_id, table_id, STATUS, total) VALUES
('2014-06-19 12:39:00', 2, 1, 2, 'No Paid', 6.5);

-- Select the order table
SELECT * FROM tblorder;




-- Create the orderdetail table
CREATE TABLE tblorderdetail (
    order_id     INT,
    item_id      INT,
    price        FLOAT,
    quantity     INT,
    amount       FLOAT,
    
    FOREIGN KEY (item_id) REFERENCES tblitem (item_id)
);

-- Insert the orderdetail table
INSERT INTO tblorderdetail (order_id, item_id, price, quantity, amount) VALUES
(1, 2, 1.5, 3, 4.5),
(1, 1, 0.5, 1, 0.5),
(1, 3, 0.75, 2, 1.5);

-- Select the orderdetail table
SELECT * FROM tblorderdetail;




-- Create the vpayment view
CREATE VIEW vpayment AS
SELECT 
   order_id,
   date_created,
   tblstaff.staff_id,
   tblstaff.staff_name,
   tblcustomer.customer_id,
   tblcustomer.customer_name,
   tbltable.table_id,
   tbltable.table_name,
   STATUS,
   total
FROM tblorder
INNER JOIN tblstaff ON tblstaff.staff_id = tblorder.staff_id
INNER JOIN tblcustomer ON tblcustomer.customer_id = tblorder.customer_id
INNER JOIN tbltable ON tbltable.table_id = tblorder.table_id;

SELECT * FROM vpayment;


-- Create the vieworder view
CREATE VIEW vieworder AS
SELECT 
   order_id,
   date_created,
   tblstaff.staff_id,
   tblstaff.staff_name,
   tblcustomer.customer_id,
   tblcustomer.customer_name,
   tbltable.table_id,
   tbltable.table_name,
   STATUS,
   total
FROM tblorder
INNER JOIN tblstaff ON tblstaff.staff_id = tblorder.staff_id
INNER JOIN tblcustomer ON tblcustomer.customer_id = tblorder.customer_id
INNER JOIN tbltable ON tbltable.table_id = tblorder.table_id;

SELECT * FROM vieworder;

-- Create the vieworder view
CREATE VIEW vieworderdetail AS
SELECT tblorder.order_id, 
   tblorder.date_created, 
   tblstaff.staff_id, 
   tblstaff.staff_name, 
   tblcustomer.customer_id, 
   tblcustomer.customer_name, 
   tbltable.table_id,
   tbltable.table_name, 
   tblorder.STATUS, 
   tblorder.total, 
   tblitem.item_id, 
   tblitem.item_name, 
   quantity, 
   price, 
   amount
FROM tblorderdetail
INNER JOIN tblorder ON tblorderdetail.order_id = tblorder.order_id
INNER JOIN tblstaff ON tblorder.staff_id = tblstaff.staff_id
INNER JOIN tblcustomer ON tblorder.customer_id = tblcustomer.customer_id
INNER JOIN tbltable ON tblorder.table_id = tbltable.table_id
INNER JOIN tblitem ON tblorderdetail.item_id = tblitem.item_id

-- Select the vieworderdetail view
SELECT * FROM vieworderdetail;
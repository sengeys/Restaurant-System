-- Create the database
CREATE DATABASE IF NOT EXISTS restaurantdb;

-- Select the database
USE restaurantdb;

-- Create the staff table
CREATE TABLE IF NOT EXISTS tblstaff (
    staff_id    INT AUTO_INCREMENT PRIMARY KEY,
    staff_name  VARCHAR(255) NOT NULL,
    sex         VARCHAR(6) NOT NULL,
    phone       VARCHAR(20) NOT NULL,
    address     VARCHAR(255)
);

-- Create the user table
CREATE TABLE IF NOT EXISTS tbluser (
    user_id     INT PRIMARY KEY,
    email       VARCHAR(100) NOT NULL UNIQUE,
    pass_word   VARCHAR(100) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES tblstaff (staff_id)
);

-- Create the customer table
CREATE TABLE IF NOT EXISTS tblcustomer (
    customer_id     INT AUTO_INCREMENT PRIMARY KEY,
    customer_name   VARCHAR(50) NOT NULL,
    contact         VARCHAR(100) NOT NULL
);

-- Insert sample data into tblcustomer
INSERT INTO tblcustomer (customer_name, contact) VALUES
('General', 'None'),
('Pheareak', '012 234 567'),
('Borit', 'borit@gmail.com');

-- Create the table table
CREATE TABLE IF NOT EXISTS tbltable (
    table_id    INT AUTO_INCREMENT PRIMARY KEY,
    table_name  VARCHAR(50) NOT NULL
);

-- Insert sample data into tbltable
INSERT INTO tbltable (table_name) VALUES 
('General'),
('VIP A01'),
('VIP A02');

-- Create the item table
CREATE TABLE IF NOT EXISTS tblitem (
    item_id     INT AUTO_INCREMENT PRIMARY KEY,
    item_name   VARCHAR(50) NOT NULL,
    unit_price  DECIMAL(10, 2) NOT NULL
);

-- Insert sample data into tblitem
INSERT INTO tblitem (item_name, unit_price) VALUES
('Chicken', 0.50),
('Soup', 1.50),
('Khmer Noodle', 0.75);

-- Create the order table
CREATE TABLE IF NOT EXISTS tblorder (
    order_id        INT AUTO_INCREMENT PRIMARY KEY,
    date_created    DATETIME NOT NULL,
    staff_id        INT,
    customer_id     INT,
    table_id        INT,
    status          VARCHAR(10) NOT NULL,
    total           DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (staff_id)      REFERENCES tblstaff (staff_id),
    FOREIGN KEY (customer_id)   REFERENCES tblcustomer (customer_id),
    FOREIGN KEY (table_id)      REFERENCES tbltable (table_id)
);

-- Create the orderdetail table
CREATE TABLE IF NOT EXISTS tblorderdetail (
    order_id    INT,
    item_id     INT,
    price       DECIMAL(10, 2) NOT NULL,
    quantity    INT NOT NULL,
    amount      DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY (order_id, item_id),
    FOREIGN KEY (order_id) REFERENCES tblorder (order_id),
    FOREIGN KEY (item_id)  REFERENCES tblitem (item_id)
);

-- Drop the vpayment view if it already exists
DROP VIEW IF EXISTS vpayment;

-- Create the vpayment view
CREATE VIEW vpayment AS
SELECT
    o.order_id,
    o.date_created,
    s.staff_id,
    s.staff_name,
    c.customer_id,
    c.customer_name,
    t.table_id,
    t.table_name,
    o.status,
    o.total
FROM tblorder o
INNER JOIN tblstaff s ON s.staff_id = o.staff_id
INNER JOIN tblcustomer c ON c.customer_id = o.customer_id
INNER JOIN tbltable t ON t.table_id = o.table_id;


-- Select from vpayment view
SELECT * FROM vpayment;

-- Drop the vieworder view if it already exists
DROP VIEW IF EXISTS vieworder;

-- Create the vieworder view
CREATE VIEW vieworder AS
SELECT
    o.order_id,
    o.date_created,
    s.staff_id,
    s.staff_name,
    c.customer_id,
    c.customer_name,
    t.table_id,
    t.table_name,
    o.status,
    o.total
FROM tblorder o
INNER JOIN tblstaff s ON s.staff_id = o.staff_id
INNER JOIN tblcustomer c ON c.customer_id = o.customer_id
INNER JOIN tbltable t ON t.table_id = o.table_id;


-- Drop the vieworderdetail view if it already exists
DROP VIEW IF EXISTS vieworderdetail;

-- Create the vieworderdetail view
CREATE VIEW vieworderdetail AS
SELECT
    od.order_id,
    o.date_created,
    s.staff_id,
    s.staff_name,
    c.customer_id,
    c.customer_name,
    t.table_id,
    t.table_name,
    o.status,
    o.total,
    i.item_id,
    i.item_name,
    od.quantity,
    od.price,
    od.amount
FROM tblorderdetail od
INNER JOIN tblorder o ON od.order_id = o.order_id
INNER JOIN tblstaff s ON o.staff_id = s.staff_id
INNER JOIN tblcustomer c ON o.customer_id = c.customer_id
INNER JOIN tbltable t ON o.table_id = t.table_id
INNER JOIN tblitem i ON od.item_id = i.item_id;

-- Select from vieworderdetail view
SELECT * FROM vieworderdetail;

-- Drop the viewuser view if it already exists
DROP VIEW IF EXISTS viewuser;

-- Create the viewuser view
CREATE VIEW viewuser AS
SELECT
    u.user_id,
    u.email,
    u.pass_word,
    s.staff_name,
    s.sex,
    s.phone,
    s.address
FROM tbluser u
INNER JOIN tblstaff s ON s.staff_id = u.user_id;


-- Select from viewuser view
SELECT * FROM viewuser;

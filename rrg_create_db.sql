DROP DATABASE IF EXISTS rrg_company_db;
CREATE DATABASE rrg_company_db;
USE rrg_company_db;

CREATE TABLE realtors (
    RealtorID        SMALLINT(10)    UNSIGNED    NOT NULL    AUTO_INCREMENT,
    RealtorFirstName VARCHAR(255)    NOT NULL,
    RealtorLastName  VARCHAR(255)    NOT NULL,
    PhoneNumber      VARCHAR(13)     NOT NULL,
    Bio              MEDIUMTEXT,
    Photo            VARCHAR(255)    NOT NULL,
    PRIMARY KEY (RealtorID)
);

INSERT INTO realtors VALUES
(1, 'Peter', 'Griffin', '555-124-0987', 'Peter is by far one of the most "trusting" employees. He will make sure you have at least two walls and a roof.', 'images/Peter.jpg'),
(2, 'Stewie', 'Griffin', '555-124-0987', "Stewie is by far our best employee. He may do things that aren't entirely eithical but he gets the job done.", 'images/Stewie.jpg'),
(3, 'Cleveland', 'Brown', '555-124-0987', 'Cleveland is a great employee. He can sell a house. Very monotone, though.', 'images/Cleveland.jfif');

CREATE TABLE properties (
    PropertyID      SMALLINT(10)    UNSIGNED   NOT NULL    AUTO_INCREMENT,
    Address         VARCHAR(255)    UNIQUE     NOT NULL,
    Price           INT(11)         UNSIGNED   NOT NULL,
    Bedrooms        SMALLINT(10)    UNSIGNED   NOT NULL,
    Bathrooms       SMALLINT(10)    UNSIGNED   NOT NULL,
    SquareFt        INT(11)         UNSIGNED   NOT NULL,
    Description     VARCHAR(255),
    Photo           VARCHAR(255)    NOT NULL,
    PRIMARY KEY (PropertyID)
);

INSERT INTO properties VALUES
(1,"123 Nota Rd", 12254, 3, 2, 2500, "Its a house", 'images/Property1.jpg'),
(2,"124 Nota Rd", 12654, 2, 1, 1000, "Its a house", 'images/Property2.jpg'),
(3,"130 Nota Rd", 14645, 4, 2, 3500, "Its a house", 'images/Property3.jpg'),
(4,"145 Nota Rd", 65454, 6, 4, 10000, "Its a house", 'images/Property4.jpg'),
(5,"150 Nota Rd", 54542, 5, 3, 9000, "Its a house", 'images/Property5.jpg'),
(6,"200 Nota Rd", 54645, 5, 2, 8000, "Its a house", 'images/Property6.jpg');

GRANT SELECT
ON rrg_company_db.*
TO web_user@localhost
IDENTIFIED BY 'password';

GRANT SELECT, INSERT, DELETE, UPDATE
ON rrg_company_db.*
TO realtor@localhost
IDENTIFIED BY 'adminOnly';
DROP DATABASE IF EXISTS rrg_company_db;
CREATE DATABASE rrg_company_db;
USE rrg_company_db;

CREATE TABLE realtors (
    RealtorID       SMALLINT(10)    UNSIGNED    NOT NULL    AUTO_INCREMENT,
    RealtorName     VARCHAR(255)    NOT NULL,
    PhoneNumber     VARCHAR(13)     NOT NULL,
    Email           VARCHAR(255)    NOT NULL,
    Specialty       VARCHAR(255),
    Bio             MEDIUMTEXT,
    Photo           VARCHAR(255)    NOT NULL,
    PRIMARY KEY (RealtorID)
);

INSERT INTO realtors VALUES
(1, 'Peter Griffin', '(555)124-0987', 'GPeter@hotmail.com', NULL, 'Peter is by far one of the most "trusting" employees. He will make sure you have at least two walls and a roof.', 'images/Peter.jpg');

CREATE TABLE properties (
    PropertyID      SMALLINT(10)    UNSIGNED   NOT NULL    AUTO_INCREMENT,
    Address         VARCHAR(255)    UNIQUE     NOT NULL,
    City            VARCHAR(255)    NOT NULL,
    State           VARCHAR(255)    NOT NULL,
    ZipCode        SMALLINT(10)    NOT NULL,
    Price           INT(11)         UNSIGNED   NOT NULL,
    Description     VARCHAR(255),
    Photo           VARCHAR(255)    NOT NULL,
    PRIMARY KEY (PropertyID)
);

GRANT SELECT
ON rrg_company_db.*
TO web_user@localhost
IDENTIFIED BY 'password';

GRANT SELECT, INSERT, DELETE, UPDATE
ON rrg_company_db.*
TO realtor@localhost
IDENTIFIED BY 'adminOnly';
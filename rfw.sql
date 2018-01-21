#DROP TABLE contactUs;
#DROP TABLE customerPro;
#DROP TABLE projectCustomer;
#DROP TABLE projectType;

CREATE TABLE projectType(
typ_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
typ_name VARCHAR(50) NOT NULL,
typ_price DOUBLE DEFAULT 0.0,
typ_pid INT,
CONSTRAINT projectType_fk FOREIGN KEY(typ_pid) REFERENCES projectType(typ_id)
);

CREATE TABLE projectCustomer(
cus_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
cus_webName VARCHAR(100) NOT NULL,
cus_contactPer VARCHAR(30) NOT NULL,
cus_contactDet VARCHAR(200) NOT NULL,
cus_business VARCHAR(500) NOT NULL
);

CREATE TABLE customerPro(
cus_id INT NOT NULL,
typ_id INT NOT NULL,
primary key (cus_id,typ_id)
);

CREATE TABLE contactUs(
con_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
con_name VARCHAR(50) NOT NULL,
con_detail  VARCHAR(50) NOT NULL,
con_content VARCHAR(500) NOT NULL
);

INSERT INTO projectType(typ_id,typ_name,typ_price,typ_pid)
VALUES(0,'Available Compoents',0.00,null);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Available Compoents',0.00,0);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Addtional Service',0.00,0);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Other Branding Service',0.00,0);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Enterprise Website',1.00,1);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('E-Commerce Shopping System',1.00,1);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Online Office System (OA)',1.00,1);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Web Workspace',1.00,1);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Clients Relationship Management (CRM)',1.00,1);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Enterprise Resource Planning (ERP)',1.00,1);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Purchas-Selling-InStock System (PSI)',1.00,1);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Content Management System (CMS)',1.00,1);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Process Control System (PC)',1.00,1);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Other Information System Type(IS)',1.00,1);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Naive Android App',1.00,1);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Naive iOS App',1.00,1);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Cross Platform App Dev.',1.00,1);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Other Designing Service',1.00,1);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('SEO',1.00,2);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Dedicate Server Hosting',1.00,2);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('DNS & Access Supervision',1.00,2);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Logo Design',1.00,3);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Company Letter Head',1.00,3);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Business Card (Design)',1.00,3);

INSERT INTO projectType(typ_name,typ_price,typ_pid)
VALUES('Business Card (Print)',1.00,3);
CREATE TABLE ROLES(
ID INT PRIMARY KEY AUTO_INCREMENT,
ROLENAME VARCHAR(255)
)
CREATE TABLE USERS(
ID INT PRIMARY KEY AUTO_INCREMENT,
USRNAME VARCHAR(255),
PASS VARCHAR(255),
ROLEID INT,
FOREIGN KEY (ROLEID) REFERENCES ROLES(ID)
)
INSERT INTO ROLES (ROLENAME) VALUES('ADMIN'),('USER'),('RES')
SELECT * FROM ROLES

INSERT INTO USERS(USRNAME,PASS,ROLEID) VALUES ('ahmed@gmail.com','123456',2)
SELECT * FROM USERS WHERE USRNAME ='ahmed@gmail.com' AND pass = '123456'

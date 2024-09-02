CREATE DATABASE PCU_HW3;
CREATE TABLE roles
(
    id char(20) PRIMARY KEY,
    role char(50)
);
CREATE TABLE users
(
    id char(20) PRIMARY KEY,
    username char(50),
    password char(50),
    role char(20)
    CONSTRAINT FK_User_Role
    FOREIGN KEY(role) REFERENCES role(id)
);

INSERT INTO role VALUES('r-001','administrator');
INSERT INTO role VALUES('r-002','user');

INSERT INTO users VALUES('u-001','admin','admin123','r-001');
INSERT INTO users VALUES('u-002','user','user123','r-002');
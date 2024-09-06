CREATE DATABASE PCU_Hw3;
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
    CONSTRAINT FK_user_Role
    FOREIGN KEY (role) REFERENCES role(id)
);

INSERT INTO role VALUES('r-001','adminstrator');
INSERT INTO role VALUES('r-002','user');

INSERT INTO users VALUES('r-001','admin','admin123','r_001');
INSERT INTO users VALUES('r-002','user','user123','r_002');

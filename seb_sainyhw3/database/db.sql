CREATE DATABASE PCU_HW3;
CREATE Table roles(
    id char (20) PRIMARY key,
    role char (50)
);
 create TABLE users
 (
    id char (20) PRIMARY key,
    username char(50),
    passsword char(50),
    role char (20),
    CONSTRAINT fk_User_Role FOREIGN KEY(role) REFERENCES role(id)
 );
 INSERT INTO role VALUES('r-001','administractor');
 INSERT INTO role values('r-002','user');

 INSERT INTO users VALUES('u-001','admin','admin123','r-001');
 INSERT INTO users VALUES('u-002','user','user123','r-002');
USE DATABASE PCU_Y3_S2

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
    role char(20),
    CONSTRAINT Fk_User_Role
        FOREIGN KEY(role) REFERENCES roles(id)
);


	 
	 INSERT INTO roles VALUES('r-001', 'adminstrator');
	 INSERT INTO roles VALUES('r-002', 'user')
	 
	 INSERT INTO users VALUES('r-001', 'admin','admin123','r-001');
	 INSERT INTO users VALUES('r-002', 'user','user123','r-002');
 
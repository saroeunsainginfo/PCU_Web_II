create database PCU_HW3;
create table rolse (
    id char(20) primary key,
    role char(50)
);

create table users
(
    id char(20) primary key,
    username char(50),
    password char(50),
    role char (20)
    constraint FK_User_Role
    Foreign key(role) references role(id)
);

insert into role values('r-001',administrator');
insert into role values('r-002',user');

insert into users values('u-001','admin','admin123','r-001');
insert into users values('u-002','user','user123','r-001');


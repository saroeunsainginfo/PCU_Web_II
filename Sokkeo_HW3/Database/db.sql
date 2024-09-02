create database PCU_HW3;
create table roles
(
    id char (20) primary key,
    roles char(50)

);
create table Users
(
    id char (20) primary key,
    username char(50),
    password char(50),
    roles char(50),
    constraint FK_user_Roles
    foreign key(roles) refferences roles(id)

);
insert into  values('r-001','administrator');
insert into  values('r-002','user');

insert into user values('u-001','admin','admin123','r-001');
insert into user values('u-002';'user','user123','r-002');
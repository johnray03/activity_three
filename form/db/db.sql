
create database register;
use register;

create table users(
    id int primary key auto_increment,
    lastname varchar(100),
    firstname varchar(100),
    email varchar(100),
    `password` varchar(100)
);
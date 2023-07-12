create database test1;
 drop database if exists test;
 create user 'kevin'@'localhost' identified by 'Carapuce31';
 show databases;
 grant all privileges on *.* to 'kevin'@'localhost';
 flush privileges;
 create database shop_bd;
 use shop_bd;
 create user 'admin'@'localhost';
 grant all privileges on shop_db.* to 'admin'@'localhost';
 create user 'developer'@'localhost';
 grant alter,create,drop,index,update on shop_db.* to 'developer'@'localhost';
 flush privileges;
  create table Customer (
	id int primary key auto_increment,
    username varchar(16) not null unique,
    email varchar(255) not null unique,
    password varchar(32) not null,
    create_time timestamp
);
create table Address (
	id int primary key auto_increment,
    road_number int,
    road_name varchar(100) not null,
    zip_code char(5) not null,
    city_name varchar(100) not null,
    country_name varchar(100) not null
    );
create table Order1 (
	id int primary key auto_increment,
    ref varchar(45) unique not null,
    date date not null,
    shipping_cost decimal(6.2) default 0.00,
    total_amount decimal(6.2) default 0.00
    );
create table Product (
	ref_product foreign key 
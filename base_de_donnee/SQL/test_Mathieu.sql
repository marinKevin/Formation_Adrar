create database judokas;
use judokas;
create table judoka (
	id_judoka int primary key auto_increment,
    name_judoka varchar(50),
    first_name_judoka varchar(50),
    age_judoka int,
    sex_judoka varchar(50)
);
create table level_judo (
	id_level int primary key auto_increment,
    belt_color varchar(100)
);
create table contest (
	id_contest int primary key auto_increment,
    name_contest varchar(100),
    start_date date,
    end_date date
);
alter table judoka
	add foreign key(id_level) references level_judo (id_level);
create database shop;
use shop;
create table product (
	name_product varchar(50),
    descrition_product varchar(50),
    price_product real,
    id_category int not null
);
alter table product
	add id int primary key not null auto_increment;
create table category (
	id_category int primary key not null auto_increment,
    name_category varchar(50)
);
create table receipt (
	id_receipt int primary key not null auto_increment,
    date_receipt datetime,
    id_seller int not null
);
create table seller (
	id_seller int primary key not null auto_increment,
    name_seller varchar(50),
    first_name_seller varchar(50)
);
create table to_add (
	id_product int not null,
    id_receipt int not null,
    qtx_add int,
    primary key(id_product,id_receipt)
);
alter table product
	add constraint fk_id_category foreign key (id_category) references category(id_category);
alter table receipt
	add constraint fk_id_seller foreign key (id_seller) references seller (id_seller);
alter table to_add
	add constraint fk_id_product foreign key (id_product) references product (id);
alter table to_add
	add constraint fk_id_receipt foreign key (id_receipt) references receipt (id_receipt);
    
insert into category (name_category) values ("alimentaire"),("produit"),("loisir");

insert into product (name_product, descrition_product, price_product, id_category) 
values ("tomate","paquet de 3kg de tomate",4.20,1),("pain","bagette de pain de 350gr",0.90,1),
("lessive","paquet de lessive de 1kg",14.30,2),("livre","livre sur le cinéma",29.99,3);

insert into seller (name_seller,first_name_seller) values ("Dupond","Sophie"),("Albert","Marc");

insert into receipt (date_receipt,id_seller) values ("2023/02/03",1),("2023/05/06",2),("2023/07/14",2);

insert into to_add (id_product,id_receipt,qtx_add) values (2,1,5),(1,2,1),(3,2,1),(4,1,2);

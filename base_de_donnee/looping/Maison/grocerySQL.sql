create database grocery;
use grocery;

create table product(
	id_product int primary key not null auto_increment,
    name_product varchar(50),
    description_product text,
    picture_product varchar(100),
    price_product decimal(15,2),
    stock_product smallint,
    id_brand int,
    id_category int
    );
create table category(
	id_category int primary key not null auto_increment,
    name_category varchar(50)
    );
create table brand(
	id_brand int primary key not null auto_increment,
    name_brand varchar(50)
);
create table receipt(
	id_receipt int primary key not null auto_increment,
    date_receipt datetime,
    id_worker int
);
create table worker(
	id_worker int primary key not null auto_increment,
    name_worker varchar(50),
    first_name_worker varchar(50),
    id_job int
);
create table job(
	id_job int primary key not null auto_increment,
    name_job varchar(50)
);
create table to_print(
	id_product int,
    id_receipt int,
    primary key(id_product,id_receipt)
);

alter table product add constraint fk_brand_product foreign key(id_brand) references brand(id_brand);
alter table product add constraint fk_category_product foreign key(id_category) references category(id_category);
alter table receipt add constraint fk_worker_receipt foreign key(id_worker) references worker(id_worker);
alter table worker add constraint fk_job_worker foreign key(id_job) references job(id_job);
alter table to_print add constraint fk_product_receipt foreign key(id_product) references product(id_product);
alter table to_print add constraint fk_receipt_product foreign key(id_receipt) references receipt(id_receipt);
    


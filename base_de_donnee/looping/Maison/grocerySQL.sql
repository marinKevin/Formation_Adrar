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

insert into brand (name_brand) values 
	("Panzani"),
    ("Ariel"),
    ("Legal"),
    ("Brossard"),
    ("Marche"),
    ("Mr Propre"),
    ("Milka"),
    ("Président"),
    ("Bonne Maman"),
    ("Evian"),
    ("Elle & Vire"),
    ("Coca Cola"),
    ("Lactel"),
    ("Francine"),
    ("Sopalin");
    
insert into category (name_category) values 
	("Alimentation"),
    ("Entretien"),
    ("Boisson");

insert into product (name_product, description_product, picture_product, price_product, stock_product, id_brand, id_category) values
	("Pâtes Penne", "Paquet de 500 gr de pâtes, penne", "./img/penne.png", 1.80, 25, 1, 1),
    ("Lessive liquide", "Lessive liquide 30 lavage", "./img/lessive.png", 9.60, 10, 2, 2),
    ("Paquet café", "Paquet de 36 dosettes Senseo", "./img/cafe.png", 4.20, 30, 3, 1),
    ("Pain", "Baguette de pain 250g", "./img/pain.png", 1.10, 20, 4, 1),
    ("Tomate", "Tomate en barquette de 500g", "./img/tomates.png", 2.60, 18, 5, 1),
    ("Eau de Javel", "Eau de javel en bouteille de 1 litre", "./img/javel.png", 1.80, 40, 6, 3),
    ("Chocolat", "Tablette de chocolat au lait", "./img/chocolat.png", 0.80, 50, 7, 1),
    ("Camembert", "Camembert 250 gr", "./img/fromage", 2.10, 29, 8, 1),
    ("Madeleine", "Madeleine en sachet individuel x12", "./img/gateau.png", 2.89, 32, 9, 1),
    ("Bouteille eau", "Paque de bouteille d'eau 1.5 litre", "./img/eau.png", 2.69, 49, 10, 3),
    ("Beurre", "Palaquette de beurre doux 250 gr", "./img/beurre.png", 3.19, 19, 11, 1),
    ("Soda cola", "Bouteille de Sode 1.5 litre", "./img/coca.png", 1.23, 35, 12, 3),
    ("Lait", "Paque de 6 bouteilles de lait de 1 litre", "./img/lait.png", 6.48, 20, 13, 3),
    ("Farine", "Farine en sac de 1 kg", "./img/farine.png", 1.49, 16, 14, 1),
    ("Essuit tout", "Essuit tout 3 rouleaux", "./img/sopalin.png", 3.24, 22, 15, 2);
    
    insert into job (name_job) values 
		("Gérant"),
        ("Vendeur"),
        ("Livreur");
	
    insert into worker (name_worker, first_name_worker, id_job) values 
		("Lambert", "Capucine", 1),
        ("Margaux", "Jean", 2),
        ("Duppond", "Marthys", 2),
        ("Boyer", "Edouard", 3),
        ("Picard", "Iris", 2),
        ("Payet", "Raphaëlle", 2),
        ("Nguyen", "Mathieu", 3),
        ("Bourhis", "Julie", 2);
	
    insert into receipt (date_receipt, id_worker) values 
		("2023-01-22", 2),
        ("2023-01-24", 3),
        ("2023-01-28", 5),
        ("2023-02-05", 3),
        ("2023-02-07", 2),
        ("2023-02-08", 5),
        ("2023-02-09", 6),
        ("2023-03-03", 2),
        ("2023-03-04", 6),
        ("2023-03-05", 8),
        ("2023-04-09", 2),
        ("2023-04-10", 2),
        ("2023-05-06", 8),
        ("2023-05-07", 8),
        ("2023-05-08", 3),
        ("2023-06-02", 5),
        ("2023-06-07", 8),
        ("2023-06-08", 3),
        ("2023-06-11", 6),
        ("2023-06-14", 8);
	
alter table to_print add quantity smallint;

insert into to_print (id_receipt, id_product, quantity) values
	(1, 2, 2),
    (1, 6, 3),
    (1, 15, 4),
    (2, 1, 5),
    (2, 5, 2),
    (2, 8, 1),
    (3, 3, 3),
    (3, 4, 2),
    (4, 7, 2),
    (4, 4, 6),
    (5, 10, 3),
    (6, 12, 5),
    (6, 9, 2),
    (7, 13, 4),
    (7, 14, 1),
    (7, 7, 2),
    (7, 11, 1),
    (8, 3, 3),
    (8, 9, 4), 
    (9, 5, 5),
    (9, 1, 4),
    (9, 11, 1),
    (10, 12, 6),
    (11, 2, 1),
    (11, 15, 2),
    (11, 10, 4),
    (12, 7, 1),
    (12, 9, 2),
    (13, 4, 3),
    (13, 8, 2),
    (14, 13, 2),
    (14, 11, 1),
    (14, 14, 1),
    (15, 2, 2);

insert into to_print (id_receipt, id_product, quantity) values
	(15, 12, 3),
    (16, 8, 1),
    (16, 4, 2),
    (17, 6, 1),
    (18, 7, 3),
    (19, 1, 4),
    (19, 5, 3),
    (19, 11, 1),
    (20, 13, 4),
    (20, 7, 3),
    (20, 9, 2),
    (20, 3, 3);
    
    
select id_worker, name_worker, first_name_worker, name_job 
from worker 
inner join job 
where job.id_job = worker.id_job;

select id_worker, name_worker, first_name_worker 
from worker 
where id_job = (select id_job from job where name_job = "Livreur");

select  id_product, name_product, description_product, picture_product, price_product, stock_product 
from product 
where id_category = (select id_category from category where name_category = "Alimentation");

select name_product, description_product, price_product, quantity, id_receipt 
from to_print inner join product on to_print.id_product = product.id_product where to_print.id_receipt = 2 ;

select name_product, (price_product * quantity) from product inner join to_print on to_print.id_product = product.id_product where to_print.id_receipt = 7 ; 

select name_product, sum(quantity) from to_print inner join product on  to_print.id_product = product.id_product where name_product = "lait";

select name_product, count(quantity) from to_print inner join product on to_print.id_product = product.id_product group by name_product ;

select sum(price_product * quantity) as montant_TTC from to_print inner join product on to_print.id_product = product.id_product where to_print.id_receipt = 11 ;

select name_worker, count(receipt.id_worker) as "vente conclue" from worker inner join receipt on receipt.id_worker = worker.id_worker group by name_worker ;

select sum(price_product * quantity) as "Chiffre d'affaire Février 2023" 
from to_print inner join product on  to_print.id_product = product.id_product
inner join receipt on to_print.id_receipt = receipt.id_receipt
where month(date_receipt) = 2;

select sum(price_product*quantity) as "Chiffre d'affaire de Julie" 
from to_print inner join product on to_print.id_product = product.id_product
inner join receipt on to_print.id_receipt = receipt.id_receipt
inner join worker on receipt.id_worker = worker.id_worker
where name_worker = "Bourhis";

select name_product, sum(price_product*quantity) as "chiffre d'affaire total" from to_print inner join product on to_print.id_product = product.id_product group by to_print.id_product;

select name_worker, first_name_worker, sum(price_product*quantity) from to_print
inner join product on to_print.id_product = product.id_product
inner join receipt on to_print.id_receipt = receipt.id_receipt 
inner join worker on receipt.id_worker = worker.id_worker
inner join job on worker.id_job = job.id_job
where job.name_job = "vendeur"
group by worker.id_worker;

select first_name_worker + " " + name_worker + ' n''est pas l''agent 007' as concat from worker;
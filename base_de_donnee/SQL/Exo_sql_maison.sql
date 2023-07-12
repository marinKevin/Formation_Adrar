create database judo_club;
use judo_club;
create table judoka (
	id_judoka int primary key not null auto_increment,
    name_judoka varchar(100),
    first_name_judoka varchar(100),
    age_judoka int,
    sex_judoka varchar(50),
    id_belt int not null
    );
create table belt (
	id_belt int primary key not null auto_increment,
    color_belt varchar(50)
    );
create table contest (
	id_contest int primary key not null auto_increment,
    name_contest varchar(100),
    start_date_contest datetime,
    end_date_contest datetime
    );
create table to_participate (
	id_judoka int not null,
    id_contest int not null,
    primary key(id_judoka,id_contest)
    );
alter table judoka add constraint fk_id_belt foreign key (id_belt) references belt (id_belt);
alter table to_participate add constraint fk_id_judoka foreign key (id_judoka) references judoka (id_judoka);
alter table to_participate add constraint fk_id_contest foreign key (id_contest) references contest (id_contest);

insert into belt (color_belt) values ('white'),('yellow'),('orange'),('green'),('blue'),('brun'),('black');

insert into judoka (name_judoka, first_name_judoka, age_judoka, sex_judoka, id_belt)
	values
		('Lachance', 'Dominique', 18, 'F', 2),
        ('Porter', 'Gilbert',18,'H',3),
        ('Lemaître','Anne',15,'F',1),
        ('Robert','Juliette',12,'F',1),
        ('Montminy','Pierre',17,'H',5),
        ('Charett','pascal',21,'h',6),
        ('Guay','Émili',19,'F',6),
        ('Maheu','Louise',14,'F',4),
        ('Poulin','Raymond',26,'H',7),
        ('Dupret','Alain',20,'H',6);
insert into contest (name_contest,start_date_contest,end_date_contest) 
	values
		('judo31','2021/02/06','2021/02/07'),
        ('judo11','2021/02/27','2021/02/28'),
        ('judo81','2021/03/20','2021/03/21'),
        ('judo82','2021/04/17','2021/04/18');
        
insert into to_participate (id_contest,id_judoka) 
	values
		(1,1),
        (1,3),
        (1,6),
        (2,2),
        (2,5),
        (2,6),
        (2,9),
        (3,10),
        (3,9),
        (4,1),
        (4,3),
        (4,8),
        (4,4);
        
update judoka set id_belt = id_belt + 1 where id_judoka <= 5;

insert into judoka (name_judoka, first_name_judoka, age_judoka, sex_judoka, id_belt)
	values
		('Salvan','Remi',30,'H',7),
        ('Marin','kevin',31,'H',7);

delete from judoka where id_judoka > 10;

select name_judoka, first_name_judoka from judoka where id_belt = 4; 

select id_judoka from to_participate 
        
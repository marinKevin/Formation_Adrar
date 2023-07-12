create database exo3;
use exo3;
create table users (
	id_users int primary key not null auto_increment,
    name_users varchar(50),
    first_name_users varchar(50),
    email_users varchar(50),
    password_users varchar(100),
    image varchar(100),
    statut boolean,
    id_roles int not null
);
create table chocoblast (
	id_chocoblast int primary key not null auto_increment,
    slogan text,
    creation_date date,
    statut_chocoblast boolean,
    target int not null,
    autor int not null
);
create table comments (
	id_comments int primary key not null auto_increment,
    note int,
    centent text,
    creation_date_comments datetime,
    statut_comments boolean,
    id_chocoblast int not null,
    autor int not null
);
create table roles (
	id_roles int primary key not null auto_increment,
    name_roles varchar(50)
);
alter table users
	add constraint fk_id_roles foreign key (id_roles) references roles (id_roles);
alter table chocoblast
	add constraint fk_target foreign key (target) references users (id_users);
alter table chocoblast 
	add constraint fk_autor foreign key (autor) references users (id_users);
alter table comments 
	add constraint fk_id_chocoblast foreign key (id_chocoblast) references chocoblast (id_chocoblast);
alter table comments
	add constraint fk_autor_comments foreign key (autor) references users (id_users);
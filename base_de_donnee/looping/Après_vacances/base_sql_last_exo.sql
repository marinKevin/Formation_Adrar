create database Last_sql;
use Last_sql;

create table utilisateur (
	id_utilisateur int primary key not null auto_increment,
    nom_utilisateur varchar(50),
    prenom_utilisateur varchar(50),
    age_utilisateur int,
    mail_utilisateur varchar(50),
    password_utilisateur varchar(100),
    id_poste int
);
create table poste (
	id_poste int primary key not null auto_increment,
    nom_poste varchar(50)
);
create table logiciel (
	id_logiciel int primary key not null auto_increment,
    name_logiciel varchar(50),
    description_logiciel varchar(100),
    quantite_logiciel int,
    id_editeur int
);
create table editeur (
	id_editeur int primary key not null auto_increment,
    name_editeur varchar(50)
);
create table ticket (
	id_ticket int primary key not null auto_increment, 
    nom_ticket varchar(50),
    description_ticket varchar(50),
    date_ouverture_ticket datetime,
    date_fermeture_ticket datetime,
    id_logiciel int,
    id_type_ticket int,
    id_statut int,
    id_materiel int,
    id_utilisateur int
);
create table statut (
	id_statut int primary key not null auto_increment,
    name_statut varchar(50)
);
create table intervention (
	id_intervention int primary key not null auto_increment,
    nom_intervention varchar(50),
    description_intervention varchar(100),
    date_intervention datetime,
    duree_intervention time,
    verifie_intervention boolean,
    id_utilisateur int,
    id_ticket int
);
create table solution (
	id_solution int primary key not null auto_increment,
    nom_solution varchar(50),
    description_solution text,
    date_creation_solution datetime,
    date_modification_solution datetime,
    id_type_solution int,
    id_materiel int,
    id_logiciel int,
    id_utilisateur int
);
create table type_solution (
	id_type_solution int primary key not null auto_increment,
    nom_type_solution varchar(50)
);
create table materiel (
	id_materiel int primary key not null auto_increment,
    nom_materiel varchar(50),
    description_materiel varchar(100),
    spare_materiel boolean,
    quantite_materiel int,
    id_fabricant int,
    id_type_materiel int
);
create table type_materiel (
	id_type_materiel int primary key not null auto_increment,
    nom_type_materiel varchar(50)
);
create table fabricant (
	id_fabricant int primary key not null auto_increment,
    nom_fabricant varchar(50)
);
create table type_ticket (
	id_type_ticket int primary key not null auto_increment,
    nom_type_ticket varchar(50)
);
create table installer (
	id_utilisateur int not null,
    id_logiciel int not null,
    primary key (id_utilisateur, id_logiciel),
    num_licence varchar(50), 
    date_assignation datetime
);
create table incorporer (
	id_intervention int not null,
    id_solution int not null
);
create table assigner (
	id_utilisateur int,
    id_materiel int,
	primary key (id_utilisateur, id_materiel),
    reference_assigner varchar(50),
    date_assignation datetime
);

alter table logiciel add constraint fk_editeur_nom foreign key (id_editeur) references editeur(id_editeur);
alter table utilisateur add constraint fk_poste_nom foreign key (id_poste) references poste(id_poste);
alter table ticket add constraint fk__logiciel_ticket foreign key (id_logiciel) references logiciel(id_logiciel);
alter table ticket add constraint fk_type_ticket_ticket foreign key (id_type_ticket) references type_ticket(id_type_ticket);
alter table ticket add constraint fk_statut_ticket foreign key(id_statut) references statut(id_statut);
alter table ticket add constraint fk_materiel_ticket foreign key (id_materiel) references materiel(id_materiel);
alter table ticket add constraint fk_utilisateur_ticket foreign key(id_utilisateur) references utilisateur(id_utilisateur);
alter table intervention add constraint fk_utilisateur_intervention foreign key(id_utilisateur) references utilisateur(id_utilisateur);
alter table intervention add constraint fk_ticket_intervention foreign key (id_ticket) references ticket(id_ticket);
alter table solution add constraint fk_type_solution_solution foreign key (id_type_solution) references type_solution(id_type_solution);
alter table solution add constraint fk_materiel_solution foreign key(id_materiel) references materiel(id_materiel);
alter table solution add constraint fk_logiciel_solution foreign key(id_logiciel) references logiciel(id_logiciel);
alter table solution add constraint fk_utilisateur_solution foreign key(id_utilisateur) references utilisateur(id_utilisateur);
alter table materiel add constraint fk_fabricant_materiel foreign key(id_fabricant) references fabricant(id_fabricant);
alter table materiel add constraint fk_type_materiel_materiel foreign key(id_type_materiel) references type_materiel(id_type_materiel);
alter table installer add constraint fk_utilisateur_installer foreign key(id_utilisateur) references utilisateur(id_utilisateur);
alter table installer add constraint fk_logiciel_installer foreign key(id_logiciel) references logiciel(id_logiciel);
alter table incorporer add constraint fk_intervention_incorporer foreign key(id_intervention) references intervention(id_intervention);
alter table incorporer add constraint fk_solution_incorporer foreign key(id_solution) references solution(id_solution);
alter table assigner add constraint fk_utilisateur_assigner foreign key(id_utilisateur) references utilisateur(id_utilisateur);
alter table assigner add constraint fk_materiel_assigner foreign key(id_materiel) references materiel(id_materiel);

insert into poste(nom_poste)
values("employe"), ("admin"), ("technicien"), ("responsable");


insert into utilisateur (nom_utilisateur, prenom_utilisateur, age_utilisateur, mail_utilisateur, password_utilisateur, id_poste)
	values
		('Lachance', 'Dominique', 18, 'pikachu1@gmail.com', 5542,1),
        ('Porter', 'Gilbert',18,'pikachu2@gmail.com',5435433,2),
        ('Lemaître','Anne',15,'pikachu3@gmail.com',145354,3),
        ('Robert','Juliette',12,'pikachu4@gmail.com',453451,2),
        ('Montminy','Pierre',17,'pikachu5@gmail.com',53545,1),
        ('Charett','pascal',21,'pikachu6@gmail.com',62547,2),
        ('Guay','Émili',19,'pikachu7@gmail.com',632535,1),
        ('Maheu','Louise',14,'pikachu18gmail.com',454354,3),
        ('Poulin','Raymond',26,'pikachu9@gmail.com',7453,3),
        ('Dupret','Alain',20,'pikachu10@gmail.com',643545,4);
	
insert into fabricant (nom_fabricant)
values("acer"), ("nvidia"), ("gigabyte");

insert into type_materiel(nom_type_materiel)
values("ecran"), ("pc portable"), ("desktop"), ("clavier"), ("souris");

insert into type_solution(nom_type_solution)
values("installation"), ("depannage"), ("remplacement");

insert into materiel (nom_materiel, description_materiel, spare_materiel, quantite_materiel, id_fabricant, id_type_materiel)
values ("aa", "aae", false, 8, 1, 1), ("ee", "eea", true, 41, 2, 2);

insert into editeur(name_editeur)
values("microsoft"),("oracle");

insert into logiciel(name_logiciel, description_logiciel, quantite_logiciel, id_editeur)
values("photoshop", "photo", 12, 1), ("word", "texte", 5, 1), ("apache", "bdd", 4, 2);

insert into type_ticket (nom_type_ticket) values ("bus"), ("ticket de métro"), ("ticket de cinéma");

insert into statut (name_statut) values ("statue de pierre"), ("statue religieuse");

insert into ticket (nom_ticket, description_ticket, date_ouverture_ticket, date_fermeture_ticket, id_logiciel, id_type_ticket, id_statut, id_materiel, id_utilisateur) values
	("ticket1", "la, la, la", "2023-07-25", "2023-07-26", 3, 3, 2, 1, 10),
    ("ticket2", "la, la, la", "2023-08-25", "2023-08-26", 2, 2, 1, 2, 9),
    ("ticket3", "la, la, la", "2023-09-25", "2023-09-26", 1, 1, 2, 1, 8),
    ("ticket4", "la, la, la", "2023-10-25", "2023-10-26", 3, 3, 1, 2, 7),
    ("ticket5", "la, la, la", "2023-11-25", "2023-11-26", 2, 3, 2, 1, 6);
    
insert into intervention (nom_intervention, description_intervention, date_intervention, id_utilisateur, id_ticket) values 
	("inter1", "bla bla bla", "2023-03-23", 5, 6),
    ("2inter1", "bla bla bla", "2023-04-23", 4, 10),
	("3inter1", "bla bla blabla bla", "2023-05-23", 3, 9),
	("4inter1", "bla bla bla bla bla bla bla", "2023-06-23", 2, 8),
    ("5inter1", "bla bla bla bla bla", "2023-07-23", 1, 7);
    
insert into intervention (nom_intervention, description_intervention, date_intervention, id_utilisateur, id_ticket) values
	("6inter1", "bla bla bla bla bla bla bla", "2023-08-23", 3, 6);
    
insert into ticket (nom_ticket, description_ticket, date_ouverture_ticket, date_fermeture_ticket, id_logiciel, id_type_ticket, id_statut, id_materiel, id_utilisateur) values
	("ticket5", "la, la, la", "2023-11-25", "2023-11-26", 2, 3, 2, 1, 1);
    
    insert into ticket (nom_ticket, description_ticket, date_ouverture_ticket, date_fermeture_ticket, id_logiciel, id_type_ticket, id_statut, id_materiel, id_utilisateur) values
	("ticket7", "la, la, la", "2023-10-25", "2023-12-26", 2, 3, 2, 1, 1);

select nom_utilisateur, prenom_utilisateur, nom_poste from utilisateur inner join poste on utilisateur.id_poste = poste.id_poste;

select nom_utilisateur, prenom_utilisateur, nom_poste from utilisateur inner join poste on utilisateur.id_poste = poste.id_poste where nom_poste = "technicien";

select nom_materiel, description_materiel, nom_fabricant, nom_type_materiel, quantite_materiel from materiel 
inner join fabricant on materiel.id_fabricant = fabricant.id_fabricant 
inner join type_materiel on materiel.id_type_materiel = type_materiel.id_type_materiel;

select name_logiciel, description_logiciel, name_editeur from logiciel 
inner join editeur on logiciel.id_editeur = editeur.id_editeur
order by name_editeur;

select nom_ticket, description_ticket, date_ouverture_ticket,name_statut, nom_utilisateur, prenom_utilisateur, nom_type_ticket
from ticket
join utilisateur on ticket.id_utilisateur =utilisateur.id_utilisateur
join statut on ticket.id_statut = statut.id_statut
join type_ticket on ticket.id_type_ticket = type_ticket.id_type_ticket;

select nom_intervention, description_intervention, date_intervention, duree_intervention,  nom_utilisateur, prenom_utilisateur
from intervention
inner join utilisateur on intervention.id_utilisateur = utilisateur.id_utilisateur
inner join poste on utilisateur.id_poste = poste.id_poste
where nom_poste = "technicien";

-- exo 7
select nom_intervention, description_intervention, date_intervention, duree_intervention,  nom_utilisateur, prenom_utilisateur
from intervention
inner join utilisateur on intervention.id_utilisateur = utilisateur.id_utilisateur
inner join poste on utilisateur.id_poste = poste.id_poste
where nom_poste = "technicien" and year(date_intervention) = "2023";

-- exo 8
select distinct nom_utilisateur as nom, prenom_utilisateur, count(intervention.id_utilisateur) as "nombre d'intervention", count(ticket.id_utilisateur) as "nombre ticket"
from intervention
inner join utilisateur on utilisateur.id_utilisateur = intervention.id_utilisateur
inner join ticket on utilisateur.id_utilisateur = ticket.id_utilisateur 
group by intervention.id_utilisateur and ticket.id_utilisateur
order by utilisateur.nom_utilisateur ASC, utilisateur.prenom_utilisateur asc ;

with i as (
	select count(intervention.id_utilisateur) 
    from intervention
    inner join utilisateur on utilisateur.id_utilisateur = intervention.id_utilisateur 
    group by intervention.id_utilisateur
    ),
    union 
    t as (
    select count(ticket.id_utilisateur)
    from ticket
    inner join utilisateur on utilisateur.id_utilisateur = ticket.id_utilisateur
    group by ticket.id_utilisateur
    )
select nom_utilisateur, prenom_utilisateur, i, t
from utilisateur; 


-- exo 9
select nom_utilisateur, prenom_utilisateur, nom_poste, count(ticket.id_utilisateur) as "nombre demande" from ticket
inner join utilisateur on utilisateur.id_utilisateur = ticket.id_utilisateur
inner join poste on poste.id_poste = utilisateur.id_poste
group by ticket.id_utilisateur
order by "nombre demande" desc limit 1;


-- exo 10
select nom_ticket, description_ticket, date_ouverture_ticket, count(id_intervention) as "nombre d'intervention"
from ticket
inner join intervention on ticket.id_ticket = intervention.id_ticket
group by intervention.id_ticket

use judo_club;

select count(id_judoka) from to_participate where id_contest = 1;

select name_judoka, first_name_judoka, age_judoka, sex_judoka from judoka where id_judoka = id_contest;

select name_judoka, first_name_judoka from judoka where id_belt = 6 and age_judoka > 19;

select name_judoka, first_name_judoka, color_belt from judoka inner join belt; 


select name_judoka, first_name_judoka, color_belt from judoka inner join belt where belt.id_belt = judoka.fk_id_belt order by name_judoka ASC;

 
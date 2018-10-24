use serverlab;

alter table users add column last_name varchar(250) not null after name;

alter table users add column role varchar(100) not null after email;

create table robots(
	id int(255) not null auto_increment,
    nro_serie varchar(100) not null,
    status varchar(100) not null,
    primary key(id)
)engine=Innodb;

create table uses(
	id int(255) not null auto_increment,
    inicio datetime not null,
    fin datetime,
    user_id int(155) not null,
	robot_id int(255) not null,
    primary key(id)
)engine=Innodb;

alter table robots add column name varchar(100) not null after id;

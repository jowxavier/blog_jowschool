create database cadastro_blog;
create table usuarios(
id int(11) not null auto_increment,
Nome varchar(30) not null,
email varchar (30) not null,
primary key (id)
);
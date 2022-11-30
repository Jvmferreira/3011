create table cadastro (
id int,
nome varchar(100),
telefone int not null
);
describe cadastro;
alter table cadastro modify column id int not null primary key auto_increment;
desc cadastro;
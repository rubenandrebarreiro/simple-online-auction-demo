use leilao;

Alter table categorias change id_categoria num_categoria int(10) primary key auto_increment;
Alter table categorias change num_categoria id_categoria int(10) primary key auto_increment;

Alter table categorias modify nr_inv bigint;
Alter table categorias modify nr_inv int(10);

Describe utilizadores;

Select * from utilizadores;

Alter table categorias add column teste int(4);
Alter table categorias drop teste;

Create table Alunos (id_aluno int(4) primary key auto_increment, nome varchar(20), data_nasc date, morada varchar (40));
Drop table Alunos;
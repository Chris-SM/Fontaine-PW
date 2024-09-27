Create database teste;
use teste;


create table tb_funcionario(
id_funcionario int auto_increment primary key,
nm_funcionario varchar(30) not null,
nm_sobrenome varchar(50) not null,
dt_nascimento date,
nm_cargo varchar(30) not null,
vl_salario decimal(6,2) not null,
dt_adimissao date not null,
nm_senha varchar(20)
);


create table tb_cliente(
id_cliente int auto_increment primary key,
nm_cliente varchar(30) not null,
nm_sobrenome varchar(50) not null,
dt_nascimento date,
nm_email varchar(60) not null,
nm_endereco varchar(60) not null,
nr_endereco int not null,
nr_telefone varchar(11)
);


create table tb_fornecedor(
id_fornecedor int auto_increment primary key,
nm_fornecedor varchar(30) not null,
nm_cnpj char(14) not null,
nr_telefone varchar(11) not null,
nm_email varchar(60) not null,
nm_endereco varchar(60) not null,
nr_endereco int not null
);

create table tb_categoria(
id_categoria int auto_increment primary key,
nm_categoria varchar(40) not null,
ds_categoria text
);

create table tb_despesa(
id_despesa int auto_increment primary key,
ds_despesa text not null,
vl_despesa decimal(7,2) not null,
dt_lancamento date not null, 
fk_id_categoria int not null,
fk_id_funcionario int not null,
foreign key (fk_id_categoria) references tb_categoria(id_categoria),
foreign key (fk_id_funcionario) references tb_funcionario(id_funcionario)
);

create table tb_receita(
id_receita int auto_increment primary key,
ds_receita text not null,
vl_receita decimal(7,2) not null,
dt_lancamento date not null, 
fk_id_categoria int not null,
fk_id_funcionario int not null,
foreign key (fk_id_categoria) references tb_categoria(id_categoria),
foreign key (fk_id_funcionario) references tb_funcionario(id_funcionario)
);




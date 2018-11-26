drop database if exists bSkills;
create database bSkills;
use bSkills;
create table foto (
  id   int primary key auto_increment,
  name text not null,
  path text not null
);

create table idioma (
  id  int primary key auto_increment,
  nom varchar(200) not null
);

create table tipo_vacances (
  id int primary key auto_increment
);

create table tipo_vacances_has_idioma (
  idTipo_vacances int not null ,
  idIdioma int not null,
  primary key (idTipo_vacances, idIdioma),
  foreign key (idTipo_vacances) references tipo_vacances(id) on update cascade on delete no action,
  foreign key (idIdioma) references idioma(id) on update cascade on delete no action
);

create table tipo_vivenda (
  id int primary key auto_increment
);

create table tipo_vivenda_has_idioma (
  idTipo_vivenda int not null ,
  idIdioma int not null,
  primary key (idTipo_vivenda, idIdioma),
  foreign key (idTipo_vivenda) references tipo_vivenda(id) on update cascade on delete no action,
  foreign key (idIdioma) references idioma(id) on update cascade on delete no action
);

create table serveis (
  id int primary key  auto_increment
);

create table serveis_has_idioma (
  idServei int not null,
  idIdioma int not null,
  primary key (idServei, idIdioma),
  foreign key (idServei) references tipo_vivenda(id) on update cascade on delete no action,
  foreign key (idIdioma) references idioma(id) on update cascade on delete no action
);

create table tarifa (
  id int primary key auto_increment,
  nom text not null,
  fechaInici timestamp not null,
  fechaFi timestamp not null,
  preu double
);

create table categoria (
  id int primary key auto_increment,
  nom text not null,
  idTarifa int not null,
  foreign key (idTarifa) references tarifa(id) on update cascade on delete no action
);

create table persona (
  id int primary key auto_increment,
  nom text not null,
  primer_llinatge text not null,
  segon_llinatge text,
  email text not null,
  password text not null
);

create table usuari (
  id int primary key,
  foreign key (id) references persona(id) on update cascade on delete no action
);

create table propietari (
  id int primary key,
  foreign key (id) references persona(id) on update cascade on delete no action
);

create table illa (
  id int primary key auto_increment,
  nom text not null
);

create table vivenda (
  id int primary key auto_increment,
  nom text not null,
  municipi text not null,
  adresa text not null,
  valoracio int not null,
  nPersones int not null,
  nHabitacions int not null,
  nLlits int not null,
  nBanys int not null,
  destacat boolean not null,
  idTipoVacance int not null,
  idPropietari int not null,
  idTipoVivenda int not null,
  idIlla int not null,
  idCategoria int not null,
  foreign key (idTipoVacance) references tipo_vacances(id)  on update cascade on delete no action,
  foreign key (idTipoVivenda) references tipo_vivenda(id)  on update cascade on delete no action,
  foreign key (idIlla) references illa(id)  on update cascade on delete no action,
  foreign key (idPropietari) references propietari(id)  on update cascade on delete no action,
  foreign key (idCategoria) references categoria(id)  on update cascade on delete no action
);

create table vivenda_has_idioma (
  idVivenda int not null,
  idIdioma int not null,
  foreign key (idVivenda) references vivenda(id)  on update cascade on delete no action,
  foreign key (idIdioma) references idioma(id)  on update cascade on delete no action
);

create table vivenda_has_foto (
  idVivenda int not null,
  idFoto int not null,
  foreign key (idVivenda) references vivenda(id)  on update cascade on delete no action,
  foreign key (idFoto) references foto(id)  on update cascade on delete no action
);

create table serveis_has_foto (
  idVivenda int not null,
  idServeis int not null,
  foreign key (idVivenda) references vivenda(id)  on update cascade on delete no action,
  foreign key (idServeis) references serveis(id)  on update cascade on delete no action
);

create table comentari (
  id int not null,
  comentari text not null,
  valoracio int not null,
  timestamp timestamp default current_timestamp,
  valid boolean not null,
  idUsuari int not null,
  idVivenda int not null,
  foreign key (idUsuari) references usuari(id)  on update cascade on delete no action,
  foreign key (idVivenda) references vivenda(id)  on update cascade on delete no action
);

create table estat (
  id int primary key auto_increment,
  nom text not null
);

create table reserva (
  id int primary key auto_increment,
  entrada date not null,
  sortida date not null,
  preu double not null,
  fechaReserva timestamp not null,
  confirmacion boolean not null,
  idVivenda int not null,
  idUsuari int not null,
  idEstat int not null,
  foreign key (idVivenda) references vivenda(id)  on update cascade on delete no action,
  foreign key (idEstat) references estat(id)  on update cascade on delete no action,
  foreign key (idUsuari) references usuari(id)  on update cascade on delete no action
);
create database glassbyteVenda;
use glassbyteVenda;
create table orderGlass(
	id int not null primary key auto_increment,
    clientName varchar (50) not null,
    phoneClient varchar (20) not null,
    adressClient varchar (50) not null,
    houseNumber varchar (8) not null,
    neighborhood varchar (40) not null,
    stateClient varchar (2) not null
);
create table budgetService(
	id int not null primary key auto_increment,
    clientName varchar (50) not null,
    phoneClient varchar (20) not null,
    choosedService varchar(30) not null,
    serviceValue varchar (15) not null,
    urgenceService varchar (10) not null
);
create table budgetWEB(
	id int not null primary key auto_increment,
    clientName varchar (50) not null,
    phoneClient varchar (20) not null,
    serviceValue varchar (15) not null,
    urgenceService varchar (10) not null
);
create table budgetSoftware(
	id int not null primary key auto_increment,
    clientName varchar (50) not null,
    phoneClient varchar (20) not null,
    serviceValue varchar (15) not null,
    urgenceService varchar (10) not null
);
create table budgetMobile(
	id int not null primary key auto_increment,
    clientName varchar (50) not null,
    phoneClient varchar (20) not null,
    serviceValue varchar (15) not null,
    urgenceService varchar (10) not null
);
create table consulting(
	id int not null primary key auto_increment,
    clientName varchar (50) not null,
    phoneClient varchar (20) not null,
    valueConsulting varchar(15) not null
);
create table offerMessages(
	id int not null primary key auto_increment,
    clientName varchar (50) not null,
    phoneClient varchar (20) not null,
    newPromotionsNotification boolean not null,
    newProductsNotification boolean not null
);
create table paymentForm(
	id int not null primary key auto_increment,
    clientName varchar (50) not null,
    phoneClient varchar (20) not null,
    form varchar(25) not null,
    totalValue varchar(15) not null
);
CREATE TABLE University(
	name varchar(50) primary key,
	state varchar(10),
	city varchar(20)
);

CREATE TABLE Department(
	university varchar(50) references University,
	name varchar(20) primary key
);

CREATE TABLE TextBook(
	price int,
	ISBN varchar(20) primary key,
	name varchar(50),
	author varchar(20)
);

CREATE TABLE Professor(
	name varchar(20),
	university varchar(50) references University,
	department varchar(20) references Department,
	email varchar(20) primary key,
	rating float
);

CREATE TABLE Class(
	university varchar(50) references University,
	department varchar(20) references Department,
	name varchar(50),
	id int primary key,
	prof varchar(20) references Professor,
	location varchar(20),
	isbn varchar(20) references TextBook,
	credits int,
	type int,
	section varchar(5)
);

CREATE TABLE Users(
	facebookid varchar(20),
	name varchar(20) primary key,
	univerisyt varchar(50) references University,
	classStanding varchar(10),
	class int references Class	
);
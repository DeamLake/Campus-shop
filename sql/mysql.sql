//role_state 1:普通用户  2：配送员  3：管理员


create database shop default character set utf8 collate utf8_unicode_ci;

use shop;

create table users (
	id varchar(50) primary key,
	name varchar(100),
	password varchar(100),
	role varchar(20),
	role_state int(10) default 1,
	level int(10) default 1,
	experience int(10) default 0，
	ecash double default 0.00,
	headimage varchar(100) default 'defaulthead'
);

create table students (
	id varchar(50) primary key,
	name varchar(50),
	registflag int(5) default 0
);

create table commodity (
	id int primary key AUTO_INCREMENT,
	name varchar(50),
	classify varchar(50),
	price int(50),
	seller varchar(50),
	sellerID varchar(50),
	discout int(10) default 0,
	imag_name varchar(100),
	state varchar(20) default 'normal',
	describeinfo text(500)
)

create table order (
	order_id int primary key AUTO_INCREMENT,
	commodity_id int(50),
	seller_id varchar(50),
	buyer_id varchar(50),
	buyer_phone varchar(50),
	buyer_address varchar(100),
	delivery_id varchar(50) default '无',
	order_state varchar(50) default '未发货'
)

create table deliver (
	deliver_id int primary key AUTO_INCREMENT,
	user_id varchar(50),
	deliver_state varchar(50) default '申请中',
	order_count int(50) default 0,
	commission int(50) default 0
)

create table cart (
	id int primary key AUTO_INCREMENT,
	wanter varchar(50),
	cid int(50)
)



insert into students (id ,name) values('10001','实验体一号');
insert into students (id ,name) values('10002','实验体二号');
insert into students (id ,name) values('10003','实验体三号');
insert into students (id ,name) values('10004','实验体四号');
insert into students (id ,name) values('10005','实验体五号');
insert into students (id ,name) values('10006','实验体六号');
insert into students (id ,name) values('10007','实验体七号');
insert into students (id ,name) values('10008','实验体八号');
insert into students (id ,name) values('10009','实验体九号');


create database civilproblem;

use civilproblem;

create table siteuser(
aadharid varchar(16 ) primary key,
username varchar(30),
city varchar(20),
address varchar(250),
emailid varchar(30),
contact varchar(10),
password varchar(10),
status varchar(10)
);

create table admin(
adminname varchar(30 ) primary key,
password varchar(10)
);

insert into admin(adminname,password) values('admin','admin');

create table problem(
pid int(5) primary key auto_increment,
ptitle varchar(50),
pdesc varchar(250),
pdate varchar(20),
username varchar(30),
pplace varchar(30),
votes varchar(10),
status varchar(10),
startdate varchar(20),
estcompdate varchar(20),
actcompdate varchar(20)
);


create table vote(
vid int(5) primary key auto_increment,
pid varchar(10),
userid varchar(10)
);

create table contact(
id int(5) primary key auto_increment,
firstname varchar(30),
lastname varchar(30),
contact varchar(10),
emailid varchar(30),
subject varchar(200)
);

create table feedback(
id int(5) primary key auto_increment,
msg varchar(30),
username varchar(30),
fdate varchar(10),
emailid varchar(30)
);


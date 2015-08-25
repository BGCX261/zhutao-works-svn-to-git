create database if not exists lawyer;
use lawyer;
create table authors(
    id INT unsigned auto_increment primary key,
    name varchar(100),
    password varchar(100) default "123456",
    sex varchar(10) default "男",
    intro text,
    icon varchar(100) default "",
    phone int,
    cellphone int,
    address varchar(300) default "",
    homepage varchar(300) default "",
    email varchar(200) default "",
    type int default 1,
    created datetime default null
);

create table articles(
    id INT unsigned auto_increment primary key,
    title varchar(100),
    body text ,
    author_id int not null,
    type_id int not null,
    created datetime default null
);


create table types(
    id INT unsigned auto_increment primary key,
    name varchar(50),
    created datetime default null
    );

insert into authors values(0, "tang", "tang", "男", "律师", "", 13696859, 123659, "北京", "", "", 0, now());

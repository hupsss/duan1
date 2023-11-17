create database duan1;
use duan1;

create table categories(
	category_id int auto_increment primary key,
    category_name varchar(50) not null
);

create table product(
	product_id int auto_increment primary key,
    product_name varchar(255) not null,
    price float not null,
    discount float not null,
    image varchar(255) not null,
    dateAdd date not null,
    descripsion varchar(255) not null,
    special int not null default 0,
    view int default 0,
    id_category int not null,
    foreign key (id_category) references categories(category_id)
);
ALTER TABLE product
ADD size VARCHAR(255);
ALTER TABLE product
ADD size VARCHAR(255);
ALTER TABLE product
ADD material VARCHAR(255);

create table account(
	account_id int auto_increment  primary key,
    user varchar(50) not null,
    passWork varchar(50) not null,
    fullName varchar(50) not null,
    email varchar(200) not null,
    address varchar(50) ,
    tel  varchar(50) ,
    role int  default 0
);
create table comment(
	comment_id int auto_increment primary key,
    content varchar(255) not null,
    id_product int not null,
    id_account int not null, 
    date_comment varchar(50) not null,
    foreign key (id_product) references product(product_id),
    foreign key (id_account) references account(account_id)
);
create table ordor(
	order_id int(11) auto_increment primary key,
    order_name varchar(255) not null,
    tel varchar(50) not null,
    address varchar(255)  not null,
    note varchar(255) not null,
    total int(11) not null,
    created_time int(11) NOT NULL,
    last_updated int(11) NOT NULL
);
create table order_detail(
	detail_id int(11) auto_increment primary key,
    id_order int(11) not null,
    id_product int(11) not null,
    quantity  int(11) not null,
    price float not null,
     created_time int(11) NOT NULL,
    last_updated int(11) NOT NULL,
    foreign key (id_order) references ordor(order_id),
    foreign key (id_product) references product(product_id)
);

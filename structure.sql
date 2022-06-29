
Create database musiclove;

Use musiclove;

create table users ( 
    nome char(255) not null,
    cognome char(255) not null,   
    username char(16) primary key,  
    email char(255) not null unique,  
    password char(255) not null,
    updated_at char(255),
    created_at char(255))  
    engine ='Innodb';

create table songs (
    titolo varchar(255) primary key, 
    img varchar(255) not null,
    updated_at char(255),
    created_at char(255)) 
    Engine='Innodb'; 

create table likes(
    username varchar(255),
    titolo varchar(255), 
    updated_at char(255),
    created_at char(255),
    index usernamex(username), 
    index titolox(titolo), 
    foreign key(username) references users(username) on update cascade,
    foreign key(titolo) references songs(titolo) on update cascade,
    primary key(username,titolo))
    engine='Innodb';
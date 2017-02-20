use udom;

create table usuarios (
    id int auto_increment comment 'identificador de usuario',
    username varchar(20) not null comment 'nombre de usuario',
    passwd varchar(200) not null comment 'contraseña de usuario',
    nombre varchar(50) not null comment 'nombre de pila',
    apellidos varchar(50) not null comment 'apellidos',
    email varchar(200) not null default 'sin@correo.com' comment 'correo electronico',
    primary key (id),
    unique idx_username (username)
) engine = MyISAM;

insert into usuarios (username, passwd, nombre, apellidos, email)
values ('chuy12', 'd5f12e53a182c062b6bf30c1445153faff12269a', 'jesus', 'mercado alvarez', 'chuyb312@gmail.com');
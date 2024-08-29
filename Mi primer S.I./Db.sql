drop schema if exists `sistema_informacion`;

create schema if not exists `sistema_informacion` default character set utf8 collate utf8_sapanish_ci;

CREATE TABLE `persona`(
    id int not null AUTO_INCREMENT,
`nombre_usuario` text not null,
PRIMARY KEY (id)
    
)engine=Innodb default charset=utf8;

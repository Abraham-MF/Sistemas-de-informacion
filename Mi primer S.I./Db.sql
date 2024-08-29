drop schema if exists `proyecto_web_1`;

create schema if not exists `proyecto_web_1` default character set utf8 collate utf8_sapanish_ci;

CREATE TABLE `persona`(
    id int not null AUTO_INCREMENT,
`nombre_usuario` text not null,
PRIMARY KEY (id)
    
)engine=Innodb default charset=utf8;
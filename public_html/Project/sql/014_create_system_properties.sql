CREATE TABLE IF NOT EXISTS  `System_Properties`
(
    `id`         int auto_increment not null,
    `name`      varchar(20)       not null unique,
    Apy int,
    `created`    timestamp default current_timestamp,
    `modified`   timestamp default current_timestamp on update current_timestamp,
    PRIMARY KEY (`id`)
)


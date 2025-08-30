CREATE TABLE `usuarios` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nombre_usuario` VARCHAR(50) NOT NULL UNIQUE,
    `contraseña` VARCHAR(255) NOT NULL,
    `correo` VARCHAR(100) NULL,
    `fecha_registro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);
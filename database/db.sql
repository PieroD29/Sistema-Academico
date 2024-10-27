CREATE TABLE usuarios(

    id_usuario  INT (11)  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres     VARCHAR (255) NOT NULL,
    cargo       VARCHAR (255) NOT NULL,
    email       VARCHAR (255) NOT NULL UNIQUE KEY,
    password  text NOT NULL,

    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado VARCHAR(11)
    
)ENGINE=InnoDB;

INSERT INTO usuarios (nombres, cargo, email, password, fyh_creacion, estado)
VALUES ('Juan Icochea Maguiña', 'ADMINISTRADOR', 'admin@admin.com', '12345678', '2024-09-11 19:21:00', '1');

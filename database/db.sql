DROP DATABASE IF EXISTS sistema_gestion_escolar;
CREATE DATABASE sistema_gestion_escolar CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE sistema_gestion_escolar;

CREATE TABLE usuarios(
id int primary key auto_increment,
nombres char(255) not null,
cargo char(255) not null,
email char(255) not null unique key,
passwordd text not null,
created_at datetime null,
updated_at datetime null,
estado char(11)
) ENGINE=InnoDB;
        
CREATE TABLE roles(
id int primary key auto_increment,
nombre_rol char(255) not null,
created_at datetime null,
updated_at datetime null,
estado char(11)
) ENGINE=InnoDB;


-- DATOS
INSERT INTO usuarios( nombres, cargo, email, passwordd, created_at, estado )
		VALUES( 'Admin', 'Admin', 'admin@app.com', '123', '2024-11-02', '1' );
        
INSERT INTO roles( nombre_rol, created_at, estado )
		VALUES ( 'ADMINISTRADOR', '2024-11-04 10:30:15', '1' ),
            ( 'DIRECTOR ACADEMICO', '2024-11-04 10:30:15', '1' ),
            ( 'DIRECTOR ADMINISTRATIVO', '2024-11-04 10:30:15', '1' ),
            ( 'CONTADOR', '2024-11-04 10:30:15', '1' ),
            ( 'SECRETARIA', '2024-11-04 10:30:15', '1' );


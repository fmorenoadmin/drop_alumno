CREATE TABLE alumnos(
	id_a INT PRIMARY KEY AUTO_INCREMENT,
	codigo VARCHAR(50) NULL DEFAULT NULL,
	apellidos VARCHAR(350) NULL DEFAULT NULL,
	nombres VARCHAR(350) NULL DEFAULT NULL,
	direccion VARCHAR(350) NULL DEFAULT NULL,
	especialidad VARCHAR(350) NULL DEFAULT NULL,
	created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO alumnos (codigo, apellidos, nombres, direccion, especialidad) VALUES
	('12341', 'ramirez', 'carlos', '', 'programacion'),
	('12342', 'carvajal', 'juan', '', 'redes'),
	('12343', 'antunez', 'pedro', '', 'video'),
	('12344', 'mayolo', 'maria', '', 'software'),
	('12345', 'ramon', 'margarita', '', 'disenio'),
	('12346', 'urtado', 'alberto', '', 'psicologia'),
	('12347', 'alvarado', 'karla', '', 'agronomia'),
	('12348', 'velazques', 'karolina', '', 'programacion'),
	('12349', 'carrasco', 'ana', '', 'redes'),
	('12350', 'flores', 'pepito', '', 'disenio')
;
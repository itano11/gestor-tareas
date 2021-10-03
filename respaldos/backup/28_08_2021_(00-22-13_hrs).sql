SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS crudphp;

USE crudphp;

DROP TABLE IF EXISTS tareas;

CREATE TABLE `tareas` (
  `id_tarea` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `rutCreadorTarea` varchar(9) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(1020) NOT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_tarea`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;

INSERT INTO tareas VALUES("000004","123456789","Larissa Ramírez","Crear nuevo CRUD","El CRUD debe ser sencillo","2021-08-21 12:23:41");
INSERT INTO tareas VALUES("000005","112223334","Pedro Agurto","Crear aplicación que consuma API","La aplicación debe ser creada con Laravel","2021-08-21 12:27:21");
INSERT INTO tareas VALUES("000006","123123123","Carlos Parada","App clima Chile","App que entrega el clima de todo Chile","2021-08-21 13:09:53");
INSERT INTO tareas VALUES("000013","126583516","Aldo Tamburini","Validación","Realizar validación de formulario con PHP","2021-08-25 10:05:26");
INSERT INTO tareas VALUES("000015","126583516","Aldo Tamburini","Prueba de Recuperación","Probando para nueva restauración","2021-08-25 20:12:56");
INSERT INTO tareas VALUES("000017","126583516","Aldo Tamburini","Prueba 1","Realizando pruebas","2021-08-26 09:26:23");
INSERT INTO tareas VALUES("000049","123456768","Aldo Tamburini","El título","ssssssssssssssssssssssssss","2021-08-27 00:49:36");
INSERT INTO tareas VALUES("000059","126583516","Aldo Tamburini","T&O","sdfsdfsdfsdfsdfsdfsdf","2021-08-27 23:50:28");
INSERT INTO tareas VALUES("000060","126583516","Aldo Tamburini","El título","Acá va la descripción de la tarea...","2021-08-28 00:11:53");



SET FOREIGN_KEY_CHECKS=1;
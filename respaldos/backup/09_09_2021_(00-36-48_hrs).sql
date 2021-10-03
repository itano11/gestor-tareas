SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS crudphp;

USE crudphp;

DROP TABLE IF EXISTS bitacora;

CREATE TABLE `bitacora` (
  `id_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `accion` varchar(1020) NOT NULL,
  `responsable_viejo` varchar(100) DEFAULT NULL,
  `responsable_nuevo` varchar(100) DEFAULT NULL,
  `titulo_tarea_viejo` varchar(100) DEFAULT NULL,
  `titulo_tarea_nuevo` varchar(100) DEFAULT NULL,
  `descripcion_tarea_vieja` varchar(1020) DEFAULT NULL,
  `descripcion_tarea_nueva` varchar(1020) DEFAULT NULL,
  PRIMARY KEY (`id_bitacora`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

INSERT INTO bitacora VALUES("1","2021-09-03 19:37:17","Se actualizó una tarea","","","","","","");
INSERT INTO bitacora VALUES("2","2021-09-03 19:43:00","Se actualizó una tarea","","","TGR","","","");
INSERT INTO bitacora VALUES("3","2021-09-03 19:46:51","Se actualizó una tarea","","","El título","El título nuevo","","");
INSERT INTO bitacora VALUES("4","2021-09-03 20:05:05","Se actualizó una tarea","Aldo Tamburini","Carlos Parada","TGR","TGR","sdfsdfsdfsdfsdfsdfsdf","sdfsdfsdfsdfsdfsdfsdf");
INSERT INTO bitacora VALUES("5","2021-09-03 20:05:30","Se actualizó una tarea","Carlos Parada","Carlos Parada","TGR","TGR","sdfsdfsdfsdfsdfsdfsdf","Nueva descripcion");
INSERT INTO bitacora VALUES("6","2021-09-03 20:16:15","Se actualizó tarea con id: 000006","Carlos Parada","Carlos Parada","App clima Chile","App Clima Chile","App que entrega el clima de todo Chile","App que entrega el clima de todo Chile");
INSERT INTO bitacora VALUES("7","2021-09-03 20:37:04","Se creo nueva tarea con id: 000066","","Sofía Herrera","","Tarea 25","","Nueva tarea de prueba");
INSERT INTO bitacora VALUES("8","2021-09-03 21:40:48","Se actualizó tarea con id: 000049","Aldo Tamburini","Aldo Tamburini","El título","Título nuevo","ssssssssssssssssssssssssss","Nueva descripción de la tarea");
INSERT INTO bitacora VALUES("9","2021-09-05 16:03:16","Se creo nueva tarea con id: 000067","","Sebastián Carter","","Agenda Odontológica","","Desarrollar sistema de agenda de horas");
INSERT INTO bitacora VALUES("10","2021-09-05 16:08:42","Se creo nueva tarea con id: 000068","","Julio Martínez","","Website","","Desarrollar website taller mecánico");
INSERT INTO bitacora VALUES("11","2021-09-05 16:09:10","Se actualizó tarea con id: 000068","Julio Martínez","Julio Martínez","Website","Website","Desarrollar website taller mecánico","Desarrollar website taller mecánico San Miguel");
INSERT INTO bitacora VALUES("12","2021-09-05 16:10:40","Se actualizó tarea con id: 000068","Julio Martínez","Julio Martínez","Website","Website","Desarrollar website taller mecánico San Miguel","Desarrollar website taller mecánico San Bernardo");
INSERT INTO bitacora VALUES("13","2021-09-09 00:35:14","Se actualizó tarea con id: 000067","Sebastián Carter","Sebastián Carter","Agenda Odontológica","Agenda Clínica Odontológica","Desarrollar sistema de agenda de horas","Desarrollar sistema de agenda de horas");
INSERT INTO bitacora VALUES("14","2021-09-09 00:35:52","Se creo nueva tarea con id: 000069","","Marcelo Lopez","","Última Tarea","","Acá va la descripción");



DROP TABLE IF EXISTS tareas;

CREATE TABLE `tareas` (
  `id_tarea` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `rutCreadorTarea` varchar(9) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(1020) NOT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_tarea`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4;

INSERT INTO tareas VALUES("000004","123456789","Larissa Ramírez","Crear nuevo CRUD","El CRUD debe ser sencillo","2021-08-21 12:23:41");
INSERT INTO tareas VALUES("000005","112223334","Pedro Agurto","Crear aplicación que consuma API","La aplicación debe ser creada con Laravel","2021-08-21 12:27:21");
INSERT INTO tareas VALUES("000013","126583516","Aldo Tamburini","Validación","Realizar validación de formulario con PHP","2021-08-25 10:05:26");
INSERT INTO tareas VALUES("000015","126583516","Aldo Tamburini","Prueba de Recuperación","Probando para nueva restauración","2021-08-25 20:12:56");
INSERT INTO tareas VALUES("000049","123456768","Aldo Tamburini","Título nuevo","Nueva descripción de la tarea","2021-08-27 00:49:36");
INSERT INTO tareas VALUES("000060","126583516","Aldo Tamburini","El título nuevo","Acá va la descripción de la tarea...","2021-08-28 00:11:53");
INSERT INTO tareas VALUES("000067","118762223","Sebastián Carter","Agenda Clínica Odontológica","Desarrollar sistema de agenda de horas","2021-09-05 16:03:16");
INSERT INTO tareas VALUES("000069","123332225","Marcelo Lopez","Última Tarea","Acá va la descripción","2021-09-09 00:35:52");



DROP TABLE IF EXISTS tareas_eliminadas;

CREATE TABLE `tareas_eliminadas` (
  `id_tarea` int(6) NOT NULL,
  `rut` varchar(9) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(1020) NOT NULL,
  `fecha_eliminacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO tareas_eliminadas VALUES("66","125436543","","Tarea 25","Nueva tarea de prueba","2021-09-03 21:09:14");
INSERT INTO tareas_eliminadas VALUES("63","126583516","Aldo Tamburini","Tarea 22","Desarrollar nueva tarea","2021-09-03 21:12:34");
INSERT INTO tareas_eliminadas VALUES("6","123123123","Carlos Parada","App Clima Chile","App que entrega el clima de todo Chile","2021-09-03 21:33:03");
INSERT INTO tareas_eliminadas VALUES("59","126583516","Carlos Parada","TGR","Nueva descripcion","2021-09-03 21:33:14");
INSERT INTO tareas_eliminadas VALUES("61","89997775","Juan Pérez","Tarea 17","Realizar tarea de script antes del término del mes","2021-09-03 21:33:19");
INSERT INTO tareas_eliminadas VALUES("17","126583516","Aldo Tamburini","Prueba 1","Realizando pruebas","2021-09-03 21:35:29");
INSERT INTO tareas_eliminadas VALUES("68","84443332","Julio Martínez","Website","Desarrollar website taller mecánico San Bernardo","2021-09-05 16:11:08");
INSERT INTO tareas_eliminadas VALUES("62","112223334","Pedro Abarca","Tarea 21","Avanzar con proyecto de Laravel","2021-09-09 00:34:53");



SET FOREIGN_KEY_CHECKS=1;
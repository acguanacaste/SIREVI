/*INSERTANDO PUESTOS*/
INSERT INTO puestos_institucion VALUES(1, 'Administrador');
INSERT INTO puestos_institucion VALUES(2, 'Encargado de sector');
INSERT INTO puestos_institucion VALUES(3, 'Reportes');
INSERT INTO puestos_institucion VALUES(4, 'Voluntario');
INSERT INTO puestos_institucion VALUES(5, 'Colaborador');

/*INSERTADO EL SUARIO*/
INSERT INTO usuarios VALUES (3, 'Alex', 'Luna', '1234567', 'admin1', 1, 'cheeto12@gmail.com', 0, '');

/*INSERTANDO EL AREA SILVESTRE PROTEGIDA*/
INSERT INTO asp VALUES (1, 'Guanacaste', 'Natural', 'Guanacaste');
INSERT INTO asp VALUES (2, 'Tempisque', 'Natural', 'Guanacaste');

/*INSERTANDO PAISES*/
INSERT INTO pais VALUES(1, 'Costa Rica','+506');
INSERT INTO pais VALUES(2, 'Canada', '+12');
INSERT INTO pais VALUES(3, 'Mexico', '+233');
INSERT INTO pais VALUES(4, 'USA', '+1');
INSERT INTO pais VALUES(5, 'Alemania', '+456');

/*INSERTANDO PROVINCIAS*/
INSERT INTO provincia VALUES(1, 'San Jose',1);
INSERT INTO provincia VALUES(2, 'Alajuela', 1);
INSERT INTO provincia VALUES(3, 'Heredia', 1);
INSERT INTO provincia VALUES(4, 'Cartago', 1);
INSERT INTO provincia VALUES(5, 'Guanacaste', 1);
INSERT INTO provincia VALUES(6, 'Puntarenas', 1);
INSERT INTO provincia VALUES(7, 'Limon', 1);

/*INSERTANDO SECTOR*/
INSERT INTO sector VALUES(1, 'Santa Rosa', 80, 20, 1, 560, 1500, 1000, 19, 15, 1000, 15, 15, 15, 15, 15);
INSERT INTO sector VALUES(2, 'Junquillal', 150, 100, 1, NULL, 1100, 500, 15, 15, 500, 3300, 270, 3300, 19, 15);
INSERT into sector VALUES(3, 'Pailas', 100, 80, 1, NULL, 122112, 21, 12, 23, 23, 123, 23, 23, 98, 554);
INSERT INTO sector VALUES(4, 'Horizontes', 100, 80, 1, NULL, 542, 542, 53, 543, 543, 543, 543, 543, 54, 543);
INSERT INTO sector VALUES(5, 'Santa Maria', 100, 50, 1, NULL, 909, 43, 43, 54, 54, 54, 43, 43, 5, 434);
INSERT INTO sector VALUES(6, 'Murcielago', 100, 50, 1, NULL, 778, 78, 78, 78, 87, 87, 34, 45, 45, 24);

/*INSERTANDO SENDERO*/
INSERT INTO sendero  VALUES(1, 'los patos', 'natural', 'ijbib', 'jbibi', '12', 1, 'sd', '87', '78', 'ugv', '87', '89');

/*INSERTANDO VISITACION*/
INSERT INTO visitacion VALUES(17, 'Visita por el dia', '2018-05-08 15:20:51', '3445mmm', 'ssoooo', '09uiiuij', 4, NULL, 'Visita reiterada',
 '', 1, 1, 0, 'Naranjo', 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 21750, 'efectivo', 'colones', NULL, NULL, '00:00:00.0000');
INSERT INTO visitacion VALUES(1, 'Otra cosa', '2018-04-17 08:24:22', '88888', 'Alex Luna', '999999', 1, 1, 'Expontaneamente en ruta', NULL,
1, 1, 1, 'Naranjo', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'efectivo', 'colones', NULL, NULL, '17:15:43.0000');
INSERT INTO visitacion VALUES(6, 'Acampando', '2018-04-23 20:03:56', '898989', 'Allan', '909090', 3, 2, 'Expontaneamente en ruta', NULL,
1, 1, 1, 'Naranjo', 2, 5, 0, 1, 2, 0, 0, 5, 0, 0, 3750, 'efectivo', 'colones', NULL, '1', '15:02:53.0000');
INSERT INTO visitacion VALUES(7, 'Hospedado', '2018-04-23 20:15:32', '899999', 'Eliazar', '000999', 1, 3, 'Referencia de alguien mas', NULL, 
1, 1, 1, 'Naranjo', 2, 1, 0, 3, 3, 3, 2, 5, 2, 1, '26250', 'efectivo', 'colones', NULL, '1', '15:07:18.0000');
INSERT INTO visitacion VALUES(8, 'Acampando', '2018-04-23 20:29:18', '77777', 'Julio', '565656', 1, 4, 'Visita reiterada', NULL,
 1, 1, 0, 'Santa Rosa', 2, 0, 2, 1, 2, 2, 1, 0, 0, 1, 23250, 'efectivo', 'colones', NULL, '1', '17:46:44.0000');
INSERT INTO visitacion VALUES(9, 'Acampando', '2018-05-08 10:28:04', '344334', 'Lola lamda', '899898', 4, 5, 'Expontaneamente en ruta', NULL,
1, 1, 0, 'Naranjo', 2, 2, 1, 0, 0, 2, 0, 1, 4, 0, 53000, 'efectivo', 'colones', NULL, '1', '00:00:00.0000');
INSERT INTO visitacion VALUES(11, 'Por el dia', '2018-05-08 10:36:53', '2323', '3234', '67576', 1, 6, 'oooopp', NULL,
5, 1, 0, NULL, 2, 2, 2, 2, 2, 2, 2, 1, 2, 2, 100000, 'efectivo', 'dollar', NULL, '1', '00:00:00.0000');
INSERT INTO visitacion VALUES(12, 'Acampando', '2018-05-08 12:40:09', '32345', 'hjbjhb', '8987', 1, 7, 'iugiugiu', NULL,
4, 1, 0, 'Naranjo', 3, 1, 0, 0, 2, 1, 0, 3, 2, 2, 7500, 'efectivo', 'dollar', NULL, '1', '00:00:00.0000');
INSERT INTO visitacion  VALUES(13, 'Acampando', '2018-05-08 14:28:57', '78878878787', 'Indio desnudo', '987987987', 1, 1, 'Operadora turistica', 'NOmbre Operadora',
3, 1, 0, 'Naranjo', 2, 2, 2, 0, 1, 3, 1, 1, 3, 2, 56250, 'efectivo', 'colones', NULL, NULL, '00:00:00.0000');
INSERT INTO visitacion VALUES(14, 'Hospedado en estacion biologica', '2018-05-08 14:42:05', '339999', 'Alex', '90908888', 1, 4, 'Grupo comunal organizado', 'Nombre Grupo Comunal',
2, 1, 0, 'Santa Rosa', 3, 0, 0, 0, 5, 0, 0, 5, 2, 0, 16500, 'efectivo', 'colones', NULL, NULL, '00:00:00.0000');
INSERT INTO visitacion VALUES(15, 'Visita por el dia', '2018-05-08 15:20:51', '3445mmm', 'ssoooo', '09uiiuij', 4, NULL, 'Visita reiterada', '',
1, 1, 0, 'Naranjo', 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 21750, 'efectivo', 'colones', NULL, NULL, '00:00:00.0000');

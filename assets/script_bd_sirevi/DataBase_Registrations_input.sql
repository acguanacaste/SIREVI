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
INSERT INTO sector VALUES (1,'Santa Rosa', '100', '80', '2000', '1', '1100', '500', '500', '1100', '19', '15', '15', '570');
INSERT INTO sector VALUES (2,'Pailas', '100', '80', '2000', '1', '1100', '500', '500', '1100', '19', '15', '15', '570');
INSERT INTO sector VALUES (3,'Junquillal', '100', '80', '2000', '1', '1100', '500', '500', '1100', '19', '15', '15', '570');
INSERT INTO sector VALUES (4,'Murcielago', '100', '80', '2000', '1', '1100', '500', '500', '1100', '19', '15', '15', '570');
INSERT INTO sector VALUES (5,'Santa Maria', '100', '80', '2000', '1', '1100', '500', '500', '1100', '19', '15', '15', '570');
INSERT INTO sector VALUES (6,'Horizontez', '100', '80', '2000', '1', '1100', '500', '500', '1100', '19', '15', '15', '570');
INSERT INTO sector VALUES (7,'Marino', '100', '80', '2000', '1', '1100', '500', '500', '1100', '19', '15', '15', '570');

/*INSERTANDO SENDERO*/
INSERT INTO sendero  VALUES(1, 'los patos', 'natural', 'ijbib', 'jbibi', '12', 1, 'sd', '87', '78', 'ugv', '87', '89');
INSERT INTO sendero  VALUES(2, 'indio desnudo', 'natural', 'ijbib', 'jbibi', '12', 1, 'sd', '87', '78', 'ugv', '87', '89');
INSERT INTO sendero  VALUES(3, 'otrosendero', 'natural', 'ijbib', 'jbibi', '12', 1, 'sd', '87', '78', 'ugv', '87', '89');
INSERT INTO sendero  VALUES(4, 'carbonal', 'natural', 'ijbib', 'jbibi', '12', 1, 'sd', '87', '78', 'ugv', '87', '89');

/*INSERTANDO VISITACION*/
INSERT INTO `sirevi`.`visitacion` (`id`, `usuario`, `proposito_visita`, `subSector`, `noIdentificacion`, `nombre`, `placa_automovil`,
                                    `pais_id`, `referencia_visita`, `asp`, `sector`, `sendero`, `salida`, `nacional_adult`, `nacional_kid`,
                                    `estudiantes`, `nacional_surf`,`nacional_prepago`, `nacional_exonerado`, `extranjero_adult`, `extranjero_kid`,
                                    `extranjero_surf`, `extranjero_prepago`, `extranjero_exonerado`, `tipo_pago`, `moneda`, `montoCancelar`) 
						VALUES ('7', '3', 'Visita por el dia', 'Naranjo', '78787878', 'Julian', 'placaautito', '2', 'Visita Reiterada', '1', '1', '2', '0', '2', '0',
								'0', '0', '0', '0', '2', '1', '1', '2', '0', 'Efectivo', 'Colones', '12000');

INSERT INTO `sirevi`.`visitacion` (`id`, `usuario`, `proposito_visita`, `subSector`, `noIdentificacion`, `nombre`, `placa_automovil`,
                                    `pais_id`, `referencia_visita`, `asp`, `sector`, `sendero`, `salida`, `nacional_adult`, `nacional_kid`,
                                    `estudiantes`, `nacional_surf`,`nacional_prepago`, `nacional_exonerado`, `extranjero_adult`, `extranjero_kid`,
                                    `extranjero_surf`, `extranjero_prepago`, `extranjero_exonerado`, `tipo_pago`, `moneda`, `montoCancelar`) 
						VALUES ('8', '3', 'Acampando', 'Naranjo', '5555555', 'Arnold', 'placaautito', '2', 'Visita Reiterada', '1', '1', '2', '0', '2', '0',
								'0', '0', '0', '0', '2', '1', '1', '2', '0', 'Efectivo', 'Colones', '12000');

INSERT INTO `sirevi`.`visitacion` (`id`, `usuario`, `proposito_visita`, `subSector`, `noIdentificacion`, `nombre`, `placa_automovil`,
                                    `pais_id`, `referencia_visita`, `asp`, `sector`, `sendero`, `salida`, `nacional_adult`, `nacional_kid`,
                                    `estudiantes`, `nacional_surf`,`nacional_prepago`, `nacional_exonerado`, `extranjero_adult`, `extranjero_kid`,
                                    `extranjero_surf`, `extranjero_prepago`, `extranjero_exonerado`, `tipo_pago`, `moneda`, `montoCancelar`) 
						VALUES ('9', '3', 'Hospedado en reserva Biologica', 'Naranjo', '5555555', 'Erick', 'placaautito', '2', 'Visita Reiterada', '1', '1', '2', '0', '2', '0',
								'0', '0', '0', '0', '2', '1', '1', '2', '0', 'Efectivo', 'Colones', '12000');



INSERT INTO `sirevi`.`visitacion` (`id`, `usuario`, `proposito_visita`, `subSector`, `noIdentificacion`, `nombre`, `placa_automovil`,
                                    `pais_id`, `referencia_visita`, `asp`, `sector`, `sendero`, `salida`, `nacional_adult`, `nacional_kid`,
                                    `estudiantes`, `nacional_surf`,`nacional_prepago`, `nacional_exonerado`, `extranjero_adult`, `extranjero_kid`,
                                    `extranjero_surf`, `extranjero_prepago`, `extranjero_exonerado`, `tipo_pago`, `moneda`, `montoCancelar`) 
						VALUES ('10', '3', 'Visita por el dia', 'Naranjo', '78787878', 'Julian', 'placaautito', '2', 'Visita Reiterada', '1', '1', '2', '0', '2', '0',
								'0', '0', '0', '0', '2', '1', '1', '2', '0', 'Efectivo', 'Colones', '12000');

INSERT INTO `sirevi`.`visitacion` (`id`, `usuario`, `proposito_visita`, `subSector`, `noIdentificacion`, `nombre`, `placa_automovil`,
                                    `pais_id`, `referencia_visita`, `asp`, `sector`, `sendero`, `salida`, `nacional_adult`, `nacional_kid`,
                                    `estudiantes`, `nacional_surf`,`nacional_prepago`, `nacional_exonerado`, `extranjero_adult`, `extranjero_kid`,
                                    `extranjero_surf`, `extranjero_prepago`, `extranjero_exonerado`, `tipo_pago`, `moneda`, `montoCancelar`) 
						VALUES ('11', '3', 'Acampando', 'Naranjo', '5555555', 'Arnold', 'placaautito', '2', 'Visita Reiterada', '1', '1', '2', '0', '2', '0',
								'0', '0', '0', '0', '2', '1', '1', '2', '0', 'Efectivo', 'Colones', '12000');

INSERT INTO `sirevi`.`visitacion` (`id`, `usuario`, `proposito_visita`, `subSector`, `noIdentificacion`, `nombre`, `placa_automovil`,
                                    `pais_id`, `referencia_visita`, `asp`, `sector`, `sendero`, `salida`, `nacional_adult`, `nacional_kid`,
                                    `estudiantes`, `nacional_surf`,`nacional_prepago`, `nacional_exonerado`, `extranjero_adult`, `extranjero_kid`,
                                    `extranjero_surf`, `extranjero_prepago`, `extranjero_exonerado`, `tipo_pago`, `moneda`, `montoCancelar`) 
						VALUES ('12', '3', 'Hospedado en reserva Biologica', 'Naranjo', '5555555', 'Erick', 'placaautito', '2', 'Visita Reiterada', '1', '1', '2', '0', '2', '0',
								'0', '0', '0', '0', '2', '1', '1', '2', '0', 'Efectivo', 'Colones', '12000');


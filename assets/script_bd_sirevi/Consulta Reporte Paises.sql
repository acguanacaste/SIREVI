
(SELECT provincia.nombre AS Provincia, sector.nombre AS Sector, subSector AS SubSector, count(visitacion.subSector) AS Registros_SubSector,
SUM(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes) AS Pagos,
SUM(visitacion.prepago) AS Prepagos,
SUM(visitacion.nacional_exonerado) AS Exonerados,
SUM(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes
	+visitacion.nacional_exonerado+visitacion.nacional_prepago) AS Total
FROM visitacion
INNER JOIN provincia ON visitacion.provincia_id = provincia.id
INNER JOIN sector ON visitacion.sector = sector.id
-- WHERE visitacion.fecha BETWEEN 2018-09-01 AND 2018-09-30
GROUP BY provincia.nombre ORDER BY sector.id)

UNION

(SELECT "Subtotal CR", "----", "----", count(visitacion.subSector) AS Registros_SubSector,
SUM(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes) AS Pagos,
SUM(visitacion.prepago) AS Prepagos,
SUM(visitacion.nacional_exonerado) AS Exonerados,
SUM(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes
	+visitacion.nacional_exonerado+visitacion.nacional_prepago) AS Total
FROM visitacion
INNER JOIN provincia ON visitacion.provincia_id = provincia.id
INNER JOIN sector ON visitacion.sector = sector.id
-- WHERE visitacion.fecha BETWEEN 2018-09-01 AND 2018-09-30
 ORDER BY sector.id)
 
 UNION

(SELECT pais.nombre AS Pais, sector.nombre AS Sector, subSector AS SubSector, count(visitacion.subSector) AS Registros_SubSector,
SUM(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes) AS Pagos,
SUM(visitacion.prepago) AS Prepagos,
SUM(visitacion.nacional_exonerado) AS Exonerados,
SUM(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes
	+visitacion.nacional_exonerado+visitacion.nacional_prepago) AS Total
FROM visitacion
INNER JOIN pais ON visitacion.pais_id = pais.id
INNER JOIN sector ON visitacion.sector = sector.id
WHERE pais.nombre != 'Costa Rica'
 GROUP BY pais.nombre ORDER BY sector.id)
 
  
 UNION

(SELECT "SubTotal Paises","---","---", count(visitacion.subSector) AS Registros_SubSector,
SUM(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes) AS Pagos,
SUM(visitacion.prepago) AS Prepagos,
SUM(visitacion.nacional_exonerado) AS Exonerados,
SUM(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes
	+visitacion.nacional_exonerado+visitacion.nacional_prepago) AS Total
FROM visitacion
INNER JOIN pais ON visitacion.pais_id = pais.id
INNER JOIN sector ON visitacion.sector = sector.id
WHERE pais.nombre != 'Costa Rica'
ORDER BY sector.id)

 UNION

(SELECT "Total", "-----", "----", count(visitacion.subSector) AS Registros_SubSector,
SUM(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes) AS Pagos,
SUM(visitacion.prepago) AS Prepagos,
SUM(visitacion.nacional_exonerado) AS Exonerados,
SUM(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes
	+visitacion.nacional_exonerado+visitacion.nacional_prepago) AS Total
FROM visitacion
INNER JOIN pais ON visitacion.pais_id = pais.id
INNER JOIN sector ON visitacion.sector = sector.id
ORDER BY sector.id)

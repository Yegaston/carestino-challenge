/*
Tenemos una tabla de estudiantes que tienen datos incorrectos en la matricula del año entre los ids 20 y 100 (inclusive).
Se guardaron erroneamente con el dato 2019.
Escriba una consulta en SQL que actualice estos registros al año 2020.

TABLE enrollments
id INTEGER NOT NULL PRIMARY KEY
year INTEGER NOT NULL
studentId INTEGER NOT NULL

*/

-- todo sql


UPDATE FROM enrollments
SET year = 2020
WHERE studentId BETWEEN 20 AND 100


-- The BETWEEN operator is inclusive: begin and end values are included.

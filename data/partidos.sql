--
-- PostgreSQL database dump
--

-- Started on 2011-06-12 13:51:20

SET statement_timeout = 0;
SET client_encoding = 'WIN1252';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

SET search_path = pollaca2011_sch, pg_catalog;

--
-- TOC entry 1804 (class 0 OID 41927)
-- Dependencies: 1520
-- Data for Name: partido; Type: TABLE DATA; Schema: pollaca2011_sch; Owner: admins
--

INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (1, 1, 2, -1, -1, '2011-07-01 19:45:00', 'La Plata', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (2, 3, 4, -1, -1, '2011-07-02 13:30:00', 'Jujuy', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (3, 5, 7, -1, -1, '2011-07-03 14:00:00', 'La Plata', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (4, 6, 8, -1, -1, '2011-07-03 16:30:00', 'Santa Fe', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (5, 11, 12, -1, -1, '2011-07-04 17:15:00', 'San Juan', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (6, 9, 10, -1, -1, '2011-07-04 19:45:00', 'San Juan', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (7, 1, 3, -1, -1, '2011-07-06 19:45:00', 'Santa Fe', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (8, 2, 4, -1, -1, '2011-07-07 17:15:00', 'Jujuy', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (9, 12, 10, -1, -1, '2011-07-08 17:15:00', 'Mendoza', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (10, 11, 9, -1, -1, '2011-07-08 19:45:00', 'Mendoza', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (11, 5, 6, -1, -1, '2011-07-09 14:00:00', 'Córdoba', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (12, 7, 8, -1, -1, '2011-07-09 16:30:00', 'Salta', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (14, 1, 4, -1, -1, '2011-07-11 19:45:00', 'Córdoba', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (13, 3, 2, -1, -1, '2011-07-10 14:00:00', 'Santa Fe', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (15, 9, 12, -1, -1, '2011-07-12 17:15:00', 'Mendoza', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (16, 11, 10, -1, -1, '2011-07-12 19:45:00', 'La Plata', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (17, 6, 7, -1, -1, '2011-07-13 17:15:00', 'Salta', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (18, 5, 8, -1, -1, '2011-07-13 19:45:00', 'Córdoba', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (19, 13, 19, -1, -1, '2011-07-16 14:00:00', 'Córdoba', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (20, 14, 18, -1, -1, '2011-07-16 17:15:00', 'Santa Fe', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (21, 15, 20, -1, -1, '2011-07-17 14:00:00', 'La Plata', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (22, 17, 16, -1, -1, '2011-07-17 17:15:00', 'San Juan', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (23, 21, 22, -1, -1, '2011-07-19 19:45:00', 'La Plata', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (24, 23, 24, -1, -1, '2011-07-20 19:45:00', 'Mendoza', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (25, 27, 28, -1, -1, '2011-07-23 14:00:00', 'La Plata', 'N');
INSERT INTO partido (idpartido, idequipo1, idequipo2, resultadoequipo1, resultadoequipo2, fechahora, sede, jugado) VALUES (26, 25, 26, -1, -1, '2011-07-24 14:00:00', 'Buenos Aires', 'N');


-- Completed on 2011-06-12 13:51:20

--
-- PostgreSQL database dump complete
--


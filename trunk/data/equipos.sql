--
-- PostgreSQL database dump
--

-- Started on 2011-06-12 13:50:02

SET statement_timeout = 0;
SET client_encoding = 'WIN1252';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

SET search_path = pollaca2011_sch, pg_catalog;

--
-- TOC entry 1804 (class 0 OID 41915)
-- Dependencies: 1518
-- Data for Name: equipo; Type: TABLE DATA; Schema: pollaca2011_sch; Owner: admins
--

INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (1, 'Argentina', 'A', 'N', 'N', 'N', 'N', 'argentina.gif');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (2, 'Bolivia', 'A', 'N', 'N', 'N', 'N', 'bolivia.gif');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (3, 'Colombia', 'A', 'N', 'N', 'N', 'N', 'colombia.gif');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (4, 'Costa Rica', 'A', 'N', 'N', 'N', 'N', 'costa_rica.gif');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (5, 'Brasil', 'B', 'N', 'N', 'N', 'N', 'brasil.gif');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (6, 'Paraguay', 'B', 'N', 'N', 'N', 'N', 'paraguay.gif');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (7, 'Venezuela', 'B', 'N', 'N', 'N', 'N', 'venezuela.gif');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (8, 'Ecuador', 'B', 'N', 'N', 'N', 'N', 'ecuador.gif');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (9, 'Chile', 'C', 'N', 'N', 'N', 'N', 'chile.gif');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (10, 'México', 'C', 'N', 'N', 'N', 'N', 'mexico.gif');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (11, 'Uruguay', 'C', 'N', 'N', 'N', 'N', 'uruguay.gif');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (12, 'Perú', 'C', 'N', 'N', 'N', 'N', 'peru.gif');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (13, '1ro. Grupo A', '4', 'N', 'N', 'N', 'N', 'N');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (14, '2do. Grupo A', '4', 'N', 'N', 'N', 'N', 'N');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (15, '1ro. Grupo B', '4', 'N', 'N', 'N', 'N', 'N');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (16, '2do. Grupo B', '4', 'N', 'N', 'N', 'N', 'N');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (17, '1ro. Grupo C', '4', 'N', 'N', 'N', 'N', 'N');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (18, '2do. Grupo C', '4', 'N', 'N', 'N', 'N', 'N');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (19, 'Mejor Tercero', '4', 'N', 'N', 'N', 'N', 'N');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (20, '2do. Mejor Tercero', '4', 'N', 'N', 'N', 'N', 'N');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (21, 'Ganador P19', 'S', 'N', 'N', 'N', 'N', 'N');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (22, 'Ganador P20', 'S', 'N', 'N', 'N', 'N', 'N');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (23, 'Ganador P21', 'S', 'N', 'N', 'N', 'N', 'N');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (24, 'Ganador P22', 'S', 'N', 'N', 'N', 'N', 'N');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (25, 'Ganador P23', 'F', 'N', 'N', 'N', 'N', 'N');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (26, 'Ganador P24', 'F', 'N', 'N', 'N', 'N', 'N');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (27, 'Perdedor P23', 'F', 'N', 'N', 'N', 'N', 'N');
INSERT INTO equipo (idequipo, nombre, grupo, clasificado, semifinalista, vicecampeon, campeon, linkbandera) VALUES (28, 'Perdedor P24', 'F', 'N', 'N', 'N', 'N', 'N');


-- Completed on 2011-06-12 13:50:03

--
-- PostgreSQL database dump complete
--


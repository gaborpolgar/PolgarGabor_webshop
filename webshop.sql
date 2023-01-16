CREATE DATABASE webshop;
CREATE TABLE `felhasznalo` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `felhasznalo_nev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
 `email` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
 `jelszo` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
 `teljes_nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
 `szuletesi_datum` date NOT NULL,
 `irnayito_szam` int(4) NOT NULL,
 `varos` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
 `cim` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
 `regisztracio_idopontja` datetime NOT NULL DEFAULT current_timestamp(),
 PRIMARY KEY (`id`),
 UNIQUE KEY `felhasznalo_nev` (`felhasznalo_nev`),
 UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci
termek	CREATE TABLE `termek` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
 `leiras` text COLLATE utf8_hungarian_ci NOT NULL,
 `ar` int(11) NOT NULL,
 `kep` varchar(100) COLLATE utf8mb4_hungarian_ci NOT NULL
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci

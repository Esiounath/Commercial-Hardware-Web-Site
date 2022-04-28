-- phpMyAdmin SQL Dump
-- version 5.1.1deb4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 06 nov. 2021 à 12:08
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Stockage`
--

-- --------------------------------------------------------

--
-- Structure de la table `hard_drive`
--
use Stockage ;
CREATE TABLE `hard_drive` (
  `produitID` varchar(100) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `poids` float DEFAULT NULL,
  `dimensions` varchar(100) DEFAULT NULL,
  `couleur` varchar(100) DEFAULT NULL,
  `forme` varchar(100) DEFAULT NULL,
  `marque` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `quantite` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `hard_drive`
--

INSERT INTO `hard_drive` (`produitID`, `nom`, `prix`, `poids`, `dimensions`, `couleur`, `forme`, `marque`, `description`, `quantite`) VALUES
('C9A9699AE3', 'Western Digital - WD Blue SSD - Disque SSD interne 2.5. SATA 1To 3D NAND', 104.99, 0.37, '10.03 x 6.98 x 0.71 cm', 'Noir-Bleu', 'Carré ', 'Western Digital', 'Capacité élevée et fiabilité améliorée. . Le SSD SATA NAND 3D WD Blue tire parti de la technologie NAND 3D de Western Digital pour offrir des capacités plus élevées (jusqu’à 2 To1)', 30),
('BD8C8D7AEE', 'HP S700 Pro 2LU81AA#ABL Disque dur interne SATA III 3D NAND 2,5. 1 To', 115.83, 0.8, '‎6.9 x 9.9 x 0.8 centimètres', 'Blanc', 'Carré ', 'HP', ' Nouvelle technologie 3D NAND et algorithme avancé d\'équilibrage de l\'usure pour une plus grande durabilité à 0,6 lectures par jour. Mémoire cache DRAM jusqu\'à 1 Go', 8),
('8643052F99', 'Samsung T5 MU-PA1T0B/EU | Disque SSD externe portable 1 To', 124.32, 0.51, '10 x 74 x 57 millimètres', 'Noir', 'Carré ', 'Samsung', 'SSD EXTERNO T5 1TB MU-PA1T0B/EEU PORTABLE; Le SSD Portable T5 de Samsung offre des vitesses de transfert élevées et permet une gestion externe facile et agréable des données.', 15),
('3115251C62', 'Disque dur externe TOSHIBA CANVIO 1 TO', 49.99, 0.15, '11,9 cm (l) x 7 cm (L) x 0,2 cm(h)', 'Noir', 'Carré ', 'Toshiba', 'Transférez vos fichiers rapidement avec le port USB 3.0 grande vitesse et stockez jusqu’à 3 To de données sur les disques durs externes Canvio Basics. ', 10),
('5AD030372C', 'Crucial RAM CT8G4S24AM 8Go DDR4 2400 MHz CL17 Mémoire pour Mac', 5, 0, '‎6.9 x 0.5 x 2.8 centimètres', 'Vert', 'Rectangle', 'Crucial', 'Le module CT8G4S24AM est un module de mémoire SODIMM DDR4 SR de 8 Go fonctionnant à des vitesses allant jusqu’à 2400 MT/s et doté d’une latence CL17.', 15),
('23A340DF72', 'Crucial RAM CT16G4SFRA266 16Go DDR4 2666 MHz CL19 Mémoire d’ordinateur Portable', 65.99, 0.02, '6.9 x 0.5 x 2.8 centimètres', 'Vert', 'Rectangle', 'Crucial', 'Crucial - DDR4 - 16 Go - SO DIMM 260 broches - 2666 MHz / PC4-21300 - CL19 - 1.2 V - mémoire sans tampon - non ECC', 20),
('DE45E7C84D', 'Crucial RAM CT4G4DFS8266 4Go DDR4 2666 MHz CL19 Mémoire de bureau', 21.59, 0.02, '‎13.3 x 0.1 x 3.1 centimètres', 'Vert', 'Rectangle', 'Crucial', 'La RAM Crucial possède des caractéristiques remarquables un haut niveau de performances et une faible consommation d\'énergie. ', 45);

-- --------------------------------------------------------

--
-- Structure de la table `keyboard`
--

CREATE TABLE `keyboard` (
  `produitID` varchar(100) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `poids` float DEFAULT NULL,
  `dimensions` varchar(100) DEFAULT NULL,
  `couleur` varchar(100) DEFAULT NULL,
  `forme` varchar(100) DEFAULT NULL,
  `marque` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `quantite` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `keyboard`
--

INSERT INTO `keyboard` (`produitID`, `nom`, `prix`, `poids`, `dimensions`, `couleur`, `forme`, `marque`, `description`, `quantite`) VALUES
('306B3AACBE', 'Magic Keyboard avec Touch ID et pavé numérique pour les Mac ', 185, 0.369, ' Hauteur : de 0,41 à 1,09 cm  Largeur : 41,87 cm  Profondeur : 11,49 cm', 'Blanc', 'Rectangle', 'Apple', ' Le Magic Keyboard est désormais disponible avec Touch ID', 10),
('F8EAA52672', 'HP Slim Keyboard Mouse Wireless &-(Clavier sans Fil RF Bureau QWERTY Anglais sans Fil USB)', 82.26, 80, '0', 'Noir', 'Rectangle', 'HP', '‎HP ‎T6L04AA#ABB ‎Slim Wireless Keyboard & Mouse ‎Alimenté par pile', 10),
('567B9A3474', 'KLIM Chroma Clavier Gamer AZERTY FR  USB + Clavier Filaire Rétroéclairé LED pour PC Gaming', 28.97, 0.6, '‎44 x 14.4 x 2.9 centimètres', 'Noir-Multi-couleur', 'Rectangle', 'Klim', 'Rétroéclairage désactivable, Résiste aux éclaboussures d\'eau, Clavier à membrane, Rétroéclairage multicolore', 40),
('3F6300BCE7', 'Logitech K400 Plus Clavier sans Fil, Clavier Français AZERTY ', 29.99, 0.47, '‎35 x 14 x 2 centimètres', 'Noir', 'Rectangle', 'Logitech', 'Clavier TV Multimédia : Ce clavier avec pavé tactile intégré offre un contrôle fluide, ergonomique confortable des divertissements PC et TV sans avoir besoin d’une souris filaire ou sans fil', 10),
('777ED91188', 'Roccat Vulcan 120', 124.9, 0.98, '54.61 x 20.5 x 6.1 cm', 'Noir-Multi-couleur', 'Rectangle', 'ROCCAT', 'Clavier de jeu USB filaire équipé des interrupteurs mécaniques Roccat Titan (frappe similaire au Cherry MX Brown). ', 15),
('A57DEC3118', 'Tnb - TNB K-Smart - Clavier sans Fil avec Touch Pad pour Smart TV', 58.95, 0.3, 'Hauteur (cm) : 1.5 Largeur (cm) : 12.4 Longueur (cm) : 32.8', 'Noir', 'Rectangle', 'Tnb', 'Le clavier T\'n B K-SMART a été conçu pour profiter au maximum de vos divertissements TV et tout cela dans le plus grand confort de votre canapé.', 50),
('9B89F70E0A', 'Microsoft Ergonomic Keyboard - Clavier filaire USB pour PC & ordinateurs portables', 44.99, 1.4, '‎50.4 x 30.1 x 6.7 centimètres', 'Noir', 'Rectangle', 'Microsoft', 'Le Microsoft ergonomique Keyboard bénéficie du savoir-faire reconnu de Microsoft en matière d’accessoires ergonomiques pour offrir un clavier confortable.', 25),
('50CD418A7B', 'RAZER BlackWidow Elite', 210.65, 0, '0', 'Noir', 'Rectangle', 'RAZER', 'Le clavier de jeu le plus complet possédant des touches mécaniques Razer™ pour un temps de réponse rapide', 5);

-- --------------------------------------------------------

--
-- Structure de la table `mouse`
--

CREATE TABLE `mouse` (
  `produitID` varchar(100) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `poids` float DEFAULT NULL,
  `dimensions` varchar(100) DEFAULT NULL,
  `couleur` varchar(100) DEFAULT NULL,
  `forme` varchar(100) DEFAULT NULL,
  `marque` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `quantite` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `mouse`
--

INSERT INTO `mouse` (`produitID`, `nom`, `prix`, `poids`, `dimensions`, `couleur`, `forme`, `marque`, `description`, `quantite`) VALUES
('F586BED350', 'Magic Mouse', 85, 0.099, 'Hauteur : 2,16 cm  Largeur : 5,71 cm  Profondeur : 11,35 cm', 'Blanc', 'Rond', 'Apple', ' Magic Mouse  Câble USB‑C vers Lightning Bluetooth  Port Lightning  Technologie sans fil Multi-Touch', 35),
('3D8D9DE18B', 'Logitech M220 Souris sans Fil', 16.99, 0.75, '‎39 x 99 x 60 mm', 'Noir', 'Rond', 'Logitech', 'Boutons Silencieux, 2,4 GHz avec Nano-Récepteur, Suivi Optique 1000 PPP, Batterie Longue Durée 18 Mois, Ambidextre, Compatible avec PC/Mac/Portable - Grise Charbon', 90),
('37DF45DC36', 'DELUX Souris Verticale', 39.99, 0.12, '‎6.8 x 8.8 x 10 cm', 'Noir', 'Verticale', 'DELUX', 'Sans Fil Ergonomique avec BT 4.0 et 2.4G deux modes, Batterie Rechargeable intégrée, Design Silencieux, 6 Boutons et 4 Niveaux DPI, Souris Optique pour PC avec lumière RGB(mini)', 30),
('A84E6927F4', 'Razer DeathAdder V2 Pro', 113.09, 0.13, '8.8 x 49.2 x 21 cm', 'Noir / Vert', 'Rond', 'RAZER', 'Souris Gaming sans Fil au Confort Ergonomique, Commutateurs Optiques, Mise au Point Optique + Capteur 20K, Câble Speedflex, Mémoire Intégrée, Programmable RZ01-03350100-R3G1', 22);

-- --------------------------------------------------------

--
-- Structure de la table `pc_tower`
--

CREATE TABLE `pc_tower` (
  `produitID` varchar(100) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `poids` float DEFAULT NULL,
  `dimensions` varchar(100) DEFAULT NULL,
  `couleur` varchar(100) DEFAULT NULL,
  `forme` varchar(100) DEFAULT NULL,
  `marque` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `quantite` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `pc_tower`
--

INSERT INTO `pc_tower` (`produitID`, `nom`, `prix`, `poids`, `dimensions`, `couleur`, `forme`, `marque`, `description`, `quantite`) VALUES
('3DBC65C209', 'DELL OptiPlex 780 SFF PC de bureau', 145, 0, '‎35.3 x 11.4 x 39.9 centimètres', 'Noir/Gris', 'Carré ', 'DELL', 'Intel Core 2 Duo 3.0 GHz 4 Go 160 Go Windows Pro (32bit) (certifié reconditionné)', 12),
('C2CF65A41E', 'HP PC Tour Workstation Z230', 554.5, 10, 'Hauteur : 40.2 cm Largeur : 17.3 cm  Longueur : 44.8 cm', '‎Noir', 'Carré ', 'HP', 'Intel Core i7-4770 RAM 32Go SSD 120Go Windows 10 WiFi (Reconditionné)', 5),
('BCB5E69CA2', 'Fujitsu ESPRIMO P556/E85+', 556.48, 9, '0.17 x 0.42 x0.35', 'Noir', 'Carré ', 'Fujitsu', 'DDR4-SDRAM i5-6400 Micro Tower Intel® Core™ i5 de 6e génération 8 Go 128 Go SSD Windows 10 Pro PC Noir, Rouge', 5),
('B0B17F2EE1', 'HP EliteDesk 800 G2(reconditionné)', 260, 1.3, '0.18 x 0.18 x 0.04', 'Noir', 'Carré ', 'HP', 'Ordinateur de Bureau Mini USDT Intel Quad Core i5 256 Go SSD 8 Go Win 10 Pro MAR Ultra Slim Ordinateur de Bureau Mini PC', 8),
('63CDD9004D', 'ACER Aspire XC-340', 329.63, 5.5, '0.10 x 0.33 x 0.29 ', 'Noir', 'Carré ', 'Acer', 'AMD AthlonTM Silver 3050U - RAM 4 Go - Stockage 1 To HDD - Windows 10 Famille', 15);

-- --------------------------------------------------------

--
-- Structure de la table `screen`
--

CREATE TABLE `screen` (
  `produitID` varchar(100) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `poids` float DEFAULT NULL,
  `dimensions` varchar(100) DEFAULT NULL,
  `couleur` varchar(100) DEFAULT NULL,
  `forme` varchar(100) DEFAULT NULL,
  `marque` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `quantite` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `screen`
--

INSERT INTO `screen` (`produitID`, `nom`, `prix`, `poids`, `dimensions`, `couleur`, `forme`, `marque`, `description`, `quantite`) VALUES
('0B90F6A3BB', 'Huawei Display 24 Pouces, Ecran D\'ordinateur PC Ajustable, Moniteur Full HD', 139, 0, '17 x 53.8 x 42.5 centimètres', '‎Noir', 'Carré ', 'Huawei', 'L\'écran HUAWEI Display 23.8 dispose d\'une résolution Full HD', 15),
('AFFFB600FE', 'AOC Moniteur 24B1H 59,9 cm (23.6 pouces) (VGA, HDMI, dalle MVA,', 144.8, 2.6, '54 x 18.6 x 41.7 cm', 'Noir', 'Carré ', 'AOC', ' Équipé d’une dalle VA, le 24B1H offre un rapport de contraste statique de 3000:1 avec des pigments profonds et sombres comme de l’encre. La dalle élancée 23,6 pouces avec résolution 1080p', 30),
('B15B5B4DF3', 'ASUS ProArt PA247CV', 264.95, 6.3, '32.99 x 53.97 x 21.14 cm', 'Gris / Noir', 'Carré ', 'ASUS', 'ASUS ProArt PA247CV - Ecran PC 23,8\" FHD - Dalle IPS - 1920x1080 - 300cd/m² - 75Hz - 2x Display Port, HDMI, 4xUSB 3.0 & 1x USB-C - 100% sRGB - 100% Rec.709', 19),
('0DEE89E535', 'Ecran Philips 243V7QDSB, 60,5 cm', 166.31, 3.1, '20 x 53 x 32 cm', 'Noir', 'Carré ', 'Philips', 'Marque	‎Philips Monitors Numéro du modèle de l\'article	‎243V7QDSB/00 séries	‎Moniteur LCD Full HD 243V7QDSB/00', 25),
('3CD5900424', 'Acer ED270R P 68,6 cm (27\") 1920 x 1080 Pixels Full HD LED Noir', 229.99, 0, '62.5 x 19.6 x 46.6 cm', 'Noir', 'Carré ', 'Acer', 'Résolution de l\'écran:1920 x 1080 pixels Resolution:‎1080p Full HD Pixels Étirement 16:9 Interface du matériel informatique:DisplayPort, HDMI', 10),
('C2CF65A41E', 'MSI Optix G27C4 9S6-3CA91T-002', 260.99, 4.4, '100 x 100 x 100 cm', 'Noir', 'Carré ', 'MSI', 'Moniteur de Jeu 27\" LED FullHD 165Hz (1920 x 1080p, ratio 16:9, Panel VA Écran incurvé 1500R, réponse 1 ms, luminosité 250 nits', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE `matmas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `matnr` text COLLATE latin1_general_ci NOT NULL,
  `maktx` text COLLATE latin1_general_ci NOT NULL,
  `matkl` text COLLATE latin1_general_ci NOT NULL,
  `ktmng` text COLLATE latin1_general_ci NOT NULL,
  `peinh` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`ID`) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
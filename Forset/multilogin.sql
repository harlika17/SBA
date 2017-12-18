CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Administrator','Member','Dokter') NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`username`, `password`, `level`, `img`) VALUES
('imran', 'imran', 'Member', 'imran.png'),
('harlika', 'harlika', 'Administrator', 'harlika.png'),
('rico', 'rico', 'Dokter', 'rico.png'),
('haqi', 'haqi', 'Member', 'haqi.png');
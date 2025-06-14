USE nekro_dm;
DROP TABLE IF EXISTS players;
CREATE TABLE IF NOT EXISTS players(
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(24) NOT NULL,
  password VARCHAR(100) NOT NULL,
  skin INT DEFAULT 23,
  level INT DEFAULT 0,
  money INT DEFAULT 15000,
  gold INT DEFAULT 0,
  cash INT DEFAULT 0,
  diamond INT DEFAULT 0,
  kills INT DEFAULT 0,
  deaths INT DEFAULT 0,
  created_at TIMESTAMP DEFAULT NOW()
);

insert into players(username, password, level, skin, money, gold, cash, diamond, kills, deaths) values("Eriton_PlaNeT", "123456", 3473, 123, 10000000, 1244, 10000, 133, 3456, 2023);
insert into players(username, password, level, skin, money, gold, cash, diamond, kills, deaths) values("Joaozin", "123456", 124, 43, 134540, 12, 1, 0, 1233, 2023);
insert into players(username, password, level, skin, money, gold, cash, diamond, kills, deaths) values("Punhetinha", "123456", 221, 23, 1427200, 5134, 430, 56, 483, 432);
insert into players(username, password, level, skin, money, gold, cash, diamond, kills, deaths) values("SomosNosAJustica", "123456", 552, 245, 32839232, 2432, 55600, 1333,4343, 2023);

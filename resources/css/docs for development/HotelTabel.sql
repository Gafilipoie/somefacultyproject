CREATE TABLE User_Login
(
ID_User INT (4),
username VARCHAR(20),
password int NOT NULL,
type INT (1) NULL,
FirstName varchar(30) NULL,
LastName varchar(20) NULL,
Mobile INT (10) NULL,
Phone INT (10) NULL,
email VARCHAR(30) NULL,
CNP INT (13) NULL,
Address varchar(100) NULL,
Data DATE NULL,
Location VARCHAR (30) NULL,
City VARCHAR(20) NULL,
Postal_Code INT(5) NULL, 
NR_Vizite INT (3) NULL,
PRIMARY KEY (ID_User)
);



CREATE TABLE Camera
(
ID_Camere INT (3) NOT NULL,
NR_Camera INT (4),
TIP_Camera VARCHAR(20),
Vedere VARCHAR (5),
Aerconditionat INT(1),
Televizor INT(1),
Internet INT(1),
Balcon INT(1),
Ocupat INT(1),
Pret INT(7),
FOREIGN KEY (ID_Camere) REFERENCES Hotels(ID_Hotel)
);




CREATE TABLE Hotels
(
ID_Hotel INT (6),
Name VARCHAR (30),
Mobile INT (10),
Phone INT (10),
Locatie VARCHAR (30),
Address VARCHAR(100),
ID_Camere INT (3) NOT NULL,
PRIMARY KEY (ID_Hotel)
)



CREATE TABLE Facilitati
(
ID_Hotel INT (6) NOT NULL,
Piscina INT(1),
Parcare INT(1),
Lift INT(1),
Restaurant INT(1),
Plaja_Privata INT(1),
SPA INT(1),
Sala_Fitness INT(1),
Sala_Forta INT(1),
Jacuzzi INT(1),
Internet INT(1),
Pret INT(7),
FOREIGN KEY (ID_Hotel) REFERENCES Hotels(ID_Hotel)
);



CREATE TABLE Rezervari
(
COD INT (5) AUTO_INCREMENT ,
ID_User INT(4)NOT NULL,
ID_Hotel INT(6)NOT NULL,
Start_date DATE,
Edn_date DATE,
NR_Camera INT(4),
TIP_Camere VARCHAR(20),
Price INT(10),
PRIMARY KEY (COD),
INDEX (ID_User),
FOREIGN KEY (ID_User) REFERENCES User_Login(ID_User),
INDEX (ID_Hotel),
FOREIGN KEY (ID_Hotel) REFERENCES Hotels(ID_Hotel)
);


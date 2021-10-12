
CREATE TABLE UltimaRistrutturazione
(
codice char(3) PRIMARY KEY,
anno date,
tipologia varchar(50)
);

CREATE TABLE PersonaleAmministrativo
(
cf char(16) PRIMARY KEY,
nome varchar(20),
cognome varchar (20),
mansione varchar (70)
);

CREATE TABLE Scuola
(
telefono char(10) PRIMARY KEY,
indirizzo varchar(20),
nome varchar(20),
tipo varchar(20),
annoFond date,
dirigente char(16) REFERENCES PersonaleAmministrativo(CF) NOT NULL,
ultimaRistrutturazione char(3) REFERENCES UltimaRistrutturazione(codice)
);

CREATE TABLE Genitore
(
CF char(16) PRIMARY KEY,
nome varchar(20),
cognome varchar(20),
professione varchar(20),
username varchar(40) UNIQUE,
password varchar(20)
);

CREATE TABLE TitoloStudio
(
id char(5) PRIMARY KEY,
tipo varchar (70)
);


CREATE TABLE Materia
(
id char(5) PRIMARY KEY,
nome varchar(20)
);

CREATE TABLE Insegnante
(
CF char(16) PRIMARY KEY,
nome varchar(20),
cognome varchar(20),
ruolo boolean default FALSE
);

CREATE TABLE Classe
(
id char (3) PRIMARY KEY,
tipo varchar(20),
livello char(1),
sezione char(1),
nome varchar(20)
);


CREATE TABLE Telefono
(
numero char(10) PRIMARY KEY,
tipologia varchar(20)
);

CREATE TABLE Recapito
(
cfGenitore char (16) REFERENCES Genitore(CF),
nTelefono char(10) REFERENCES Telefono(numero),
PRIMARY KEY (cfGenitore, nTelefono)
);

CREATE TABLE PossessoTitolo
(
cfInsegnante char(16) REFERENCES Insegnante(CF),
idTitoloStudio char(5) REFERENCES TitoloStudio(id),
PRIMARY KEY (cfInsegnante, idTitoloStudio)
);

CREATE TABLE Lavoro
(
cfPersonaleAmm char (16) REFERENCES PersonaleAmministrativo(cf),
telScuola char(10) REFERENCES Scuola(telefono),
inizioPeriodo date,
finePeriodo date,
PRIMARY KEY (cfPersonaleAmm, telScuola, inizioPeriodo)
);

CREATE TABLE Abilitazione
(
cfInsegnante char(16) REFERENCES Insegnante(CF),
idMateria varchar (2) REFERENCES Materia(id),
PRIMARY KEY (cfInsegnante, idMateria)
);


CREATE TABLE ClasseAnnuale
(
idClasse char(3) PRIMARY KEY,
anno date,
telScuola char(10) REFERENCES Scuola(telefono),
classe char(5) REFERENCES Classe(id)
);
CREATE TABLE Alunno
(
CF char(16) PRIMARY KEY,
nome varchar(20),
cognome varchar (20),
dataNascita date,
zonaResidenza varchar(20),
indirizzo varchar(20),
preScuola boolean DEFAULT FALSE,
postScuola boolean DEFAULT FALSE,
classe char(3) REFERENCES ClasseAnnuale(idClasse)
);
CREATE TABLE Parentela
(
cfAlunno char(16),
cfGenitore char(16),
PRIMARY KEY (cfAlunno,cfGenitore),
FOREIGN KEY (cfAlunno) REFERENCES Alunno(CF),
FOREIGN KEY (cfGenitore) REFERENCES Genitore(CF)
);
CREATE DOMAIN votoinDec 
AS SMALLINT DEFAULT NULL 
CHECK ( VALUE >=1 
AND VALUE <= 10 );

CREATE TABLE Voto
(
data date,
voto votoinDec, 
cfAlunno char (16) REFERENCES Alunno(cf),
idMateria varchar (2) REFERENCES Materia(id),
PRIMARY KEY (data, voto, cfAlunno, idMateria)
);

CREATE TABLE Educazione
(
inizio date,
fine date,
cfInsegnante char (16) REFERENCES Insegnante(cf),
classeAnnuale char(3) REFERENCES ClasseAnnuale(idClasse),
PRIMARY KEY (inizio, cfInsegnante, classeAnnuale)
);

CREATE TABLE Insegnamento
(
dataInizio date,
dataFine date,
cfInsegnante char (16) REFERENCES Insegnante(cf),
idMateria varchar (2) REFERENCES Materia(id),
idClasse char(3) REFERENCES ClasseAnnuale(idClasse),
PRIMARY KEY(dataInizio, cfInsegnante, idClasse)
);
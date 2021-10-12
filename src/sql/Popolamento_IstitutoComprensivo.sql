INSERT INTO Telefono VALUES ('3317985072', 'cellulare');
INSERT INTO Telefono VALUES ('3932483190', 'cellulare');
INSERT INTO Telefono VALUES ('3292121893', 'cellulare');
INSERT INTO Telefono VALUES ('3881232325', 'cellulare');
INSERT INTO Telefono VALUES ('3506422414', 'cellulare');
INSERT INTO Telefono VALUES ('0293290414', 'casa');
INSERT INTO Telefono VALUES ('0243554032', 'casa');
INSERT INTO Telefono VALUES ('0258932131', 'casa');
INSERT INTO Telefono VALUES ('0283958204', 'ufficio');
INSERT INTO Telefono VALUES ('0209094225', 'ufficio');

INSERT INTO TitoloStudio VALUES ('1', 'Laurea Triennale');
INSERT INTO TitoloStudio VALUES ('2', 'Laurea Magistrale');
INSERT INTO TitoloStudio VALUES ('3', 'Laurea Specialistica');
INSERT INTO TitoloStudio VALUES ('4', 'Scienze Educazione');
INSERT INTO TitoloStudio VALUES ('5', 'Scienze Pedagogiche');




INSERT INTO Genitore VALUES ('RBNDNC60P16D969J', 'Domenico', 'Rubino', 'Dirigente', 'drubino', 'assoluto01');
INSERT INTO Genitore VALUES ('PNDLSN62C62H501I', 'Alessandra', 'Pandarese', 'Avvocato', 'alepanda', 'timbro');
INSERT INTO Genitore VALUES ('WSSRGB59D30A914N', 'Wassim', 'Ragab', 'Pilota', 'wagab', 'astro');
INSERT INTO Genitore VALUES ('BFNVFA65C57I644Z', 'Roccia', 'Hang', 'Commercialista', 'rong', 'vestito');
INSERT INTO Genitore VALUES ('ANNCLM64T15D165L', 'Anna', 'Cellamare', 'Muratore', 'marelli', 'martello');

INSERT INTO Insegnante VALUES ('PTBMFN76L11C652L', 'Lucia', 'Zampiglione', true);
INSERT INTO Insegnante VALUES ('NTMYCH87P61E584G', 'Roberto', 'Filippone', true);
INSERT INTO Insegnante(CF, nome, cognome) VALUES ('CNNBRT87D57F523S', 'Annabella', 'Fabri'); 
INSERT INTO Insegnante(CF, nome, cognome) VALUES ('LSNRVT97R535DGTR', 'Rita', 'Elia'); 
INSERT INTO Insegnante VALUES ('CVBHSZ41A56E848R', 'Bianca', 'Zing', true); 
INSERT INTO Insegnante(CF, nome, cognome) VALUES ('ZRFLSP55C51E914Y', 'Elia', 'Manzolini');

INSERT INTO Insegnante VALUES ('TGRGRISWISJVIETG', 'Anna', 'Nicoli', false); 
INSERT INTO Insegnante VALUES ('FRGNRFOSGRIGNRIW', 'Francesco', 'Toldo', false); 
INSERT INTO Insegnante VALUES ('BGGRBTSENIFGROEW', 'Roberto', 'Baggio', false);










INSERT INTO Recapito VALUES ('RBNDNC60P16D969J', '3317985072');
INSERT INTO Recapito VALUES ('PNDLSN62C62H501I', '3932483190');
INSERT INTO Recapito VALUES ('WSSRGB59D30A914N', '3292121893');
INSERT INTO Recapito VALUES ('BFNVFA65C57I644Z', '3881232325');
INSERT INTO Recapito VALUES ('ANNCLM64T15D165L', '3506422414');
INSERT INTO Recapito VALUES ('RBNDNC60P16D969J', '0293290414');
INSERT INTO Recapito VALUES ('PNDLSN62C62H501I', '0243554032');
INSERT INTO Recapito VALUES ('WSSRGB59D30A914N', '0258932131');
INSERT INTO Recapito VALUES ('PNDLSN62C62H501I', '0283958204');

INSERT INTO Materia VALUES ('1', 'Italiano');
INSERT INTO Materia VALUES ('2', 'Inglese');
INSERT INTO Materia VALUES ('3', 'Storia');
INSERT INTO Materia VALUES ('4', 'Geografia');
INSERT INTO Materia VALUES ('5', 'Matematica');
INSERT INTO Materia VALUES ('6', 'Scienze');
INSERT INTO Materia VALUES ('7', 'Musica');
INSERT INTO Materia VALUES ('8', 'Arte e immagine');
INSERT INTO Materia VALUES ('9', 'Educazione fisica');
INSERT INTO Materia VALUES ('10', 'Tecnologia');

INSERT INTO PossessoTitolo VALUES ('PTBMFN76L11C652L', '4');
INSERT INTO PossessoTitolo VALUES ('NTMYCH87P61E584G', '5');
INSERT INTO PossessoTitolo VALUES ('CNNBRT87D57F523S', '1');
INSERT INTO PossessoTitolo VALUES ('CVBHSZ41A56E848R', '3');
INSERT INTO PossessoTitolo VALUES ('ZRFLSP55C51E914Y', '2');
INSERT INTO PossessoTitolo VALUES ('NTMYCH87P61E584G', '4');
INSERT INTO PossessoTitolo VALUES ('PTBMFN76L11C652L', '5');


INSERT INTO Abilitazione VALUES ('PTBMFN76L11C652L', '1');
INSERT INTO Abilitazione VALUES ('PTBMFN76L11C652L', '3');
INSERT INTO Abilitazione VALUES ('PTBMFN76L11C652L', '4');
INSERT INTO Abilitazione VALUES ('NTMYCH87P61E584G', '2');
INSERT INTO Abilitazione VALUES ('NTMYCH87P61E584G', '7');
INSERT INTO Abilitazione VALUES ('NTMYCH87P61E584G', '8');
INSERT INTO Abilitazione VALUES ('CVBHSZ41A56E848R', '5');
INSERT INTO Abilitazione VALUES ('CVBHSZ41A56E848R', '10');
INSERT INTO Abilitazione VALUES ('ZRFLSP55C51E914Y', '9');
INSERT INTO Abilitazione VALUES ('CVBHSZ41A56E848R', '6');


INSERT INTO PersonaleAmministrativo VALUES ('GRNLCU98S23M102Z','Luca','Grana','Addetto Pulizie');
INSERT INTO PersonaleAmministrativo VALUES ('MMBDVD80A01F205L','Davide','Mombelli','Dirigente');
INSERT INTO PersonaleAmministrativo VALUES ('GRLSNO85A41F205F','Sonia','Geroli','Addetto Pulizie');
INSERT INTO PersonaleAmministrativo VALUES ('BRSNNA75D01F205H','Anna','Baresi','Dirigente');
INSERT INTO PersonaleAmministrativo VALUES ('GZZFRC96S62B157V','Federica','Agazzi','Assistente Amministrativo');
INSERT INTO PersonaleAmministrativo VALUES ('CMPGRG83M10F839V','Giorgio','Compagni','Assistente Amministrativo');
INSERT INTO PersonaleAmministrativo VALUES ('STLNCL71C05L736Q','Nicola','Stella','Dirigente');
INSERT INTO PersonaleAmministrativo VALUES ('RTSERG86S62B157V','Antonietta','Gilda','Assistente Amministrativo');
INSERT INTO PersonaleAmministrativo VALUES ('RHBDGF67FV2B57TG','Marco','Turro','Assistente Amministrativo');

INSERT INTO PersonaleAmministrativo VALUES ('THVFFGN34FDNGGRH','Roberto','Gioia','Assistente Amministrativo');
INSERT INTO PersonaleAmministrativo VALUES ('VRGMDKMRKGMFKMGK','Andrea','Verdi','Assistente Amministrativo');
INSERT INTO PersonaleAmministrativo VALUES ('FRKR453FDEKOGORG','Nicholas','Rossi','Assistente Amministrativo');

INSERT INTO PersonaleAmministrativo VALUES ('FABCFGJIRGJFIVOF','Fabio','Luci','Assistente Amministrativo');
INSERT INTO PersonaleAmministrativo VALUES ('VGDGRBCFGRGFBFDG','Arianna','Muri','Assistente Amministrativo');
INSERT INTO PersonaleAmministrativo VALUES ('VFGGVNJFFGFKMVFG','Sonia','Prodotti','Assistente Amministrativo');
INSERT INTO PersonaleAmministrativo VALUES ('BNTBDFBDBFHTEFVG','Sergio','Neri','Assistente Amministrativo');
INSERT INTO PersonaleAmministrativo VALUES ('RGSVDFGGRGFSDGRG','Michele','Rose','Assistente Amministrativo');
INSERT INTO PersonaleAmministrativo VALUES ('GJRFIGJIRGJVFHIR','Anna','Gigli','Assistente Amministrativo');





INSERT INTO UltimaRistrutturazione VALUES ('001','2018-06-12', 'Manutenzione Ordinaria');
INSERT INTO UltimaRistrutturazione VALUES ('002','2016-07-09', 'Ristrutturazione Urbanistica');


INSERT INTO Scuola(telefono, nome, indirizzo, tipo, dirigente) VALUES('0234541239','De Filippo Tovini','Via dei Pini 8', 'Primaria','MMBDVD80A01F205L');
INSERT INTO Scuola(telefono, nome, indirizzo, tipo, dirigente) VALUES('0298765422','Giacomo Leopardi','Via degli Orsi 23', 'Primaria','MMBDVD80A01F205L');
INSERT INTO Scuola(telefono, nome, indirizzo, tipo, dirigente) VALUES('0234543532','Isaac Newton','Viale Trento 10', 'Secondaria 1 Grado','BRSNNA75D01F205H');
INSERT INTO Scuola(telefono, nome, indirizzo, tipo, annoFond, dirigente) VALUES('0209541238','Giovanni Pascoli','Piazza dei Vincenti', 'Secondaria 1 Grado', '1990-09-15','BRSNNA75D01F205H');
INSERT INTO Scuola(telefono, nome, indirizzo, tipo, ultimaRistrutturazione, dirigente) VALUES('0234541234','Gli Aquiloni','Via dei Pini 8', 'Infanzia', '001','STLNCL71C05L736Q');
INSERT INTO Scuola(telefono, nome, indirizzo, tipo, ultimaRistrutturazione, dirigente) VALUES('0245511987','I Pesciolini','Via degli Orsi 23', 'Infanzia', '002','STLNCL71C05L736Q');


INSERT INTO Lavoro VALUES('GRNLCU98S23M102Z','0234541239', '2016-09-15');
INSERT INTO Lavoro VALUES('GRLSNO85A41F205F','0298765422', '2016-09-15');
INSERT INTO Lavoro VALUES('GZZFRC96S62B157V','0234543532', '2016-09-15');
INSERT INTO Lavoro VALUES('CMPGRG83M10F839V','0234541234', '2016-09-15');
INSERT INTO Lavoro VALUES('RTSERG86S62B157V','0298765422', '2017-09-15');
INSERT INTO Lavoro VALUES('RHBDGF67FV2B57TG','0234543532', '2017-09-15');
INSERT INTO Lavoro VALUES('THVFFGN34FDNGGRH','0209541238', '2017-09-15');
INSERT INTO Lavoro VALUES('VRGMDKMRKGMFKMGK','0234541234', '2017-09-15');
INSERT INTO Lavoro VALUES('FRKR453FDEKOGORG','0245511987', '2017-09-15');
INSERT INTO Lavoro VALUES('FABCFGJIRGJFIVOF','0298765422', '2016-09-15');
INSERT INTO Lavoro VALUES('VGDGRBCFGRGFBFDG','0234541234', '2016-09-15');
INSERT INTO Lavoro VALUES('VFGGVNJFFGFKMVFG','0298765422', '2017-09-15');
INSERT INTO Lavoro VALUES('BNTBDFBDBFHTEFVG','0209541238', '2018-09-15');
INSERT INTO Lavoro VALUES('RGSVDFGGRGFSDGRG','0234541234', '2017-09-15');
INSERT INTO Lavoro VALUES('GJRFIGJIRGJVFHIR','0245511987', '2017-09-15');






INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P1A', 'primaria', '1', 'A');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P2A', 'primaria', '2', 'A');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P3A', 'primaria', '3', 'A');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P4A', 'primaria', '4', 'A');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P5A', 'primaria', '5', 'A');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P1B', 'primaria', '1', 'B');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P2B', 'primaria', '2', 'B');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P3B', 'primaria', '3', 'B');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P4B', 'primaria', '4', 'B');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P5B', 'primaria', '5', 'B');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P1C', 'primaria', '1', 'C');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P2C', 'primaria', '2', 'C');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P3C', 'primaria', '3', 'C');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P4C', 'primaria', '4', 'C');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P5C', 'primaria', '5', 'C');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P1D', 'primaria', '1', 'D');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P2D', 'primaria', '2', 'D');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P3D', 'primaria', '3', 'D');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P4D', 'primaria', '4', 'D');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('P5D', 'primaria', '5', 'D');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('S1H', 'secondaria', '1', 'H');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('S2H', 'secondaria', '2', 'H');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('S3H', 'secondaria', '3', 'H');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('S1L', 'secondaria', '1', 'L');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('S2L', 'secondaria', '2', 'L');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('S3L', 'secondaria', '3', 'L');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('S1M', 'secondaria', '1', 'M');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('S2M', 'secondaria', '2', 'M');
INSERT INTO Classe(id, tipo, livello, sezione) VALUES('S3M', 'secondaria', '3', 'M');
INSERT INTO Classe(id, tipo, nome) VALUES('IAZ', 'infanzia','azzurri');
INSERT INTO Classe(id, tipo, nome) VALUES('IRO', 'infanzia','rossi');
INSERT INTO Classe(id, tipo, nome) VALUES('IAR', 'infanzia','arancioni');
INSERT INTO Classe(id, tipo, nome) VALUES('IVE', 'infanzia','verdi');
INSERT INTO Classe(id, tipo, nome) VALUES('IBL', 'infanzia','blu');
INSERT INTO Classe(id, tipo, nome) VALUES('IGI', 'infanzia','gialli');

INSERT INTO ClasseAnnuale VALUES ('99A', '2018-09-01', '0234541239', 'P1A');
INSERT INTO ClasseAnnuale VALUES ('92B', '2018-09-01', '0298765422', 'P2B');
INSERT INTO ClasseAnnuale VALUES ('91B', '2018-09-01', '0298765422', 'P1B');
INSERT INTO ClasseAnnuale VALUES ('95B', '2018-09-01', '0298765422', 'P5B');
INSERT INTO ClasseAnnuale VALUES ('94E', '2018-09-01', '0234541234', 'IVE');
INSERT INTO ClasseAnnuale VALUES ('94I', '2018-09-01', '0234541234', 'IGI');
INSERT INTO ClasseAnnuale VALUES ('97R' ,'2017-09-01', '0245511987', 'IAR'); 

INSERT INTO Alunno VALUES ('RBNGLC97L43S432A', 'Gianluca', 'Rubino', '2013-07-29', 'Ticinese', 'P.ta Lodovica 3', false, false, '99A');
INSERT INTO Alunno VALUES ('HUXLLN96P68L219B', 'Liliana', 'Hu', '2012-09-28', 'P.za Cinque Giornate', 'P.za Tricolore', false, false, '92B');
INSERT INTO Alunno VALUES ('RBNGCM98L43S432A', 'Giacomo', 'Rubino', '2014-07-29', 'Ticinese', 'P.ta Lodovica 3', false, false, '99A');
INSERT INTO Alunno VALUES ('NZSHVJ97D69Z520E', 'Nahla', 'Ragab', '2017-01-12', 'Moscova', 'Ba.ni porta nuova 12', false, true, '94E');
INSERT INTO Alunno VALUES ('KLJLGNN98DGRNSKE', 'Maria', 'Chioppa', '2012-09-21', 'Pezzotti', 'via Magliocco 3', true, false, '91B');
INSERT INTO Alunno VALUES ('CLLGNN99P21D969P', 'Giovanni', 'Cellamare', '2015-09-21', 'Pezzotti', 'via Magliocco 3', true, false, '94I');


INSERT INTO Voto VALUES ('2018-03-15', '8', 'RBNGLC97L43S432A','3');
INSERT INTO Voto VALUES ('2019-03-21', '7', 'RBNGLC97L43S432A','10');
INSERT INTO Voto VALUES ('2018-10-25', '6', 'RBNGLC97L43S432A','7');
INSERT INTO Voto VALUES ('2019-05-13', '3', 'RBNGLC97L43S432A','5');
INSERT INTO Voto VALUES ('2019-02-08', '7', 'RBNGCM98L43S432A','1');
INSERT INTO Voto VALUES ('2018-11-22', '10', 'RBNGCM98L43S432A','9');
INSERT INTO Voto VALUES ('2019-04-30', '8', 'RBNGCM98L43S432A','8');
INSERT INTO Voto VALUES ('2019-02-13', '9', 'RBNGCM98L43S432A','2');
INSERT INTO Voto VALUES ('2018-12-13', '8', 'HUXLLN96P68L219B','4');
INSERT INTO Voto VALUES ('2019-02-13', '7', 'HUXLLN96P68L219B','7');
INSERT INTO Voto VALUES ('2019-03-05', '7', 'HUXLLN96P68L219B','10');
INSERT INTO Voto VALUES ('2019-04-10', '10', 'HUXLLN96P68L219B','1');


INSERT INTO Educazione VALUES ('2018-09-19','2019-05-22', 'CNNBRT87D57F523S','94I');
INSERT INTO Educazione VALUES ('2018-09-19','2019-05-22', 'LSNRVT97R535DGTR','94I');




INSERT INTO Insegnamento(dataInizio, cfInsegnante, idMateria, idClasse) VALUES ('2018-09-06', 'PTBMFN76L11C652L', '4', '99A');
INSERT INTO Insegnamento VALUES ('2018-10-21', '2019-12-2', 'ZRFLSP55C51E914Y', '9', '92B');
INSERT INTO Insegnamento (dataInizio, cfInsegnante, idMateria, idClasse)VALUES ('2018-09-01', 'NTMYCH87P61E584G', '2', '92B');

INSERT INTO Insegnamento VALUES ('2018-11-22', '2019-06-02', 'TGRGRISWISJVIETG', '9', '95B');

INSERT INTO Insegnamento VALUES ('2018-09-30', '2018-02-04', 'FRGNRFOSGRIGNRIW', '7', '99A');
INSERT INTO Insegnamento VALUES ('2019-03-22', '2019-05-02', 'FRGNRFOSGRIGNRIW', '7', '99A');

INSERT INTO Insegnamento VALUES ('2018-10-01', '2018-10-15', 'FRGNRFOSGRIGNRIW', '3', '92B');
INSERT INTO Insegnamento VALUES ('2018-11-10', '2018-12-02', 'FRGNRFOSGRIGNRIW', '3', '92B');
INSERT INTO Insegnamento VALUES ('2019-04-12', '2019-05-25', 'FRGNRFOSGRIGNRIW', '3', '92B');




INSERT INTO Parentela VALUES ('RBNGLC97L43S432A', 'RBNDNC60P16D969J');
INSERT INTO Parentela VALUES ('HUXLLN96P68L219B', 'BFNVFA65C57I644Z');
INSERT INTO Parentela VALUES ('RBNGCM98L43S432A', 'RBNDNC60P16D969J');
INSERT INTO Parentela VALUES ('NZSHVJ97D69Z520E', 'WSSRGB59D30A914N');
INSERT INTO Parentela VALUES ('CLLGNN99P21D969P', 'ANNCLM64T15D165L');
INSERT INTO Parentela VALUES ('RBNGLC97L43S432A', 'PNDLSN62C62H501I');
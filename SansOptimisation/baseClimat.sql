Create table Administrateur(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    login VARCHAR(100),
    mdp VARCHAR(100)
);
Create table Contenus(
    id SERIAL PRIMARY KEY,
    titre VARCHAR(150),
    photo VARCHAR(250),
    resumee VARCHAR(200),
    contexte VARCHAR(900),
    datepublication TIMESTAMP,
    source VARCHAR(150)
);
insert into Administrateur (nom,prenom,login,mdp) values ('Rojas','Tsihoarana','tsiho@gmail.com','1234');

insert into Contenus (titre,photo,resumee,contexte,datePublication,source) 
   values ('La sécheresse printanière hante les agriculteurs du Maine-et-Loire : « C’est la première année que j’arrose mes blés »','photo1.jpg','Depuis début janvier, moins de 135 mm de précipitations ont été enregistrés dans le département, contre 250 mm en moyenne saisonnière. Les agriculteurs doivent irriguer très tôt dans la saison.','A une vingtaine de kilomètres au sud d’Angers (Maine-et-Loire), le long de la départementale qui s’enfonce dans les terres d’Anjou, les brins d’herbe des bords de route sont courts. Non pas qu’ils aient été tondus récemment, mais c’est bien le soleil de printemps qui en a déjà brûlé une grande partie. Les blés de Denis Asseray, exploitant angevin de 57 ans, ont autant de mal à prospérer.
Tout au bout d’un chemin de sable et de graviers, le domaine de La Bruyère, implanté sur la commune de Gennes-Val-de-Loire, s’étend sur 220 hectares de vignes et de céréales – du blé et du maïs à parts égales. A l’ombre de l’étable abritant une cinquantaine de vaches laitières, une imposante bobine bleue, au bout de laquelle un canon jette de l’eau en pluie fine, termine son tour d’arrosage.','14/05/2022 08:38:45','Par Sandra Favier(Gennes-Val-de-Loire (Maine-et-Loire), envoyée spéciale)');
insert into Contenus (titre,photo,resumee,contexte,datePublication,source) 
	values ('Environnement : «Chacun doit être efficace sur sa zone d’influence»','photo2.jpg','Alors que la sécheresse frappe une nouvelle fois la France, quelles peuvent être les solutions concrètes pour s’engager contre le réchauffement climatique ?','Sécheresse, ressources raréfiées, dérégulation du climat... Face à l’urgence environnementale, "chacun doit être efficace sur sa zone d’influence", a appelé le médecin et explorateur Jean-Louis Etienne sur Europe 1. "Je dis à ceux qui ont une maison, mettez sur le toit des panneaux solaires, devenez des acteurs de la solution."','15/05/2022 07:38:45','Jean-Louis Etienne');

create table Daty(
	id SERIAL PRIMARY KEY,
	daty TIMESTAMP
);
insert into Daty(daty) values ('12/12/2022 08:35:45');

1=>"Risques d’orages violents en Normandie et dans la Sarthe" Titre
   "Des orages avec fortes pluies, grêle et rafales de vent sont attendus dans l`après-midi. La quasi-totalité du territoire français est en alerte jaune" resumee
   "Après la vague de chaleur des derniers prédécents, Météo France a placé, dimanche 15 mai, six départements en vigilance orange, de la Normandie au Val-de-Loire, en raison d’orages attendus à partir du milieu de l’après-midi. Une grande partie du reste de l (...)"
   "MÉTÉO FRANCE"
2=>
epuis 1990, le Giec tente de se faire entendre. Cinq rapports, tous composés de plusieurs groupes de travail ont été publiés depuis. Les experts de l'ONU ont bouclé le sixième, dévoilant séparément, en août, en février puis ce lundi 4 avril, les trois volets qui composent ce document.  

Un nouveau cri d'alarme pour tenter de sauver la planète et limiter le réchauffement climatique qui risque d'engendrer des conséquences dramatiques, voire des conditions de vie intenables pour les humains. Concrètement, l'humanité dispose de "moins de trois ans" pour inverser la courbe des émissions de gaz à effet de serre, responsables du changement climatique, si elle veut conserver un monde vivable alertent-ils, une nouvelle fois.

Responsabilité humaine, catastrophes et solutions : que disent les trois rapports du Giec ? =Titre
Le troisième volet du sixième rapport du Giec a été dévoilé lundi 4 avril, offrant des solutions pour empêcher la catastrophe climatique qui s'annonce si rien n'est fait.resumee

CREATE DATABASE `BE17_CR4_Magdalena_BigLibrary`;

DROP TABLE IF EXISTS `BE17_CR4_Magdalena_BigLibrary`.`products`;

CREATE  TABLE `BE17_CR4_Magdalena_BigLibrary`.`products` (

`id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,

`title` VARCHAR(255) NOT NULL ,

`image` VARCHAR(100000) ,
    
`isbn` VARCHAR(255) UNIQUE ,
 
`description` VARCHAR(255) ,
  
`type` VARCHAR(255) ,
    
`author_first_name` VARCHAR(255) ,
      
`author_last_name` VARCHAR(255) ,
    
`publisher_name` VARCHAR(255) ,

`publisher_address` VARCHAR(255) ,
    
`publish_date` DATE,

 `status` VARCHAR(255) DEFAULT "available"
    
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;







INSERT INTO BE17_CR4_Magdalena_BigLibrary.products(title, image, isbn, description, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date, status) 
VALUES 
('It starts with us – Nur noch einmal und für immer', 
'https://images.thalia.media/00/-/7c8ac9a26be5426aba0808ce1ca1f04a/it-starts-with-us-nur-noch-einmal-und-fuer-immer-gebundene-ausgabe-colleen-hoover.jpeg',

'45645564456454',

'Jedes Ende verspricht auch einen neuen Anfang … 
 Bevor Lily Ryle traf, gab es in ihrem Leben eine erste Liebe: Atlas. Jetzt erzählt Bestsellerautorin Colleen Hoover seine Seite der Geschichte – und wie es weitergeht...',

'Book',

'Colleen',

'Hoover',

'dtv',

'Tumblingerstr. 21, 80337 München',

'2022-01-05',

'available'
);

INSERT INTO BE17_CR4_Magdalena_BigLibrary.products(title, image, isbn, description, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date, status) 
VALUES 
('It Ends with Us', 
'https://images.thalia.media/00/-/4cdc0c996d0a444bb287416a0c24f5db/it-ends-with-us-taschenbuch-colleen-hoover-englisch.jpeg',

'4565457987',

'Instant New York Times Bestseller Combining a captivating romance with a cast of all-too-human characters, Colleen Hoover’s It Ends With Us is an unforgettable tale of love that comes at the ultimate price. Lily hasn’t...',

'Book',

'Colleen',

'Hoover',

'dtv Verlagsgesellschaft mbH & Co. KG',

'Tumblingerstr. 21, 80337 München',

'2022-11-01',

'available'
);

INSERT INTO BE17_CR4_Magdalena_BigLibrary.products(title, image, isbn, description, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date, status) 
VALUES 
('Friends, Lovers and the Big Terrible Thing', 
'https://images.thalia.media/00/-/ac944d26d0264753a00e642d462cc741/friends-lovers-and-the-big-terrible-thing-gebundene-ausgabe-matthew-perry-englisch.jpeg',

'777898841',

'The BELOVED STAR OF FRIENDS takes us behind the scenes of the hit sitcom and his struggles with addiction in this "CANDID, DARKLY FUNNY...POIGNANT" memoir (The New York Times)

A MOST ANTICIPATED BOOK by Time, Associated Press',

'Book',

'Matthew',

'Perry',

'FLATIRON BOOKS',

'120 Broadway, New York, NY',

'2022-11-01',

'reserved'
);

INSERT INTO BE17_CR4_Magdalena_BigLibrary.products(title, image, isbn, description, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date, status) 
VALUES 
('King of Wrath', 
'https://images.thalia.media/00/-/c79124fa2c7440e0a4105fb1da741426/king-of-wrath-taschenbuch-ana-huang-englisch.jpeg',

'12555448844',

'A brand new steamy billionaire romance from the bestselling author of the Twisted series.
She is the wife he never wanted . . . and the weakness he never saw coming.',

'Book',

'Ana',

'Huang',

'Little, Brown Book Group',

'Carmelite House
50 Victoria Embankment
LONDON
EC4Y 0DZ
United Kingdom',

'2022-11-29',

'available'
);

INSERT INTO BE17_CR4_Magdalena_BigLibrary.products(title, image, isbn, description, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date, status) 
VALUES 
('Christmas (New Edition 2012 inkl. 3 Bonus Tracks)', 
'https://images.thalia.media/00/-/b11a8f1e952c43779f40afcf848a8a08/christmas-new-edition-2012-inkl-3-bonus-tracks-cd-michael-buble.jpeg',

'7878946564154',

'So bringen Sie Weihnachtsstimmung nach Hause. Michael Bublé ist mit seiner neuen Version "Christmas" zurück. Im vergangenen Jahr brach er alle Rekorde. Und auch dieses Jahr liefert der kanadische Megastar mit der Deluxe Special Edition...',

'CD',

'Michael',

'Bublé',

'Warner Music',

'Alter Wandrahm 14
20457 Hamburg
Deutschland',

'2012-09-21',

'reserved'
);

INSERT INTO BE17_CR4_Magdalena_BigLibrary.products(title, image, isbn, description, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date, status) 
VALUES 
('Ultraviolence', 
'https://images.thalia.media/00/-/d5df9db210a94267b09e2fdf434ebef6/ultraviolence-cd-lana-del-rey.jpeg',

'844651655489',

"You got the music in you, don't you ? Lana Del Rey hat immer noch diese gewisse Traurigkeit, aber ihre neue Single WEST COAST aus dem demnächst erscheinenden Album ULTRAVIOLENCE ist keine weitere düstere Operetta, eher eine schlichte und hypnotische...",

'CD',

'Lana',

'Del Rey',

'Universal Music Vertrieb',

'Stralauer Allee 1
10245 Berlin
Deutschland',

'2014-06-13',

'available'
);

INSERT INTO BE17_CR4_Magdalena_BigLibrary.products(title, image, isbn, description, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date, status) 
VALUES 
('Max Raabe: Wer hat hier schlechte Laune', 
'https://images.thalia.media/00/-/e88637b7068d4cefaeeef81b00216522/max-raabe-wer-hat-hier-schlechte-laune-cd-max-raabe.jpeg',

'4564654654',

'Jedes Ende verspricht auch einen neuen Anfang … 
 Bevor Lily Ryle traf, gab es in ihrem Leben eine erste Liebe: Atlas. Jetzt erzählt Bestsellerautorin Colleen Hoover seine Seite der Geschichte – und wie es weitergeht...',

'CD',

'Max',

'Raabe',

'Universal Music Vertrieb',

'Stralauer Allee 1
10245 Berlin
Deutschland',

'2022-10-14',

'available'
);

INSERT INTO BE17_CR4_Magdalena_BigLibrary.products(title, image, isbn, description, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date, status) 
VALUES 
('Top Gun: Maverick', 
'https://images.thalia.media/00/-/7d9d3a7eb8cf49709dd9ddfbf5d8810d/top-gun-maverick-blu-ray-tom-cruise.jpeg',

'7788844222',

'Seit mehr als 30 Jahren ist Pete Maverick Mitchell (Tom Cruise) als Top-Pilot für die Navy im Einsatz. 
Als furchtloser Testflieger lotet er die Grenzen des Möglichen aus und drückt sich vor der Beförderung, die ihn auf den Boden verbannen würde. Als.',

'DVD',

'Joseph',

'Kosinski',

'Paramount Pictures (Universal Pictures)',

'5555 Melrose Avenue, Hollywood, California',

'2022-11-03',

'available'
);

INSERT INTO BE17_CR4_Magdalena_BigLibrary.products(title, image, isbn, description, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date, status) 
VALUES 
('Chicago P.D. - Season 3 [6 DVDs]', 
'https://images.thalia.media/00/-/976caa26320f4fc695335cd524d65a15/chicago-p-d-season-3-6-dvds-dvd-jon-seda.jpeg',

'5556263151',

'Für das Team des Chicago P.D. geht der Kampf gegen das Verbrechen in eine neue Runde. 
In dem von Kritikern gefeierten Cop-Drama von Emmy®-Gewinner Dick Wolf muss sich die Intelligence Unit von Hank Voight (Jason Beghe) abermals lebensbedrohlichen Herausforderungen...',

'DVD',

'Mark',

'Tinker',

'Universal Pictures Germany GmbH',

'Herriotstraße 6-8, 60528 Frankfurt am Main, Deutschland',

'2017-08-14',

'available'
);

INSERT INTO BE17_CR4_Magdalena_BigLibrary.products(title, image, isbn, description, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date, status) 
VALUES 
('Paw Patrol - Pups Save Christmas', 
'https://images.thalia.media/00/-/baae099df5b948d9b09aab996adea17e/paw-patrol-die-paw-patrol-rettet-weihnachten-dvd.jpeg',

'7897984651',

'Begleitet die "Paw Patrol" auf sechs spannenden Schnee-Abenteuern inklusive einer Weihnachtsfolge in Doppellänge. 
Die Fellfreunde geben alles, um den Schlitten vom Weihnachtsmann zu reparieren und so Weihnachten zu retten. Außerdem bringen sie Pinguine...',

'DVD',

'Harry',

'Moore',

'Paramount Home Entertainment',

'Betastraße 10c
85774 Unterföhring',

'2017-05-10',

'reserved'
);



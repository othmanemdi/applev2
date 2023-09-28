CREATE TABLE
    users (
        id int NOT NULL AUTO_INCREMENT,
        name varchar(255),
        email varchar(255),
        password varchar(255) DEFAULT '123456',
        PRIMARY KEY (id),
        UNIQUE (email)
    );

INSERT INTO
    users (id, name, email, password)
VALUES (
        null,
        'lamie',
        'lamiae@gmail.com',
        null
    );

INSERT INTO
    users (id, name, email, password)
VALUES (
        null,
        'yasser',
        'yasser@gmail.com',
        '123456'
    ), (
        null,
        'hamza',
        'hamza@gmail.com',
        '123456'
    );

INSERT INTO
    users (id, name, email, password)
VALUES (
        null,
        'imane',
        'imane@gmail.com',
        '123456'
    ), (
        null,
        'noura',
        'noura@gmail.com',
        '123456'
    ), (
        null,
        'mohammed miloudi',
        'mohammed miloudi@gmail.com',
        '123456'
    ), (
        null,
        'aya',
        'aya@gmail.com',
        '123456'
    ), (
        null,
        'hind',
        'hind@gmail.com',
        '123456'
    ), (
        null,
        'abdelbari',
        'abdelbari@gmail.com',
        '123456'
    ), (
        null,
        'chaimae',
        'chaimae@gmail.com',
        '123456'
    ), (
        null,
        'chaimae jouskar',
        'chaimae jouskar@gmail.com',
        '123456'
    ), (
        null,
        'mohammed mhaned',
        'mohammed mhaned@gmail.com',
        '123456'
    );

Base de données Applev2 

produits id auto increment not null - reference (varchar) par defaut null - designation (varchar) par defaut null - prix decimal 10,
2 par defaut 0 - ancient_prix decimal 10,
2 par defaut 0 - quantite int par defaut 0 - image varchar par defaut null - couleur varchar par defaut null - categorie varchar par defaut null -

CREATE TABLE
    produits (
        id int NOT NULL AUTO_INCREMENT,
        reference varchar(255) DEFAULT NULL,
        designation varchar(255) DEFAULT NULL,
        prix decimal(10, 2) DEFAULT 0,
        ancien_prix decimal(10, 2) DEFAULT 0,
        quantite int DEFAULT 0,
        image varchar(255) DEFAULT NULL,
        couleur varchar(255) DEFAULT NULL,
        categorie varchar(255) DEFAULT NULL,
        PRIMARY KEY (id)
    );

--Aya

CREATE TABLE
    produits (
        id int NULL AUTO_INCREMENT,
        reference varchar(255) DEFAULT NULL,
        designation varchar(255) DEFAULT NULL,
        prix DECIMAL (10, 2) DEFAULT 0,
        ancient_prix DECIMAL (10, 2) DEFAULT 0,
        quantite int DEFAULT 0,
        image varchar(255) DEFAULT null,
        couleur varchar(255) DEFAULT null,
        categorie varchar(255) DEFAULT null
    );

--Mohammed Miloudi

CREATE TABLE
    produits (
        id INT AUTO_INCREMENT NOT NULL,
        reference VARCHAR(255) DEFAULT NULL,
        designation VARCHAR(255) DEFAULT NULL,
        prix DECIMAL(10, 2) DEFAULT 0,
        ancient_prix DECIMAL(10, 2) DEFAULT 0,
        quantite INT DEFAULT 0,
        image VARCHAR(255) DEFAULT NULL,
        couleur VARCHAR(255) DEFAULT NULL,
        categorie VARCHAR(255) DEFAULT NULL,
        PRIMARY KEY (id)
    );

-- ikram

CREATE TABLE
    produits (
        id INT AUTO_INCREMENT NOT NULL,
        reference VARCHAR(255) DEFAULT NULL,
        designation VARCHAR(255) DEFAULT NULL,
        prix DECIMAL (10, 2) DEFAULT 0,
        ancient_prix DECIMAL (10, 2) DEFAULT 0,
        quantite INT DEFAULT 0,
        image VARCHAR(255) DEFAULT NULL,
        couleur VARCHAR(255) DEFAULT NULL,
        categorie VARCHAR(255) DEFAULT NULL,
    );

-- Noura

CREATE TABLE (
        1 produits id auto not null,
        reference (varchar) defaut null, (varchar) par defaut null,
        prix deciN1 10,
        2
    ) par defaut e,
    ancient_prix decimal 10,
    2
) par defaut a,
quantite int par defaut e
)

-- Achraf

CREATE TABLE
    users (
        id int NOT NULL AUTO_INCREMENT,
        reference varchar(255),
        designation varchar(255),
        prix decimal 10,
        2 par defaut 0,
        ancient_prix decimal 10,
        2 par defaut 0 varchar(255),
        quantite int par defaut 0 varchar(255) DEFAULT '123456',
        PRIMARY KEY (id),
    );

CREATE TABLE
    produits (
        id int NOT NULL AUTO_INCREMENT,
        reference varchar(255) DEFAULT NULL,
        designation varchar(255) DEFAULT NULL,
        prix decimal(10, 2) DEFAULT 0,
        ancien_prix decimal(10, 2) DEFAULT 0,
        quantite int DEFAULT 0,
        image varchar(255) DEFAULT NULL,
        couleur varchar(255) DEFAULT NULL,
        categorie varchar(255) DEFAULT NULL,
        PRIMARY KEY (id)
    );

[1] = > Array (
    [id] = > 1 [name] = > Iphone 13 Pro Max Blue 255 GO [image] = > 1. jpg [price] = > 13000 [old_price] = > 13500 [category] = > iphone [color] = > blue
)

[2] = > Array (
    [id] = > 2 [name] = > Iphone 13 Pro Max Gold 255 GO [image] = > 2. jpg [price] = > 13000 [old_price] = > 13500 [category] = > iphone [color] = > yellow
)

[3] = > Array (
    [id] = > 3 [name] = > Imac 24 Pouce Pink 255 GO [image] = > 3. jpg [price] = > 20000.00 [old_price] = > 23500.00 [categorie] = > imac [color] = > pink
)

[4] = > Array (
    [id] = > 4 [name] = > Imac 24 Pouce Gray 255 GO [image] = > 4. jpg [price] = > 20000.00 [old_price] = > 23500.00 [categorie] = > imac [color] = > gray
)

[5] = > Array (
    [id] = > 5 [name] = > Imac 24 Pouce Blue 255 GO [image] = > 5. jpg [price] = > 20000.00 [old_price] = > 23500.00 [categorie] = > imac [color] = > blue
)

[6] = > Array (
    [id] = > 6 [name] = > Imac 24 Pouce Yellow 255 GO [image] = > 6. jpg [price] = > 20000.00 [old_price] = > 23500.00 [categorie] = > imac [color] = > yellow
)

[7] = > Array (
    [id] = > 7 [name] = > Imac 24 Pouce Green 255 GO [image] = > 7. jpg [price] = > 20000.00 [old_price] = > 23500.00 [categorie] = > imac [color] = > green
)

INSERT INTO
    produits (
        id,
        reference,
        designation,
        prix,
        ancien_prix,
        quantite,
        image,
        couleur,
        categorie
    )
VALUES (
        null,
        'r-1',
        'Iphone 13 Pro Max Blue 255 GO',
        13000,
        13500,
        5,
        '1.jpg',
        'blue',
        'iphone'
    ), (
        null,
        'r-2',
        'Iphone 13 Pro Max Gold 255 GO',
        13000,
        13500,
        10,
        '2.jpg',
        'yellow',
        'iphone'
    );

-- Aya

INSERT INTO
    produits (
        id,
        reference,
        designation,
        prix,
        ancien_prix,
        quantite,
        image,
        couleur,
        categorie,
    )
VALUES (
        NULL,
        'r-1',
        "Iphone 13 Pro Max Blue 255 GO",
        13000.00,
        13500.00,
        10,
        "1.jpg",
        'blue',
        'iphone'
    ), (
        NULL,
        'r-2',
        "Iphone 13 Pro Max Gold 255 GO",
        13000.00,
        13500.00,
        10,
        "2.jpg",
        'yellow',
        'iphone'
    ), (
        NULL,
        'r-3',
        "Imac 24 Pouce Pink 255 GO",
        13000.00,
        13500.00,
        10,
        "3.jpg",
        ' $colors[9]',
        ' $categories[2][' name ']'
    ), (
        NULL,
        'r-4',
        "Imac 24 Pouce Gray 255 GO",
        23500.00,
        23500.00,
        10,
        "4.jpg",
        '$colors[1]',
        ' $categories[2][' name ']'
    ), (
        NULL,
        'r-5',
        "Imac 24 Pouce Blue 255 GO",
        23500.00,
        "20000.00",
        10,
        "5.jpg",
        '$colors[4]',
        ' $categories[2][' name ']'
    ), (
        NULL,
        'r-6',
        "Imac 24 Pouce Yellow 255 GO",
        "20000.00",
        23500.00,
        10,
        "6.jpg",
        '$colors[6]',
        ' $categories[2][' name ']'
    ), (
        NULL,
        'r-7',
        "Imac 24 Pouce Green 255 GO",
        "20000.00",
        23500.00,
        10,
        "7.jpg",
        ' $colors[5] ',
        ' $categories[2][' name ']'
    );

-- Ikram

INSERT INTO
    produits(
        id,
        reference,
        designation,
        prix,
        ancien_prix,
        quantite,
        image,
        couleur,
        categorie
    )
VALUES (
        null,
        'R-1',
        'Iphone 13 Pro Max Blue 255 GO',
        13000,
        13500,
        1,
        '1.jpg',
        'blue',
        'iphone'
    ), (
        null,
        'R-2',
        'Iphone 13 Pro Max yellow 255 GO',
        '2 ',
        '2.jpg',
        '13000',
        '13500',
        'iphone',
        'yellow'
    ), (
        null,
        'R-3',
        'Imac 24 Pouce Pink 255 GO',
        '3 ',
        '3.jpg',
        '20000.00',
        '23500.00',
        'imac',
        'PINK'
    ), (
        null,
        'R-4',
        ' Imac 24 Pouce Gray 255 GO',
        '4 ',
        '4.jpg',
        '20000.00',
        '23500.00',
        'imac',
        'gray'
    ), (
        null,
        'R-5',
        'Imac 24 Pouce Blue 255 GO',
        '5 ',
        '5.jpg',
        '20000.00',
        '23500.00',
        'imac',
        'blue'
    ), (
        null,
        'R-6',
        ' Imac 24 Pouce Yellow 255 GO',
        '6 ',
        '6.jpg',
        '20000.00',
        '23500.00',
        'imac',
        'yellow'
    ), (
        null,
        'R-7',
        ' Imac 24 Pouce Green 255 GO',
        'è7 ',
        '7.jpg',
        '20000.00',
        '23500.00',
        'imac',
        'green'
    );

-- Mohammed

INSERT INTO
    produits (
        id,
        reference,
        designation,
        prix,
        ancient_prix,
        quantite,
        image,
        couleur,
        categorie
    )
VALUES (
        null,
        'R-1',
        'Iphone 13 Pro Max Blue 255 GO',
        13000,
        13500,
        1,
        '1.jpg',
        'blue',
        'iphone'
    ), (
        null,
        'R-2',
        'Iphone 13 Pro Max Gold 255 GO',
        13000,
        13500,
        1,
        '2.jpg',
        'yellow',
        'iphone'
    ), (
        null,
        'R-3',
        'Imac 24 Pouce Pink 255 GO',
        20000.00,
        23500.00,
        1,
        '3.jpg',
        'pink',
        'imac'
    ), (
        null,
        'R-4',
        'Imac 24 Pouce Gray 255 GO',
        20000.00,
        23500.00,
        1,
        '4.jpg',
        'gray',
        'imac'
    ), (
        null,
        'R-5',
        'Imac 24 Pouce Blue 255 GO',
        20000.00,
        23500.00,
        1,
        '5.jpg',
        'Blue',
        'imac'
    ), (
        null,
        'R-6',
        'Imac 24 Pouce Yellow 255 GO',
        20000.00,
        23500.00,
        1,
        '6.jpg',
        'Yellow',
        'imac'
    ), (
        null,
        'R-7',
        'Imac 24 Pouce Green  255 GO',
        20000.00,
        23500.00,
        1,
        '7.jpg',
        'Green ',
        'imac'
    );

INSERT INTO
    produits (
        id,
        reference,
        designation,
        prix,
        ancien_prix,
        quantite,
        image,
        couleur,
        categorie
    )
VALUES (
        null,
        'R-1',
        'Iphone 13 Pro Max Blue 255 GO',
        13000,
        13500,
        1,
        '1.jpg',
        'blue',
        'iphone'
    ), (
        null,
        'R-2',
        'Iphone 13 Pro Max Gold 255 GO',
        13000,
        13500,
        1,
        '2.jpg',
        'yellow',
        'iphone'
    ), (
        null,
        'R-3',
        'Imac 24 Pouce Pink 255 GO',
        20000.00,
        23500.00,
        1,
        '3.jpg',
        'pink',
        'imac'
    ), (
        null,
        'R-4',
        'Imac 24 Pouce Gray 255 GO',
        20000.00,
        23500.00,
        1,
        '4.jpg',
        'gray',
        'imac'
    ), (
        null,
        'R-5',
        'Imac 24 Pouce Blue 255 GO',
        20000.00,
        23500.00,
        1,
        '5.jpg',
        'Blue',
        'imac'
    ), (
        null,
        'R-6',
        'Imac 24 Pouce Yellow 255 GO',
        20000.00,
        23500.00,
        1,
        '6.jpg',
        'Yellow',
        'imac'
    ), (
        null,
        'R-7',
        'Imac 24 Pouce Green  255 GO',
        20000.00,
        23500.00,
        1,
        '7.jpg',
        'Green ',
        'imac'
    );

CREATE TABLE
    produits (
        id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        reference varchar(255) DEFAULT NULL,
        designation varchar(255) DEFAULT NULL,
        prix decimal(10, 2) DEFAULT 0,
        ancien_prix decimal(10, 2) DEFAULT 0,
        quantite int DEFAULT 0,
        image varchar(255) DEFAULT NULL,
        couleur varchar(255) DEFAULT NULL,
        categorie varchar(255) DEFAULT NULL
    );

INSERT INTO
    produits (
        id,
        reference,
        designation,
        prix,
        ancien_prix,
        quantite,
        image,
        couleur,
        categorie
    )
VALUES (
        null,
        'R-1',
        'Iphone 13 Pro Max Blue 255 GO',
        13000,
        13500,
        1,
        '1.jpg',
        'blue',
        'iphone'
    ), (
        null,
        'R-2',
        'Iphone 13 Pro Max Gold 255 GO',
        13000,
        13500,
        1,
        '2.jpg',
        'yellow',
        'iphone'
    ), (
        null,
        'R-3',
        'Imac 24 Pouce Pink 255 GO',
        20000.00,
        23500.00,
        1,
        '3.jpg',
        'pink',
        'imac'
    ), (
        null,
        'R-4',
        'Imac 24 Pouce Gray 255 GO',
        20000.00,
        23500.00,
        1,
        '4.jpg',
        'gray',
        'imac'
    ), (
        null,
        'R-5',
        'Imac 24 Pouce Blue 255 GO',
        20000.00,
        23500.00,
        1,
        '5.jpg',
        'Blue',
        'imac'
    ), (
        null,
        'R-6',
        'Imac 24 Pouce Yellow 255 GO',
        20000.00,
        23500.00,
        1,
        '6.jpg',
        'Yellow',
        'imac'
    ), (
        null,
        'R-7',
        'Imac 24 Pouce Green 255 GO',
        20000.00,
        23500.00,
        1,
        '7.jpg',
        'Green',
        'imac'
    );

SELECT * FROM produits WHERE categorie = 'iphone';

SELECT * FROM produits WHERE couleur = 'blue';

UPDATE produits
SET
    designation = 'Iphone 13 Pro Max Blue 1 To'
WHERE id = 5;

UPDATE produits
SET
    Prix = 25000,
    ancien_prix = 25499,
    quantite = 5,
    categorie = 'iphone '
WHERE id = 5;

$serach = 'Iphone';

SELECT * FROM produits WHERE designation LIKE '%'.$serach.'%';

SELECT * FROM produits WHERE prix BETWEEN 15000 AND 24000 ;

SELECT MIN(13000), MAX(24000) FROM produits WHERE prix ;

SELECT prix
FROM produits
WHERE prix = ANY (
        SELECT prix
        FROM produits
        WHERE prix > 15000
    );

SELECT prix FROM produits WHERE prix > 15000;




INSERT INTO produits (
    id,
    reference,
    designation,
    prix,
    ancien_prix,
    quantite,
    image,
    couleur,
    categorie
)
VALUES

    (null, 'R-10', 'Ipad Serie 2023 M2 Pro Max 1 To', 23000, 23500.00, 20, '9.jpg', 'Purple','Ipad');

select id,designation from produits;


update produits set image = CONCAT(id, '.jpeg');

UPDATE produits
SET image = REPLACE(image, '.jpg', '.jpeg')
WHERE image LIKE '%.jpg';

UPDATE produits
SET image = REPLACE(image, '.jpeg', '.jpg')
WHERE image LIKE '%.jpeg';
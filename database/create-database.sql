USE dotart;

DROP TABLE IF EXISTS art;

CREATE TABLE art ( 
 id            smallint(5)  NOT NULL AUTO_INCREMENT PRIMARY KEY,
 artist        smallint(5)  NOT NULL,  	 
 title  	      varchar(50)  NOT NULL,  	 
 media  	      varchar(50)  NOT NULL, 	 
 width  	      smallint(5)  NOT NULL, 	 
 height        smallint(5)  NOT NULL, 	 
 image  	      varchar(25)  NOT NULL,  	 
 image_width  	smallint(5)  NOT NULL,
 image_height  smallint(5)  NOT NULL,
 pricing_info  varchar(150) NOT NULL, 
 main_image    tinyint(1)   NOT NULL
);

DROP TABLE IF EXISTS artist;

CREATE TABLE artist (
 id         smallint(5) PRIMARY KEY,
 name       varchar(25),
 statement  text,
 notes      text,
 keywords   varchar(200) default 'Art to Buy, Buy artwork, Artists Contemporary, Liverpool Art, Liverpool Art Gallery, Local artists, Local artist, Art to buy',
 address_1  varchar(50),
 address_2  varchar(50),
 town       varchar(25),
 county     varchar(25),
 postcode   varchar(10),
 display    tinyint(1),
 region     varchar(40) default 'Merseyside'
);

DROP TABLE IF EXISTS art_pricing;

CREATE TABLE art_pricing (
 art          smallint(5)   NOT NULL,
 item_number  varchar(10)   NOT NULL,
 description  varchar(100)  NOT NULL,
 price        decimal(7,2)  NOT NULL
);

DROP TABLE IF EXISTS registration;

CREATE TABLE registration (
 name         varchar(25)   NOT NULL,
 address_1    varchar(50),
 address_2    varchar(50),
 town         varchar(25),
 postcode     varchar(10),
 telno        varchar(15),
 email        varchar(50)  NOT NULL,
 hearabout    varchar(25),
 specify      varchar(50)
);

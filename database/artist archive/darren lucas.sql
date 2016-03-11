


INSERT INTO artist (id, name, statement, notes, display, keywords)
	VALUES(289, 'darren lucas',
	'<p class="artist"></p>

<p class="artist">I am a self taught artist based in the small industrial town of St. Helens. I fell in love with art at a very young age, 
this is where I developed my passion for pencil portraits. I experimented a lot with different media during my college days, where I ended 
up specialising in Graphic Design.
For most of my adult life, I have worked within Retail and Finance but more recently I have become a fully 
qualified personal trainer and now looking to expand into Sports Coaching. It is this love of Sports that I use to influence the subjects of 
most of my portraits.</p>

<p class="artist"></p>

<p class="artist"></p>',
               NULL,
	       1,
		'darren lucas, portrait artist, portraits, pencil drawing, celebrity portraits, portrait commissions, pencil portraits');

##----------------------------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(289,
	       'young budgerigar',
	       'graphite pencil on paper',
	       21,
	       29.5,
	       'young-budgerigar',
	       'original &pound;100',
	       1,
		453,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ci107', 'original', 100 );


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(289,
	       'budgerigar',
	       'graphite pencil on paper',
	       21,
	       29.5,
	       'budgerigar',
	       'original &pound;100',
	       0,
		453,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ci108', 'original', 100 );


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(289,
	       'best of friends',
	       'graphite pencil on paper',
	       21,
	       29.5,
	       'best-of-friends',
	       'original &pound;100',
	       0,
		453,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ci109', 'original', 100 );


##----------------------------------------------------------------------------------

INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(289,
	       'robin van persie',
	       'pencil on paper',
	       30.3,
	       42,
	       'robin-van-persie',
	       'original &pound;500',
	       0,
		470,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ci101', 'original', 500 );


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(289,
	       'jared leto',
	       'pencil on paper',
	       30.3,
	       42,
	       'jared-leto',
	       'original &pound;900',
	       0,
		478,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ci102', 'original', 900 );


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(289,
	       'tom brady',
	       'pencil on paper',
	       30.3,
	       42,
	       'tom-brady',
	       'original &pound;800',
	       0,
		458,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ci103', 'original', 800 );


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(289,
	       'man city premier league champions 2012',
	       'pencil on paper',
	       30.3,
	       42,
	       'man-city-premier',
	       'original &pound;750',
	       0,
		463,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ci104', 'original', 750 );


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(289,
	       'professor brian cox',
	       'pencil on paper',
	       30.3,
	       42,
	       'professor-brian-cox',
	       'original &pound;650',
	       0,
		471,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ci105', 'original', 650 );


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(289,
	       'us open champion andy murray',
	       'pencil on paper',
	       30.3,
	       42,
	       'us-open-champion',
	       'original &pound;700',
	       0,
		469,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ci106', 'original', 700 );


##----------------------------------------------------------------------------------


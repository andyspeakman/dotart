
INSERT INTO artist (id, name, statement, notes, display, keywords)
	VALUES(285, 'art for arts sake',
	'<p class="artist">Art for Art''s Sake are Em Coombes & Paul Markland.</p>

<p class="artist">"We share the same approach and inspiration to our art, using nature as our primary inspiration. Paul paints landscapes and close-up flowers and stems on pieces of machine-cut natural world, using acrylic. Em combines nature with different painting techniques in metallic and acrylic on canvas to create abstract representations of flowers and petals, often incorporating skeleton leaves, hand-made papers and metallic pen into the designs."</p>


<p class="artist"></p>

<p class="artist"></p>',
               NULL,
	       1,
		'KEYWORDS');


##----------------------------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'autumn fall',
	       'acrylic on wood',
	       36,
	       20,
	       'autumn-fall',
	       'original &pound;160',
	       0,
		430,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at101', 'original', 160);


##----------------------------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'clouds',
	       'acrylic on wood',
	       39,
	       13,
	       'clouds',
	       'original &pound;160',
	       0,
		650,
		 243);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at102', 'original', 160);


##----------------------------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'full bloom',
	       'acrylic on wood',
	       46,
	       13,
	       'full-bloom',
	       'original &pound;120',
	       0,
		289,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at103', 'original', 120);


##---------------------------------------------------------------------------------- 



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'just one flower',
	       'acrylic on wood',
	       23,
	       18.5,
	       'just-one-flower',
	       'original &pound;150',
	       1,
		557,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at104', 'original', 150);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'in the wild',
	       'acrylic on canvas',
	       40,
	       30,
	       'in-the-wild',
	       'original &pound;70',
	       0,
		336,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at105', 'original', 70);


##----------------------------------------------------------------------------------  


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'freds flowers',
	       'acrylic on wood',
	       39,
	       15,
	       'freds-flowers',
	       'original &pound;100',
	       0,
		300,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at106', 'original', 100);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'is the anyone there',
	       'acrylic on canvas',
	       40,
	       30,
	       'is-there-anyone',
	       'original &pound;60',
	       0,
		650,
		 486);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at107', 'original', 60);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'wood in winter',
	       'acrylic on canvas',
	       45,
	       35,
	       'wood-in-winter',
	       'original &pound;60',
	       0,
		650,
		 504);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at108', 'original', 60);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'heart of the flower',
	       'acrylic on canvas',
	       38,
	       20,
	       'heart-of-the',
	       'original &pound;60',
	       0,
		650,
		 342);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at109', 'original', 60);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'plants thermal sunset',
	       'mixed media on canvas',
	       50,
	       40,
	       'plants-thermal-sunset',
	       'original &pound;60',
	       0,
		650,
		 543);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at110', 'original', 60);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'sunset in the woods',
	       'acrylic on wood',
	       30,
	       14,
	       'sunset-in-the',
	       'original &pound;120',
	       0,
		650,
		 289);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at111', 'original', 120);


##----------------------------------------------------------------------------------  


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'copper foliage1',
	       'mixed media on canvas',
	       50,
	       4,
	       'copper-foliage1',
	       'original &pound;100',
	       0,
		643,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at112', 'original', 100);


##----------------------------------------------------------------------------------  


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'copper foliage3',
	       'mixed media on canvas',
	       60,
	       4,
	       'copper-foliage3',
	       'original &pound;110',
	       0,
		645,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at112', 'original', 110);


##----------------------------------------------------------------------------------    


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'metal swirls1',
	       'mixed media on canvas',
	       50,
	       77,
	       'metal-swirls1',
	       'original &pound;80',
	       0,
		421,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at113', 'original', 80);


##----------------------------------------------------------------------------------    


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'fall',
	       'mixed media on canvas',
	       50,
	       40,
	       'fall',
	       'original &pound;90',
	       0,
		650,
		 514);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at114', 'original', 90);


##----------------------------------------------------------------------------------     


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'glamour',
	       'mixed media on canvas',
	       30,
	       80,
	       'glamour',
	       'original &pound;70',
	       0,
		650,
		 243);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at115', 'original', 70);


##----------------------------------------------------------------------------------     


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(285,
	       'red petals1',
	       'mixed media on canvas',
	       60,
	       4,
	       'red-petals1',
	       'original &pound;100',
	       0,
		641,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'at116', 'original', 100);


##----------------------------------------------------------------------------------
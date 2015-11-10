
INSERT INTO artist (id, name, statement, notes, display)
	VALUES(214, 'verity breeze',
	'<p class="artist">Verity is a Cheshire based artist who creates unique multimedia artworks. 
The artist says of her work:
</p>

<p class="artist">"I consider myself to be the female version of Willy Wonka- eccentric to the end! 
When you enter my studio you enter "The Chocolate Room" where you will see the end product of all my thoughts, 
designs and secrets. The passion i have for a blank canvas, a wall or fabric or anything large enough to create 
on is all i need to bring my ideas to life. I paint what is streaming through my thoughts at that moment. 
My studio helps me create and my passion leads me to what i love about my work."
</p>

<p class="artist">
</p>

<p class="artist"></p>',
               NULL,
	       1);



##---------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(214,
	       'searching',
	       'watercolour and acrylic mounted on watercolour paper',
	       70,
	       90,
	       'searching',
	      'original, &pound;300',
	       0,
		650,
		 472);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'vb110', 'original', 300);


##---------------------------------------------------------------




INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(214,
	       'controlled',
	       'acrylic and acrylic glaze on canvas',
	       60,
	       60,
	       'controlled',
	      'original, &pound;250',
	       0,
		650,
		 645);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'vb112', 'original', 250);


##---------------------------------------------------------------




INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(214,
	       'all the seasons',
	       'mixed media on canvas',
	       125,
	       102,
	       'all_the_seasons',
	      'original, &pound;300',
	       0,
		650,
		 519);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'vb102', 'original', 300);


##---------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(214,
	       'shattered dreams',
	       'mixed media on canvas',
	       125,
	       102,
	       'shatterd_dreams',
	      'original, &pound;250',
	       0,
		438,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'vb103', 'original', 250);


##---------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(214,
	       'sorrow',
	       'mixed media on canvas',
	       125,
	       102,
	       'sorrow',
	      'original, &pound;155',
	       0,
		432,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'vb104', 'original', 155);


##---------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(214,
	       'sweet',
	       'acrylic on canvas',
	       125,
	       102,
	       'sweet',
	      'original, &pound;155',
	       0,
		433,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'vb105', 'original', 155);


##---------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(214,
	       'wounded',
	       'mixed media on canvas',
	       100,
	       100,
	       'wounded',
	      'original, &pound;300',
	       0,
		650,
		 647);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'vb106', 'original', 300);


##---------------------------------------------------------------




INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(214,
	       'it will never stay the same',
	       'mixed media on canvas',
	       100,
	       100,
	       'it_will_never',
	      'original, &pound;650',
	       0,
		645,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'vb108', 'original', 650);


##---------------------------------------------------------------



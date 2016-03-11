

INSERT INTO artist (id, name, statement, notes, display)
	VALUES(299, 'stanislaw krakiewicz',
	'<p class="artist">Stanislaw Jan Krakiewicz (Stas) was born in 1964 in Liverpool, England from Polish immigrant parents fleeing from persecution in the 
Second World War. He has history of painting stretching back fifteen years, which has evolved stylistically and passionately through his varying arts practise. 
Recently he has preferred to find inspiration from English Naive art and Art Brute that has no need to show technical realism, with the belief that it gets 
in the way of the balancing act between concept, colour and form. He resolves his concepts through his fragmented dyslexic residual memory and revels 
artistically in its unexpected outcomes.
</p>

<p class="artist">His mature style can be broken up into three distinctive themes: dwellings in sparse abstracted landscapes, primitive art reflecting on fatherhood 
and portraiture in the faux primitive manner. 
</p>

<p class="artist">The House Work’s paintings are an ongoing exploration based on the theme of homes that embraces Stas''s interest in buildings. 
Although the works use landscape as a starting point his main aim is to keep a connection with abstraction. The finished paintings are left with 
a freshness that reflects the influence of his faux primitive style. The paintings highlight the vulnerability of the structures in a sparse colour plane, 
reflecting landscape simulating the abstract nature of the sky meeting land, which binds together the art works.</p>

<p class="artist">The portraiture began by representing effigies of past and close friends and exploring self-portraiture in his new style. 
The poses are kept simplistic with the sitter confronting the viewer on a brightly coloured background. The portrayed often hold or stand by 
an artefact that reflect their character. The distortions of features support the paintings honest mannerism and are bereft of the traditional 
baggage associated with portraiture. 
</p>

<p class="artist">The faux primitive paintings are an intimate look at a child''s/ naive viewpoint, that is playful and in awe of the world surrounding it. 
The work takes it influences from days out at the zoo, the aquarium and at home as the artist reinvents his visual relationships with the help of his daughter.</p>
',
               NULL,
	       1);

##---------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(299,
	       'tara and cat',
	       'framed acrylic on board',
	       56,
	       72,
	       'tara-and-cat',
	      'original, &pound;1360',
	       0,
		505,
		650);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'sk101', 'original', 1360);

##---------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(299,
	       'five high rise on grey ground',
	       'framed acrylic on board',
	       55,
	       41,
	       'five-high-rise',
	      'original, &pound;1190',
	       0,
		650,
		472);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'sk102', 'original', 1190);

##---------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(299,
	       'man who would be king',
	       'framed acrylic on board',
	       33,
	       41,
	       'man-who-would',
	      'original, &pound;1190',
	       0,
		482,
		650);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'sk103', 'original', 1190);

##---------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(299,
	       'house with double garage',
	       'framed acrylic on board',
	       40,
	       32,
	       'house-with-double',
	      'original, &pound;850',
	       1,
		650,
		466);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'sk104', 'original', 850);

##---------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(299,
	       'attractive fish',
	       'framed acrylic on board',
	       54,
	       44,
	       'attractive-fish',
	      'original, &pound;850',
	       0,
		650,
		488);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'sk105', 'original', 850);

##---------------------------------------------------------------





INSERT INTO artist (id, name, statement, notes, display)
	VALUES(297, 'sarah dooley',
	'<p class="artist">
</p>

<p class="artist">
</p>

<p class="artist">

</p>

<p class="artist"></p>',
               NULL,
	       1);

##---------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(297,
	       'flowers 1',
	       'acrylic on acid free canvas textured paper',
	       45,
	       35,
	       'flowers-1',
	      'original, &pound;125',
	       1,
		650,
		496);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'sd101', 'original', 125);

##---------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(297,
	       'flowers 2',
	       'acrylic on acid free canvas textured paper',
	       45,
	       35,
	       'flowers-2',
	      'original, &pound;125',
	       0,
		509,
		650);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'sd102', 'original', 125);

##---------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(297,
	       'flowers 3',
	       'acrylic on acid free canvas textured paper',
	       45,
	       35,
	       'flowers-3',
	      'original, &pound;125',
	       0,
		650,
		506);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'sd103', 'original', 125);

##---------------------------------------------------------------




INSERT INTO artist (id, name, statement, notes, display)
	VALUES(61, 'gail pickett',
	'<p class="artist">Merseyside based gail graduated from Liverpool art school in 1995, and since then has exhibited widely around Liverpool as well as the rest of the Uk, and as far afield as Germany.</p>
<p class="artist">Her work is often linked to her strong interest in natural form, and in particlular fish. She hopes to challenge and explore the sometimes misunderstood genre of nature painting and also the ambiguous relationship between painting and photography.</p>
<p class="artist">Gail discusses how she uses these contradictions and parallels in her work-</p>
<p class="artist">"Machines such as photocopiers and cameras are often believed to reproduce reality more accurately than painting but even the simple act of reproducing the same image for example the koi carp in "reproduction" leads to differences in tonality not controlled by the operator and differences in size which is controlled. Rather like selective breeding (the koi is the ultimate example of selective breeding) the outcome can never be totally guaranteed.  
I want my paintings to work as interesting images which entertain the eye. Pictures, in other words, ones which can be perhaps both about (painting) and of (nature)."</p>
',
               NULL,
	       1);


##----------------------------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(61,
	       'knots',
	       'oil on linen',
	       152,
	       109,
	       'knots',
	       'original &pound;1100',
	       0,
		650,
		 459);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'GP101', 'original', 1100);

##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(61,
	       'reproduction',
	       'oil on board',
	       107,
	       107,
	       'reproduction',
	       'original &pound;990',
	       0,
		650,
		 491);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'GP102', 'original', 990);

##----------------------------------------------------------------------------------

INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(61,
	       'twelve colours of the rainbow trout',
	       'oil on board',
	       61,
	       30,
	       'twelve_colours_of',
	       'original &pound;550',
	       0,
		650,
		 324);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'GP104', 'original', 550);

##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(61,
	       'ripples',
	       'oil on board',
	       76,
	       76,
	       'ripples',
	       'original &pound;715',
	       0,
		650,
		 645);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'GP105', 'original', 645);

##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(61,
	       'tickled trout',
	       'pencil on paper',
	       69,
	       51,
	       'tickled_trout',
	       'original &pound;165',
	       0,
		650,
		 488);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'GP106', 'original', 165);

##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(61,
	       'threes',
	       'oil on board',
	       30,
	       30,
	       'threes',
	       'original &pound;200',
	       1,
		650,
		 633);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'GP107', 'original', 200);

##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(61,
	       'cloth and thorns',
	       'oil on board',
	       46,
	       61,
	       'cloth_and_thorns',
	       'original &pound;250',
	       0,
		485,
		 650);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'GP108', 'original', 250);

##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(61,
	       'feather study',
	       'oil on board',
	       30,
	       30,
	       'feather_study',
	       'original &pound;200',
	       0,
		650,
		 543);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'GP109', 'original', 200);

##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(61,
	       'three geese over a reedbed',
	       'oil on canvas',
	       46,
	       38,
	       'three_geese_over',
	       'original &pound;250',
	       0,
		650,
		 534);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'GP110', 'original', 250);

##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(61,
	       'nautilus and land snails',
	       'oil on board',
	       61,
	       76,
	       'nautilus_and_land',
	       'original &pound;400',
	       0,
		488,
		 650);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'GP111', 'original', 400);

##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(61,
	       'the gatekeeper',
	       'oil on board',
	       61,
	       122,
	       'the_gatekeeper',
	  'original &pound;550',
	       0,
		323,
		 650);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'GP112', 'original', 550);

##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(61,
	       'bird in the hand',
	       'oil on board',
	       122,
	       92,
	       'bird_in_the',
	       'commission example',
	       0,
		650,
		 497);


##----------------------------------------------------------------------------------
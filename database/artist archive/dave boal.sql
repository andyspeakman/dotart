
INSERT INTO artist (id, name, statement, notes, display, keywords)
	VALUES(282, 'dave boal',
	'<p class="artist"></p>

<p class="artist">Dave has been an art teacher for 34 years and painted in his spare time throughout these years, but now feels ready and able to share the work hecreates. He says of his working process:</p>


<p class="artist">"Most paintings are developed from memories, recollections and interpretations of places visited on holidays or on walks. Sketchbooks are constantly used to record observations during each visit, often backed up by written notes and sometimes photographs of particular areas of colour and texture. Back home these studies serve as reminders of events, atmosphere and ambiance of the places visited. The resulting paintings, however, are not of any particular, specific view, or location, but more of a feeling, generalised from memories of place, based on colours and shapes."</p>

<p class="artist"></p>',
               NULL,
	       1,
		'dave boal, david boal artist, liverpool artist, liverpool painter, abstract painting, abstract landscapes, acrylic on canvas, oil on canvas, colour paintings');

##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'tibet',
	       'acrylic on canvas',
	       122,
	       102,
	       'tibet',
	  	       'original &pound;650',
	       1,
		551,
		 650);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da121', 'original', 650);



##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'purple nightlife',
	       'acrylic and collage on canvas',
	       122,
	       192,
	       'purpel-nightlife',
	       'original &pound;560',
	       0,
		491,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da113', 'original', 560);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'not easy being green',
	       'acrylic on canvas',
	       127,
	       112,
	       'not-easy-being',
	       'original &pound;650',
	       0,
		575,
		 650);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da122', 'original', 650);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'duke street blues',
	       'acrylic on canvas',
	       100,
	       100,
	       'duke-street-blue',
	     	       'original &pound;370',
	       0,
		650,
		 647);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da123', 'original', 370);
	
##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'yellow duke',
	       'acrylic on canvas',
	       100,
	       100,
	       'yellow-duke',
	    	       'original &pound;370',
	       0,
		650,
		 647);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da124', 'original', 370);

##----------------------------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'elmars palm springs',
	       'acrylic on canvas',
	       36,
	       26,
	       'elmars-palm-springs',
	       'original &pound;150',
	       0,
		471,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da107', 'original', 150);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'palm springs',
	       'acrylic on canvas',
	       36,
	       26,
	       'palm-springs',
	       'original &pound;150',
	       0,
		465,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da108', 'original', 150);


##----------------------------------------------------------------------------------

INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'yellows',
	       'acrylic on canvas',
	       61,
	       82,
	       'yellows',
	       'original &pound;350',
	       0,
		650,
		 491);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da101', 'original', 350);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'pembrokeshire landscape',
	       'acrylic on canvas',
	       90,
	       60,
	       'pembrokeshire-landscape',
	       'original &pound;320',
	       0,
		650,
		 430);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da102', 'original', 320);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'mont blanc pathway',
	       'acrylic on canvas',
	       127,
	       112,
	       'montblanc-passway',
		       'original &pound;600',
	       0,
		650,
		 583);

INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da103', 'original', 600);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'large wall painting',
	       'acrylic on canvas',
	       168,
	       119,
	       'large-wall-painting',
	       'original &pound;700',
	       0,
		466,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da104', 'original', 700);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'green mont blanc',
	       'acrylic on canvas',
	       61,
	       51,
	       'green-montblanc',
	       'original &pound;250',
	       0,
		650,
		 546);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da105', 'original', 250);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'cornwall',
	       'acrylic on canvas',
	       122,
	       101,
	       'cornwall',
	       'original &pound;550',
	       0,
		650,
		 537);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da106', 'original', 550);


##----------------------------------------------------------------------------------





INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'nepal landscape',
	       'acrylic on canvas',
	       100,
	       70,
	       'napul-landscape',
	       'original &pound;350',
	       0,
		456,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da111', 'original', 350);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'holy trinity',
	       'acrylic on canvas',
	       51,
	       82,
	       'holy-trinity',
	       'original &pound;250',
	       0,
		650,
		 403);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da112', 'original', 250);


##----------------------------------------------------------------------------------






INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'landscape',
	       'acrylic on canvas',
	       102,
	       76,
	       'landscape',
	       'original &pound;350',
	       0,
		488,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da116', 'original', 350);


##----------------------------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'yellow creatures',
	       'acrylic on canvas',
	       51,
	       76,
	       'yellow-creatures',
	       'original &pound;270',
	       0,
		650,
		 526);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da117', 'original', 270);


##----------------------------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'whiter shade of pale',
	       'oil on canvas',
	       122,
	       87,
	       'whiter-shade-of',
	       'original &pound;620',
	       0,
		519,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da118', 'original', 620);


##----------------------------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'winter and summer',
	       'acrylic on canvas',
	       91,
	       50,
	       'winter-and-summer',
	       'original &pound;350',
	       0,
		454,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da119', 'original', 350);


##----------------------------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(282,
	       'montauk highway',
	       'acrylic on canvas',
	       80,
	       30,
	       'montauk-highway',
	       'original &pound;300',
	       0,
		243,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'da120', 'original', 300);


##----------------------------------------------------------------------------------
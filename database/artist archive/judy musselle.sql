


INSERT INTO artist (id, name, statement, notes, display, keywords)
	VALUES(270, 'judy musselle',
	'<p class="artist">My childhood was spent in the dour landscape of South Yorkshire, in a pit village where I felt a bit out of place and my fevered imagination took me away to more exotic locations. I have been drawing and making things since I can remember and my creations epitomized this other world from my daydreams.</p>

<p class="artist">Going to Art College at 17 was completely liberating and I felt at home in the creative environment. Thirty years on and have been an illustrator, a muralist, a painter and a printmaker. I have also been a college lecturer and a primary school teaching assistant. My work has sold worldwide in the form of greeting cards, advertisements, fabric designs, shop logos and book jackets. My clients include Andre Deutch, Rose and Hubble, Mothercare and Booktrust. I worked for Shared Earth as their product designer for ten years and have recently illustrated two books for Harper Collins. I have shown my work in galleries nationally and I won the Bohemia Prize at the Hull Open at The Ferens Gallery in 2007. I have worked in 36 schools as an artist in residence and painted murals for restaurants, nurseries, schools culminating in my  biggest challenge; a 40 metre long mural at Hull Maritime Docks.</p>


<p class="artist">The inspiration for my own work is an unceasing obsession with escapism: I draw my ideas from the people and landscapes around me, my memories and my children but am also inspired by stories, myths and dreams of magical faraway lands (still). My paintings are autobiographical: they represent my interest in the complexities and fears of childhood and adolescence, the loss of innocence and the challenges that arise with family responsibilities. My paintings have a strong narrative quality; each one has a story behind it and I delight in the use of vivid colour and pattern. As an artist I am hugely influenced by Chagall, Ana Maria Pacheco, Frida Kahlo and Paula Rego.</p>

<p class="artist">My work has been described as vibrant, humorous and verging on sinister and I am quite happy with that.</p>',
               NULL,
	       1,
		'Judy Musselle Artist, Liverpool Artist, Southport artist, character paintings, fantastic painting, fairy tale paintings, childlike paintings, naive art,  fabulist painter, mural artist, paintings for children');

##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(270,
	       'the lost cat',
	       'acrylic on canvas',
	       76,
	       102,
	       'the-lost-cat',
	       'original &pound;1000',
	       0,
		494,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'JM110', 'original', 1000);


##----------------------------------------------------------------------------------

INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(270,
	       'winter bride',
	    	       'framed acrylic on canvas',
	       36,
	       41,
	       'winter-bride',
	       'original &pound;450',
	       0,
		537,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'JM115', 'original', 450);


##----------------------------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(270,
	       'the mermaid costume',
	       'acrylic on canvas',
	       47,
	       56,
	       'the-mermaid-costume',
	       'original &pound;700',
	       0,
		516,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'JM111', 'original', 700);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(270,
	       'the proposal',
	       'acrylic on canvas',
	       26,
	       33,
	       'the-proposal',
	       'original &pound;500',
	       1,
		467,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'JM112', 'original', 500);


##----------------------------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(270,
	       'viola player',
	      	       'framed acrylic on canvas',
	       33,
	       38,
	       'viola-player',
	       'original &pound;350',
	       0,
		496,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'JM113', 'original', 350);


##----------------------------------------------------------------------------------

INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(270,
	       'best dress',
	       'framed acrylic on canvas',
	       26,
	       33,
	       'best-dress',
	       'original &pound;500',
	       0,
		467,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'JM101', 'original', 500);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(270,
	       'enchanted night',
	  'framed acrylic on canvas',
	       42,
	       52,
	       'enchanted-night',
	       'original &pound;550',
	       0,
		505,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'JM102', 'original', 550);


##----------------------------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(270,
	       'jumping frog',
	       'acrylic on canvas',
	       76,
	       102,
	       'jumping-frog',
	       'original &pound;1000',
	       0,
		490,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'JM104', 'original', 1000);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(270,
	       'mermaid in harbour',
	      	       'framed acrylic on canvas',
	       62,
	       78,
	       'mermaid-in-harbour',
	       'original &pound;750',
	       0,
		485,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'JM105', 'original', 750);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(270,
	       'songs of the sea',
	     	       'framed acrylic on canvas',
	       67,
	       82,
	       'songs-of-the',
	       'original &pound;900',
	       0,
		515,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'JM106', 'original', 900);


##----------------------------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(270,
	       'symmetry',
	       	       'framed acrylic on canvas',
	       98,
	       118,
	       'symmetry',
	       'original &pound;1600',
	       0,
		533,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'JM108', 'original', 1600);


##----------------------------------------------------------------------------------


INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(270,
	       'tea for two',
	   	       'framed acrylic on canvas',
	       33,
	       33,
	       'tea-for-two',
	       'original &pound;300',
	       0,
		645,
		 650);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'JM109', 'original', 300);


##----------------------------------------------------------------------------------





INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(270,
	       'whale and mermaids',
	      	       'framed acrylic on canvas',
	       67,
	       67,
	       'whale-and-mermaids',
	       'original &pound;600',
	       0,
		650,
		 644);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'JM114', 'original', 600);


##----------------------------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(270,
	       'facing fears',
	       'framed acrylic on canvas',
	       132,
	       106,
	       'facing-fears',
	       'original &pound;2000',
	       0,
		650,
		 524);


INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'JM103', 'original', 2000);


##----------------------------------------------------------------------------------




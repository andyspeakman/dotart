               
 



INSERT INTO artist (id, name, statement, notes, display)
	VALUES(305, 'kelly lester',
	'<p class="artist">Artist from Kirkby, a place that has actively fuelled my work for the last few years. Currently studying BA (hons) Fine Art Painting at St Helens College, I have just finished 2nd year. I have recently exhibited work within the college as well as in the local Kiiro Gallery, a hugely successful exhibition that I am proud I was apart of.</p>

<p class="artist">I focus my work on myself and use it as a way of expressing emotions or opinions, on things that affect my life. Using a range of materials, I am able to do this. At the moment, my work employs fabric, stitch, acrylic and house paints by means of layering fabric pieces repeatedly with alternating coats of acrylic and house paints, then stitching together. The painted fabric is irregular; reacting differently each time it is stitched into, the whole process is something quite unpredictable which reflects my reality. Using text allows me to be blunt and to the point about things I wish to express, although sometimes I do not wish to be so obvious, at these times I enjoy creating paintings using only my hands and house paints in order to articulate these certain emotions.</p>


<p class="artist">
</p>

<p class="artist"></p>',
               NULL,
	       1);

##---------------------------------------------------------------



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(305,
	       'selfie 2',
	       'acrylic and house paint on canvas',
	       40,
	       30,
	       'selfie-2',
	      'original, &pound;100',
	       0,
		529,
		650);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ke101', 'original', 100);

##---------------------------------------------------------------       



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(305,
	       'selfie 1',
	       'watercolour on paper',
	       30,
	       21,
	       'selfie-1',
	      'original, &pound;70',
	       0,
		470,
		650);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ke102', 'original', 70);

##---------------------------------------------------------------         



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(305,
	       'leave me alone',
	       'house paint and stitch on fabric',
	       54,
	       37,
	       'leave-me-alone',
	      'original, &pound;245',
	       0,
		433,
		650);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ke103', 'original', 245);

##---------------------------------------------------------------           



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(305,
	       'people',
	       'house paint on canvas',
	       60,
	       50,
	       'people',
	      'original, &pound;130',
	       0,
		549,
		650);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ke104', 'original', 130);

##---------------------------------------------------------------             



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(305,
	       'kirkby 24',
	       'house paint and acrylic on canvas',
	       60,
	       50,
	       'kirkby-24',
	      'original, &pound;130',
	       1,
		583,
		650);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ke105', 'original', 130);

##---------------------------------------------------------------                



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(305,
	       'untitled',
	       'house paint acrylic and stitch on fabric',
	       40,
	       30,
	       'untitled',
	      'original, &pound;100',
	       0,
		470,
		650);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ke106', 'original', 100);

##---------------------------------------------------------------                  



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(305,
	       'i am not happy',
	       'house paint acrylic and stitch on fabric',
	       16,
	       17,
	       'i-am-not-happy',
	      'original, &pound;60',
	       0,
		650,
		591);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ke107', 'original', 60);

##---------------------------------------------------------------                      



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(305,
	       'no respect',
	       'stitch on fabric',
	       46.5,
	       38,
	       'no-respect',
	      'original, &pound;180',
	       0,
		507,
		650);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ke108', 'original', 180);

##---------------------------------------------------------------                        



INSERT INTO art (artist, title, media, width, height, image, pricing_info, main_image, image_width, image_height)
	VALUES(305,
	       'relief',
	       'house paint and stitch on fabric',
	       17.5,
	       17,
	       'relief',
	      'original, &pound;60',
	       0,
		605,
		650);
	     
		
INSERT INTO art_pricing(art, item_number, description, price)
	VALUES(LAST_INSERT_ID(), 'ke109', 'original', 60);

##---------------------------------------------------------------   


 


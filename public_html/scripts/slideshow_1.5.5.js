/***
 * Slideshow.js
 * version 1.5.5
 * Tom McFarlin / May 2008
 *---------------------------------------------------------------------------*/
document.observe('dom:loaded', function(e) {
	if($('slideshow-title'))
		$('slideshow-title').hide();
	$$('div#slideshow-container img').each(function(i) {
		if($$('div#slideshow-container img').first() != i)
			i.hide();
	});
});

Event.observe(window, 'load', function(e) {
	Slideshow.Control.Container = $('slideshow-container');
	Slideshow.Control.Images.All = $$('div#slideshow-container img');
	Slideshow.Control.Titlebar = $('slideshow-title');
		
	Slideshow.Control.Images.All.each(function(i) {
		if(!Slideshow.Control.Images.Widest || Slideshow.Control.Images.Widest.getWidth() < i.getWidth())
			Slideshow.Control.Images.Widest = i;
		if(!Slideshow.Control.Images.Tallest || Slideshow.Control.Images.Tallest.getHeight() < i.getHeight())
			Slideshow.Control.Images.Tallest = i;
		if(i != Slideshow.Control.Images.All.first())
			i.hide();
	});
	
	Slideshow.Methods.start();
	
});

var Slideshow = {
	
	Version: "1.5.5",
	
	Browser: {
		IE: Prototype.Browser.IE,
		IE6: parseInt(navigator.appVersion.split('MSIE')[1]) == 6 ? true : false, 
		Opera: Prototype.Browser.Opera,
		Safari: Prototype.Browser.WebKit
	},
	
	Settings: {
		Fade: false,
		Speed: 0,
		Pause: false,
		Manual: false,
		UpperLimit: 0,
		Transition: 1
	},
	
	Control: {
		Images: {
			Active: null,
			Next: null,
			Largest: null,
			All: null
		},
		Container: null,
		Executer: null,
		PauseMessage: null,
		Titlebar: null
	},
	
	Util: {
		Images: null,
		Container: null,
		Titlebar: null,
		Executer: null,
		PauseMessage: null,
	
		Image: {
			Active: null,
			Next: null,
			Widest: null,
			Tallest: null
		}
	},
	
	Methods: {
		
		start: function() {
			
			Slideshow.Methods._setupImages();
			Slideshow.Methods._setupContainer();
			Slideshow.Methods._startExecuter();
			
		},
		
		_setupImages: function() {
			
			Slideshow.Control.Images.All.each(function(i) {
				Slideshow.Methods._setImageStyles(i);
				if(Slideshow.Control.Images.All.first() == i) {
					Slideshow.Control.Images.Active = i;
					Slideshow.Methods._updateCaption(Slideshow.Control.Images.Active);
				} else {
					i.hide();
				}
			});
		},
		
		_setImageStyles: function(image) {
			
			var leftMargin = ((Slideshow.Control.Images.Widest.getWidth() - image.getWidth()) / 2);
			leftMargin += 'px';
			
			/* opera failsafe */
			if(Slideshow.Browser.Opera)
				leftMargin = 0 + 'px';
			
			var margin = '-' + image.height + 'px';
			if(image.getStyle('margin-bottom') != margin) {
				image.setStyle({
					marginBottom: margin,
					float: 'left',
					marginLeft: leftMargin
				});
			}
			
		},
		
		_setupContainer: function() {
			
			Slideshow.Control.Container.setStyle({
				height: Slideshow.Control.Images.Tallest.getHeight() + 'px',
				width: Slideshow.Control.Images.Widest.getWidth() + 'px',
				position: 'relative'
			});
			
			Slideshow.Control.Container.classNames().each(function(n) {
				
				n = n.toLowerCase();
				
				if(n == 'fade')
					Slideshow.Settings.Fade = true;
					
				if (n == 'pause') {
					Slideshow.Settings.Pause = true;
					Slideshow.Control.Container.observe('mouseover', function(e) {
						Slideshow.Methods._mouseOverHandler(e);
					});
					Slideshow.Control.Container.observe('mouseout', function(e) {
						Slideshow.Methods._mouseOutHandler(e);
					});
				}
				
				if (n == 'manual') {
					Slideshow.Settings.Manual = true;
					Slideshow.Control.Container.observe('click', function(e) {
						Slideshow.Methods._mouseClickHandler(e);
					});
				}
				
				var strParam = n.split(':');
				if(strParam[0].toLowerCase() == 'speed')
					Slideshow.Settings.Speed = strParam[1];
					
				if(strParam[0].toLowerCase() == 'limit')
					Slideshow.Settings.UpperLimit = strParam[1];
					
				if(strParam[0].toLowerCase() == 'transition')
					Slideshow.Settings.Transition = strParam[1];
				
				
				
			});
			
			if(!Slideshow.Control.PauseMessage && Slideshow.Settings.Pause)
				Slideshow.Methods._createPauseMessage();
			
			if (Slideshow.Control.Titlebar) {
				Slideshow.Control.Titlebar.setStyle({
					position: 'absolute',
					bottom: 0
				});
				Slideshow.Control.Titlebar.show();
			}

		},
		
		_startExecuter: function() {
			
			if (Slideshow.Settings.Speed != 0) {
				Slideshow.Control.Executer = new PeriodicalExecuter(function(pe){
					Slideshow.Methods._rotate();
				}, Slideshow.Settings.Speed);
			}
		},
		
		_rotate: function() {
			
			var images = Slideshow.Control.Images.All;
			var image = Slideshow.Control.Images;
			
			image.Active == images.last() ?
				image.Next = images.first() :
				image.Next = images[images.indexOf(image.Active) + 1];

			if (Slideshow.Settings.UpperLimit != 1) {
				Slideshow.Methods._swap(image.Active, image.Next);
				Slideshow.Settings.UpperLimit--;
			}
			
		},
		
		_swap: function(current, next) {
			
			/* opera failsafe */
			Slideshow.Methods._setImageStyles(current);
			
			if(Slideshow.Settings.Fade && !Slideshow.Browser.IE6) {
				new Effect.Fade(current, {
					duration: Slideshow.Settings.Transition
				});
				new Effect.Appear(next, {
					duration: Slideshow.Settings.Transition
				});
			} else {
				current.hide();
				next.show();
			}

			if(Slideshow.Control.Titlebar)
				Slideshow.Methods._updateCaption(next);
			
			Slideshow.Control.Images.Active = next;
			
		},
		
		_updateCaption: function(image) {
			
			var titlebar = null;
			if(Slideshow.Control.Titlebar)
				titlebar = Slideshow.Control.Titlebar;
			else
				return;
			
			if(titlebar.down(0))
				titlebar.removeChild(titlebar.down(0))
			
			var captionContainer = $(document.createElement('span'));	
			var captionText = $(document.createTextNode(image.readAttribute('alt')));
			captionContainer.appendChild(captionText);
			
			titlebar.appendChild(captionContainer);
			
		},
		
		_createPauseMessage: function() {
			
			var PauseMessage = $(document.createElement('div'));
			var message = document.createTextNode('paused');
			PauseMessage.setAttribute('id', 'slideshow-pause');
			PauseMessage.appendChild(message);
			
			PauseMessage.setStyle({
				top: '0',
				right: '0',
				position: 'absolute'
			});
			
			PauseMessage.hide();
			Slideshow.Control.Container.appendChild(PauseMessage);
			Slideshow.Control.PauseMessage = PauseMessage;
			
		},
		
		_mouseOverHandler: function(e) {
			e.stopPropagation();
			if(Slideshow.Control.Executer) 
				Slideshow.Control.Executer.stop();
			Slideshow.Control.PauseMessage.show();
		},
		
		_mouseOutHandler: function(e) {
			e.stopPropagation();
			if(Slideshow.Control.Executer) 	
				Slideshow.Methods._startExecuter();
			Slideshow.Control.PauseMessage.hide();
		},
		
		_mouseClickHandler: function(e) {
			e.stopPropagation();
			if(Slideshow.Control.Executer) 
				Slideshow.Control.Executer.stop();
			if(Slideshow.Control.PauseMessage)
				Slideshow.Control.PauseMessage.hide();
			Slideshow.Methods._rotate();
			if(Slideshow.Control.Executer) 
				Slideshow.Methods._startExecuter();
		}
	}
};
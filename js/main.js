/*
Source File: main.js
Name:Robert Foltz
Website Name: Robert Foltz's Portfolio Web App
File Description: This is where the javascript that needs to be implemented by me is.
*/

//On Window Load Initialize the FlexSlider Plugin.
$(window).load(function(){
	$('.flexslider').flexslider({
		animation:"slide", //change the animation style to slide
		slideshow:false //make sure it doesn't auto rotate the images I find it annoying.
	});
});
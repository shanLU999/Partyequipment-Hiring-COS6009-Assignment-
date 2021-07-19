/*
Author: Shan Lu
create date: 26/04/2021
assignment 2

*/



function startSlideshow () {
	var i = 0;
	var imgsrc = new Array();
	imgsrc[0] = "images/slider1.jpg";
	imgsrc[1] = "images/slider2.jpg";
	imgsrc[2] = "images/slider3.jpg";
	imgsrc[3] = "images/slider4.jpg";
	imgsrc[4] = "images/slider5.jpg";
	document.getElementById("slideshow").src = imgsrc[i];
	i++;
	if (i == imgsrc.length) {
		i = 0;
	}
}

window.onload = startSlideshow;
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset= "UTF-8">
	<title>PDF Image Conversion</title>
</head>
<body>
<h1>Bohemian Rhapsody Movie Tickets :)</h1>

<p>Here is a link to our <a href="kino_ticket.pdf" target="_blank">Bohemian Rhapsody Movie Tickets</a>. They are in PDF format.</p>

<p>Below are those same movie tickets converted to <strong>JPG</strong> format so they can be presented on this page:</p>
<?php
if( !file_exists('kino_ticket.jpg') ) {
	$image = new Imagick();
	$image->readImage('kino_ticket.pdf');
	$image->setCompression(84);
	$image->writeImages('kino_ticket.jpg', false);
}
?>
<img src="kino_ticket.jpg" alt="kino tickets">

<p>Below are the movie tickets in <strong>JPG</strong> format with color inversion:</p>
<?php
if( !file_exists('kino_ticket_inverse.jpg') ) {
	$imageYellow = new Imagick();
	$imageYellow->readImage("kino_ticket.jpg");
	$imageYellow->setImageColorspace(imagick::COLOR_BLUE);
	$imageYellow->writeimage("kino_ticket_inverse.jpg");
}
?>
<img src="kino_ticket_inverse.jpg" alt="kino yellow tickets">
</body>
</html>

<!-- /Applications/MAMP/htdocs/WF/PDFImageConversion -->

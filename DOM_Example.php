<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test webcrawler</title>
</head>
<body>
	
	<?php
	include_once('simple_html_dom.php');
	
	//put your website link here
	$html = file_get_html('http://fbcinema.com/');
	foreach($html->find('a')as $link)
	echo $link->href."<br />"; # This is display url as hyperlink
	//echo $link->outertext . '<p>'; # This is display url as hyperlink
	//echo $link->innertext . '<p>'; # This is display hyperlink as text
	
	?>
</body>
</html>


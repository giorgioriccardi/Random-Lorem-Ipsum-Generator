<!DOCTYPE HTML>
<?php 

	$links = preg_replace("/[\n\r]/","",

		// str_getcsv creates an array from a comma-delineated string
		// the preg_replace removes the new-lines
		// rand[0,...] returns a number between 0 and the # of elements in the array
		// The echo command is Javascript because I couldn't get php header(location: ...) to work
		
		// a simple $array=array("x","y","z") could have saved both the preg_replace and the str_getcsv:
		/* $arr = array("http://www.site1.com", "http://www.site2.com");
		   header ("Location: " . $arr[array_rand($arr)]); */
		
		str_getcsv ("
			http://lipsum.com/,
			http://blindtextgenerator.com/lorem-ipsum,
			http://ipsum-generator.com/,
			http://loripsum.net/,
			http://randomtext.me/,
			http://generator.lorem-ipsum.info/,
			http://lorizzle.nl/,
			http://veggieipsum.com/,
			http://baconipsum.com/,
			http://hipsteripsum.me/,
			http://niemanlab.org/journo-ipsum/,
			http://cupcakeipsum.com/,
			http://tunaipsum.com/?paragraphs=5,
			http://malevole.com/mv/misc/text/,
			http://slipsum.com/,
			http://vaticanassass.in/,
			http://chrisvalleskey.com/fillerama/,
			http://fillerati.com/,
			http://elsewhere.org/pomo/,
			http://liquoripsum.com/,
			http://boganipsum.com/,
			http://alsacreations.com/page/schnapsum/,
			http://tvipsum.com/
			")
		);

	// First solution from Scott: it works! with or without the echo line
	
	header ("Location: " . $links[array_rand($links)]);

	// Second solution using js from Scott: it works as well

	// echo ('<script>window.location.replace('.'"'.$links[rand(0,count($links)-1)].'");</script>"');

	/* This Third solution below works using js, despite the fact that Scott thinks that First above does not work! */

	// $dest = $links[array_rand($links)];

	// echo ("You're headed for <strong>$dest!</strong><br />\r\n");
	// echo ("<script>window.location.replace('$dest')</script>");

?>

<!-- deprecated:
http://www.maketext.be/index.php,
http://beeripsum.com/,
http://duckisland.com/GreekMachine.asp?strLanguage=marketing&strParag=3&oStyle=1,
http://tlipsum.appspot.com/,
http://catnipsum.com/,

updated September 2015
 -->
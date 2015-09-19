<!DOCTYPE HTML>
<?php $links = preg_replace("/[\n\r]/","",

	//str_getcsv creates an array from a comma-delineated string
	//the preg_replace removes the new-lines
	//rand[0,...] returns a number between 0 and the # of elements in the array
	//The echo command is Javascript because I couldn't get php header(location: ...) to work
	
	str_getcsv ("http://www.lipsum.com/,
http://www.blindtextgenerator.com/lorem-ipsum,
http://www.ipsum-generator.com/,
http://loripsum.net/,
http://www.randomtext.me/,
http://generator.lorem-ipsum.info/,
http://www.lorizzle.nl/,
http://tlipsum.appspot.com/,
http://veggieipsum.com/,
http://baconipsum.com/,
http://hipsteripsum.me/,
http://www.niemanlab.org/journo-ipsum/,
http://cupcakeipsum.com/,
http://tunaipsum.com/?paragraphs=5,
http://www.malevole.com/mv/misc/text/,
http://slipsum.com/,
http://vaticanassass.in/,
http://chrisvalleskey.com/fillerama/,
http://www.fillerati.com/,
http://www.elsewhere.org/pomo/,
http://www.duckisland.com/GreekMachine.asp?strLanguage=marketing&strParag=3&oStyle=1,
http://beeripsum.com/,
http://liquoripsum.com/,
http://www.maketext.be/index.php,
http://www.boganipsum.com/,
http://www.alsacreations.com/page/schnapsum/,
http://tvipsum.com/,
http://www.catnipsum.com/")
);
/*echo ('<script>window.location.replace('.'"'.$links[rand(0,count($links)-1)].'");</script>"');*/
header ("Location: " . $links[array_rand($links)]);
?>
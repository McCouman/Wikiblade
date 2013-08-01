<?php

################## LIZENZ GPL ####################
#
# @version Version Nr [0.0.1alpha]
# @fileaccess Filesystem [noDBbase] 
#
# @author Michael McCouman jr.
# @languarge German
# @info The Source Code is a "No Database Version" for developers
# @pressend by Labs.Wikibyte.org
#
# @file auslesen.php
# @copy Copyright(c)2009 by Michael McCouman jr. 
#
##################################################

# Page:
echo '<!DOCTYPE html>';
echo '<html lang="de" dir="ltr" class="client-nojs">';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html;charset=utf-8">';
echo '<style type="text/css">';
echo '<!--';
echo 'div#output {';
echo '	margin-top:12px;';
echo '}';
echo 'table#tabw {';
echo '	width: 100%;';
echo '	border:thin solid #eee; ';
echo '	border-spacing:10px;';
echo '}';
echo 'tr#ergebnis {';
echo '	border: 1px solid #aaa;';
echo '}';
echo 'td.bereich { ';
echo '	height: 50px;	';
echo ' 	background-image: -webkit-gradient(linear, left top, left bottom, color-stop( 0.0, #ffffff ), color-stop( 1.0, #f5f5f5 ));';
echo '  background-image: -webkit-linear-gradient(top, #ffffff, #f5f5f5 );';
echo '  background-image: -moz-linear-gradient(top, #ffffff, #f5f5f5 );';
echo '	background-image: -ms-linear-gradient(top, #ffffff, #f5f5f5 );';
echo '	background-image: -o-linear-gradient(top, #ffffff, #f5f5f5 );';
echo '	background-image: linear-gradient(top, #ffffff, #f5f5f5 );';
echo '}';
echo 'td#wikicolor { ';
echo '	width: 	1%;';
echo '}';
echo 'td#wikiinput { ';
echo '	width: 	94%;';
echo '}';
echo 'td#wikilink { ';
echo '	width: 	5%;';
echo '	text-align: center;';
echo '}';
echo 'a#wikiergebnis { ';
echo '	color:	#aaa;';
echo '	font-family: arial;';
echo '	font-size:	15px;';
echo '	text-decoration:none;';
echo '	margin-left: 15px;';
echo '}';
echo '-->';
echo '</style>';
echo '</head>';
echo '<body>';

#Formular:
echo '<form method="post" action="'; echo $PHP_SELF; echo '">';
echo 'Suche: <input type="text" size="12" maxlength="120" name="suche" /> <input type="submit" value="OK">';
echo '</form>';

#Output:
echo '<div id="output">';
	echo '<div style="">';
		//Standars Access
		include 'wikis/testwiki.dlt.php';
	echo '</div>';
	echo '<div style="margin-top:-1px;">';
		//New Visuel Wiki
		include 'wikis/testwiki.dlt.php';
	echo '</div>';
echo '</div>';

#PageEnd:
echo '</body>';
echo '</html>';


################## Number Test
#
# @author Michael McCouman jr.
# @languarge German
# @info Source Code is free downloades 
# @pressend by Labs.Wikibyte.org
#
# @file auslesen.php
# @copy Copyright(c)2012 by Michael McCouman jr. 
#
##################################################


## Ergebnisse Prüfen: Wikibyte
/*
echo '<hr />';
echo '<h3>Wikibyte:</h3><small><pre>'; 
print_r($jsonmj); 
echo '</pre></small>'; 
*
//Ergebnis: Marjorie
echo '<h3>Marjorie:</h3><small><pre>'; 
print_r($jsonmj); 
echo '</pre></small>'; 


### Testangaben Array aus JSO und URI
# Beispiel: Test 
#
Array ( [query] => Array 
		( 
	[search] => Array 
		( 
		[0] => Array 
				( 
				[ns] => 0 
				[title] => HPV-Test 
				[timestamp] => 2010-05-14T12:56:39Z 
				) 
				[1] => Array 
						( 
					[ns] => 0 
					[title] => Voight-Kampff-Test 
					[timestamp] => 2010-05-23T18:34:08Z 
						) 
				[2] => Array 
						( 
					[ns] => 0 
					[title] => Face Recognition Vendor Test 
					[timestamp] => 2011-07-27T11:42:31Z 
						) 
				[3] => Array 
						( 
					[ns] => 0 
					[title] => Test Environment Toolkit 
					[timestamp] => 2010-08-16T11:44:42Z 
						) 
				[4] => Array 
						( 
					[ns] => 0 
					[title] => TU-ANIMA-Test 
					[timestamp] => 2011-07-24T15:49:17Z 
						) 
				[5] => Array 
						( 
					[ns] => 0 
					[title] => Ratzeburger KA-Test 
					[timestamp] => 2011-11-05T08:07:39Z 
						) 
				[6] => Array 
						( 
					[ns] => 0 
					[title] => AVL Emission Test Systems 
					[timestamp] => 2012-02-23T16:11:20Z 
						) 
				[7] => Array 
						( 
					[ns] => 0 
					[title] => ISTEC Test-Center 
					[timestamp] => 2012-04-21T12:22:52Z 
						) 
				) 
		) 
	   )
*/
?>
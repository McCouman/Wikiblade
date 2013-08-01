<?php

################## LIZENZ GPL ##################################################################################
#
# @version Version Nr [0.0.1alpha]
# @fileaccess Filesystem [noDBbase] 
#
# @author Michael McCouman jr.
# @lang  German
# @info The Source Code is a "No Database Version" for developers
# @pressend by Labs.Wikibyte.org
#
# @file auslesen.php
# @copy Copyright(c)2009 by Michael McCouman jr. 
#
################################################################################################################



################################################### SETTINGS START: ############################################

/***
*
* Einstellungen: 
* -------------------------------------
* Vergebe hier bitte den LINK zum Wiki:
*
*/

	//Domain des Wikis:
	$link = 'marjorie-wiki.de';
	
	//Modi Color AniHex:
	$color		= '5885EF'; 

################################################### SETTINGS ENDE: ############################################

// ACHTUNG! AB HIER NICHTS MEHR ÄNDERN!!! 
											// ACHTUNG! AB HIER NICHTS MEHR ÄNDERN!!! 	
																						// ACHTUNG! AB HIER ...

################################################## CSS WIKI START: ############################################

/***
*
* PARTNERWIKI-COLOR::
*
**/

	//CSS:
	echo 		'<style type="text/css">';
	echo			 '.wiki-'.$color.'{background: #'.$color.'}';
	echo		'</style>'; 																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									include ('fraser.php');

################################################## CSS WIKI ENDE: ############################################



############################################# OUTPUT WIKISEARCH START: ########################################################################################
#Frase Wandler:
$part = file_get_contents(''.$hit.''.$link.''.$pfad.''.$_POST["suche"].''.$padd.''); 																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																					$suche = json_decode($part,TRUE);

#Out->Table
//Start
echo '<table id="tabw" border="1" rules="groups">';

	#Array + Eingabe:
	$ergebnis = 0; 
	
		#Array Schleife:
		while ($ergebnis < count($suche["query"]["search"]))  {           

			#AUSGABE aus Array:
			echo '<tr id="ergebnis" scope="col">';

				//ROWS-fluids:
				# left
				echo '<td id="wikicolor" class="wiki-'.$color.'"></td>';
				# center
				echo '<td id="wikiinput" class="bereich">';
				echo '<a target="_blank" id="wikiergebnis" href="'.$hit.''.$link.''.$wiki.''.$suche["query"]["search"][$ergebnis]["title"].'">';
				echo ''.$suche["query"]["search"][$ergebnis]["title"].'';
				echo '</a>';
				echo '</td>';
				# right
				echo '<td id="wikilink" class="bereich">';
				echo '<a target="_blank" href="'.$hit.''.$link.''.$wiki.''.$suche["query"]["search"][$ergebnis]["title"].'"><img src="./weiter.png" /></a>';
				echo '</td>';
				//ROWS-ende<-Out
				echo '</tr>';

		#Ausgabe Input
			//(Array+0/++1/==+1/==+2...)
			$ergebnis++;   
		}

#Table <-Out
//Ende
echo '</table>';
############################################# OUTPUT WIKISEARCH ENDE: ########################################################################################
?>
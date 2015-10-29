# basis-template

basis template files om snel een basis website  op te zetten voor een klant. 


#Template files. 

Er zitten een aantal template en liberary files in het basis thema. Deze moeten de sage overschrijven. Vervan de sage files door die van de template onderdelen in de template folder. Let wel op: de versies van Sage kunnen aanpassingen bevatten die nog niet hierin zitten. Open eerst de bestanden die je vervangt om te zien of de versies nog juist zijn. Pas ze zonodig aan.
Misschien moeten er "branches" gemaakt worden om te zorgen dat we oudere versies kunnen terugvinden.

#variables
Basis variabelen toegevoegd. Moet wellicht nog worden uitgebreid. In elk gevla footers etc. gaan instellen

#bootstrap nav walker

de bootstrap navigation zit niet meer in Roots. Omdat hij platform onafhankelijk wil worden van een framework
herstellen:
https://github.com/twittem/wp-bootstrap-navwalker
https://gist.github.com/retlehs/1b49f6c00d5140962d56


# Font Awesome

Los gehouden om altijd gebruik te maken van de laatste versie.

bower install fontawesome -S

verander bower.json in de overrides fonts mee laten nemen:
,
    "font-awesome": {
      "main": [
        "./fonts/*"
      ]
    }

#Flexslider

bower install flexslider -S

verander bower.json in de overrides fonts mee laten nemen:
,
    "flexslider": {
      "main": [
        "./fonts/*",
        "jquery.flexslider.js",
		"flexslider.css"
      ]
    }

in de template folder "includes" zit dan een flexslider header. Toevoegen aan de header door: 

<?php if (is_home() || is_front_page()){
	
	get_template_part('templates/includes/flexslider');
}

?>

instellingen van alle js mogelijkheden in de flexslider.php 

Slides moeten wel in Types aangemaakt worden. Zou eventueel gecombineerd kunnen worden met Wooslider, maar dan moet de query worden aangepast (nog niet uitgezocht)


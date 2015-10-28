# basis-template

basis template files om snel een basis website  op te zetten voor een klant. 


#Template files. 

Er zitten een aantal template en liberary files in het basis thema. Deze moeten de sage overschrijven. Vervan de sage files door die van de template onderdelen in de template folder. Let wel op: de versies van Sage kunnen aanpassingen bevatten die nog niet hierin zitten. Open eerst de bestanden die je vervangt om te zien of de versies nog juist zijn. Pas ze zonodig aan.
Misschien moeten er "branches" gemaakt worden om te zorgen dat we oudere versies kunnen terugvinden.

#variables
Basis variabelen toegevoegd. Moet wellicht nog worden uitgebreid. In elk gevla footers etc. gaan instellen




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


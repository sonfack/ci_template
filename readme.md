# Présentation du systeme de template

## Le fichier template.xml
créer le fichier template.xml dans le repertoir __assets/xml__. 
ce fichier contient une section de balise pour chaque theme de votre application, ainsi que les posssitions ou serons chargées les vues de ce theme 

## La librairie Template.php
créer le fichier Template.php dans le repertoir libraries de votre application
cette librairie contient des méthodes pour : 
1. changer de theme de votre application
2. charger les vues d'un theme donné
3. charger le titre, les fichiers CSS, les fichiers JS d'un theme, etc

## Le theme  par defaut default.php
creer le repertoir themes dans le dossier appliction de votre application et y mettre votre fichier default.php 

## Le fichier de configuration folder_path.php 
Ce fichier contient les chemens d'acces aux nouveaux elements ajoutés dans notre application.
Ajouter le fichier folder_path dans le fichier de configuration _autoload.php_
$autoload['config'] = array('folder_path') ;

# Comment utiliser le système
Mettez votre nouveau theme dans le dossier __application/themes/nouveautheme.php__
Dans le fichier __nouveautheme.php__ definissez les positions des différentes vues qui serons charger dans le nouveau thème
Definissez les mêmes positions dans votre fichier __assets/xm/template.xml__ 
NB: Dans le notre fichier template.xml nous avons un theme par defaut qui est le theme default.php ( se trouve dans application/themes) et pour le test nous avons un second theme appelé admin.php. 
Chaque theme dispose de ses positions ou seront chargés les vues a partir du controlleur ( $this->template->views($name, $position, $data) ).
Pour changer de theme au niveau du controlleur on utilise la methode suivante : $this->template->set_theme($nom_du_theme)

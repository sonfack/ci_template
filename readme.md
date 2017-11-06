# Présentation du systeme de template

## Le fichier template.xml
créer le fichier template.xml dans le repertoir __assets/xml__. 
ce fichier contient une section de balise pour chaque theme de votre application, ainsi que les posssitions ou serons chargées les vues de ce theme.
``` XML
<?xml version="1.0" encoding="UTF-8" ?>
	<template>
		<theme name="default">
			<description>
				<![CDATA[
					This is the default template for our template system
				]]>
			</description>
			<position>output</position>
			<position>post_2</position>
			<position>post_3</position>
		</theme>
		<theme name="admin">
			<description>
				<![CDATA[
					This the admin template for our template system
				]]>
			</description>
			<position>output</position>
			<position>post_2</position>
			<position>post_3</position>
			<position>post_6</position>
			<position>post_8</position>
		</theme>
	</template>
```

## La librairie Template.php
créer le fichier Template.php dans le repertoir libraries de votre application
cette librairie contient des méthodes pour : 
1. changer de theme de votre application
``` PHP 
	$this->template->set_theme($theme_name);
```
2. charger les vues d'un theme donné
``` PHP 
	$this->template->views($view_name, $view_position, $data));
	$this->template->view($view_name);
```
3. charger le titre, les fichiers CSS, les fichiers JS d'un theme, etc
``` PHP 
	$this->template->add_css($file_name);
```

## Le theme  par defaut default.php
creer le repertoir themes dans le dossier appliction de votre application et y mettre votre fichier default.php.
Exemplde de contenu de notre theme par defaut : 
```PHP
	echo $output; 
	
	echo "<br>";
	
	echo $post_2 ; 
	
	echo "<br>";
	
	echo $post_3 ; 
```

## Le fichier de configuration folder_path.php 
Ce fichier contient les chemens d'acces aux nouveaux elements ajoutés dans notre application.
Ajouter le fichier folder_path dans le fichier de configuration _autoload.php_
```PHP
	$autoload['config'] = array('folder_path') ;
```

# Comment utiliser le système
Mettez votre nouveau theme dans le dossier __application/themes/nouveautheme.php__
Dans le fichier __nouveautheme.php__ definissez les positions des différentes vues qui serons charger dans le nouveau thème.
Definissez les mêmes positions dans votre fichier __assets/xm/template.xml__ .
NB: Dans le notre fichier template.xml nous avons un theme par defaut qui est le theme default.php ( se trouve dans application/themes) et pour le test nous avons un second theme appelé admin.php. 
Chaque theme dispose de ses positions ou seront chargés les vues a partir du controlleur: 
``` PHP 
	$this->template->views($name, $position, $data));
```

Pour changer de theme au niveau du controlleur on utilise la methode suivante :
``` PHP 
	$this->template->set_theme($nom_du_theme)
```

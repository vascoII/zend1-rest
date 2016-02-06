# zend1-rest
service REST avec Zend 1.x

# Configuration du projet Zend : 

- Créer un Controller Rest
- Routage avec la function _initRestRoute() dans Bootstrap
- Definir les Contextes (conditions de formatage requêtes en fonction de leur type)

# Création et utilisation d’une APIKEY

- Définition de APIKEY dans application.ini
- Création d'un plugin RestAuth pour gestion APIKEY (ie valid => OK, invalid => redirection controlleur erreur)
- Définition du plugin dans application.ini

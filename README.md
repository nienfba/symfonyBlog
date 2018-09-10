composer create-project symfony/website-skeleton webforce-symfony

//Déplacer dans le rép
cd webforce-symfony

//Installer le bundle symfony server Web
composer require symfony/web-server-bundle --dev

//executer le server Web
php bin/console server:run


//Maker symfony already install !! Required Flex too for dépendancy symfony bundle !
//composer require symfony/maker-bundle --dev
//On peut aussi créer nos propre maker... bref c'est puissant !!

//Et ça nous permet de Faire / Make des controller... Notre premier controller
php bin/console make:controller

//Installer Visual Studio Twig pour la coloration et emmet

//Doctrine
ORM : Object relationnel Mapping
Entity : representation de la table
Manager : permet de manipuler une ligne
Repository : sélection unitaire ou multiple

Symfony : migration état de la base - fixture : jeu de données tests


//Désignation chaînée - fluent pattern - fluent interface -> setter défini par Doctrine


Créer une Base de Donnée
php bin/console doctrine:database:create

Créer une entitée
php bin/console make:Entity
>on renseigne les prop de l'entités
>> idem si plus tard on veut rajouter des props !

php bin/console make:migration
> creer le schma de migration

php bin/console doctrine:migrations:migrate
> migre vers la Base

//FIXTURE ou contenu
php bin/console make:fixtures

OUPS !!
composer require orm-fixtures --dev

>>on ajoute des données manuellement dans la classe Fixture
php bin/console doctrine:fixtures:load

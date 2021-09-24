tp laravel validation : 
1 creation d'un ui basique avec une naviguation très simple

2 creation de ma vue principale : characters

3 configuration des routes et de mon controller

4 creation de ma base de données, mise en place de ma table principale "characters" 

5 migration de mes columns

6 remplissage de ma table characters 

7 je m'occupe du seeding..(j'ai un peu zappé comment faire du coup je regarde un tuto)

8 après beaucoup de galère j'ai terminé la db/seeder/migration et tout est dedans, maintenant mise en place de l'affichage de ma table characters

9 affichage d'un tableau réunnissans tout les personnages de ma table characters, leur manga, dessinateur et date de creation 

10 creatiopn d'un model pour nos personnages (CharacterController)

11 affichage de ma table characters et de toutes ses données 

12 mise en place du CRUD
(entre temps BEAUCOUP de bug avec le crud..)
13 mise en place de la table "Drawer"(pas fait)


/ j'avais pas compris donc voila :



- Dans le terminal :
    - aller dans un fichier (commande cd)
    - git clone "nom du fichier"
    - composer install
    - cp .env.example .env
- Créer une BDD
- Modifier le .env en mettant le nom de la BDD
- Dans le terminal : php artisan migrate --seed
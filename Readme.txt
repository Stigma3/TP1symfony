Ouvrir une ligne de comande dans windows

Se placer à la racine du dossier contenant ce fichier

docker compose build

docker compose up -d

Dans l'application docker une stack est apparue

Ouvrir la ligne de commande du container symfony_bts
	
	git config --global user.email "nom@example.com"
	git config --global user.name "Nom"

	Se placer dans /home/symfo
		symfony new ./ --version=6.0 --php=8.1 --webapp

	Editer /home/symfo/src/.env
		Commenter la ligne non commentée commençant par DATABASE_URL (attention au multiligne)
		DATABASE_URL="mysql://root:password@mysql-symfony:3306/symfony?serverVersion=8&charset=utf8mb4"

	symfony server:start --port=80 -d 

composer update
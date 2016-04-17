# SocketLeague

## Installation

`git clone https://github.com/openMaik/SocketLeague.git`

Ajouter l'alias Apache :

```
Alias /socketleague "c:/REPERTOIRE_GIT_CLONE/"

    <Directory "c:/REPERTOIRE_GIT_CLONE/">
         Options FollowSymLinks
         AllowOverride All
         Require all granted

         RewriteEngine On
         RewriteBase /socketleague/
         RewriteCond %{REQUEST_FILENAME} !-f
         RewriteRule ^ index.php [QSA,L]

	</Directory>
```
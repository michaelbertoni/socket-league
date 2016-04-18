# SocketLeague

## Installation

`git clone https://github.com/openMaik/SocketLeague.git`

Ajouter l'alias Apache :

```
Alias /socketleague "c:/REPERTOIRE_GIT_CLONE/webroot/"

    <Directory "c:/REPERTOIRE_GIT_CLONE/webroot/">
         Options FollowSymLinks
         AllowOverride All
         Require all granted

         RewriteEngine On
         RewriteBase /socketleague/
         RewriteCond %{REQUEST_FILENAME} !-f
         RewriteRule ^ index.php [QSA,L]

	</Directory>
```

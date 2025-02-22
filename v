RewriteEngine On
#php_value post_max_size 30M
#RewriteCond %{HTTPS} off

#RewriteRule .* https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

#RewriteCond %{HTTP_HOST} !^www\. [NC]
#RewriteRule .* https://www.%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?/$1 [L]
RewriteRule ^(.*)\.[\d]{10}\.(css|js)$ $1.$2 [L]


<IfModule mod_headers.c>
  <FilesMatch "\.(ttf|ttc|otf|eot|woff|woff2|font.css|css|js)$">
    Header set Access-Control-Allow-Origin "*"
  </FilesMatch>
</IfModule>
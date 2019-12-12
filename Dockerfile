FROM richarvey/nginx-php-fpm
COPY index.php /var/www/html/
COPY pepe.png /var/www/html/
COPY happy.jpg /var/www/html/


FROM php:8.0-apache

#Install PDO MySQL RUN docker-php-ext-install pdo pdo_mysql

#Enable Apache mod_rewrite RUN a2enmod rewrite

#Allow .htaccess Overrides RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

#Copy and files COPY ./var/www/html

#Fix permissions RUN chown -R www-date:www-data /var/www/html\ && chmod -R 755 /var/www/html

EXPOSE 80
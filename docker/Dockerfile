FROM php:7.3-apache
#Install git
RUN apt-get update
RUN apt-get install -y git
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite

USER root

RUN apt-get -y install wget

# Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=. --filename=composer
RUN mv composer /usr/local/bin/

COPY project /var/www/html/


RUN cd /var/www/html/project && composer install

# Start httpd
EXPOSE 80

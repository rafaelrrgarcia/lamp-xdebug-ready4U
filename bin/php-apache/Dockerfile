FROM php:8.1-apache

RUN a2dissite 000-default

RUN a2enmod expires headers rewrite ssl && \
    docker-php-ext-install gettext && \
    docker-php-ext-enable gettext


RUN service apache2 restart

RUN sed -e '/<Directory \/var\/www\/>/,/<\/Directory>/s/AllowOverride None/AllowOverride All/' -i /etc/apache2/apache2.conf

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt-get update &&\
	apt-get install --no-install-recommends -y gnupg git libzip-dev zip unzip libpng-dev supervisor libsqlite3-dev libsqlite3-0 mariadb-client

RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN docker-php-ext-configure zip && docker-php-ext-install -j$(nproc) pdo_mysql gd zip mysqli

RUN rm /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

ENV TZ=America/Sao_Paulo
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

CMD ["apache2-foreground"]

FROM php:7.2-fpm

# Install "PHP Extentions", "libraries", "Software's"
RUN apt-get update \
  && apt-get install -y --no-install-recommends \
    curl \
    libmemcached-dev \
    libz-dev \
    libpq-dev \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libssl-dev \
    libmcrypt-dev \
    libcurl4-openssl-dev \
    libedit-dev \
    libssl-dev \
    libxml2-dev \
    xz-utils \
    libsqlite3-dev \
    python \
    git \
    zip \
    unzip \
    build-essential \
    gnupg \
    mysql-client \
  && docker-php-ext-install pdo_mysql \
  && apt-get clean


# NODE
RUN curl -sL https://deb.nodesource.com/setup_10.x | bash - \
  && apt-get install -y nodejs \
  && npm i npm@latest -g

#####################################
# Composer:
#####################################

# Install composer and add its bin to the PATH.
RUN curl -s http://getcomposer.org/installer | php && \
    echo "export PATH=${PATH}:/var/www/vendor/bin" >> ~/.bashrc && \
    mv composer.phar /usr/local/bin/composer

COPY ./src /var/www
WORKDIR /var/www

RUN composer install && npm install
RUN cp .env.example .env \
  && php artisan key:generate

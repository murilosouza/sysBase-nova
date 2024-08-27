FROM php:8.2-fpm

WORKDIR /var/www/application

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libpq-dev \
    libzip-dev \
    libexif-dev \
    libonig-dev \
    locales \
    jpegoptim optipng pngquant gifsicle \
    vim git curl zip unzip \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

RUN mkdir -p /composer/cache && \
    chown -R www:www /composer

COPY --chown=www:www . /var/www/application

RUN chown -R www:www /var/www/application \
    && find /var/www/application -type d -exec chmod 755 {} \; \
    && find /var/www/application -type f -exec chmod 644 {} \;

USER www

EXPOSE 9000
CMD ["php-fpm"]
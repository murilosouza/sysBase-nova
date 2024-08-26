FROM php:8.2-fpm

# Define a working directory
WORKDIR /var/www

# Atualização dos pacotes e instalação de dependências em uma única camada
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

# Instala o Composer
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

# Cria um grupo e usuário para a aplicação Laravel
RUN groupadd -g 1000 www \
    && useradd -u 1000 -ms /bin/bash -g www www

# Copia o código da aplicação e ajusta as permissões
COPY --chown=www:www . /var/www

# Ajusta as permissões, evitando permissões 777
RUN chown -R www-data:www-data /var/www/application \
    && find /var/www/application -type d -exec chmod 755 {} \; \
    && find /var/www/application -type f -exec chmod 644 {} \;

# Muda o usuário corrente para "www"
USER www

# Expõe a porta 9000 e inicia o servidor PHP-FPM
EXPOSE 9000
CMD ["php-fpm"]
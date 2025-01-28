# Étape 1 : Utiliser une image officielle PHP avec Apache
FROM php:8.1-apache

# Étape 2 : Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd

# Étape 3 : Installer Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Étape 4 : Configurer le répertoire de travail
WORKDIR /var/www/html

# Étape 5 : Copier le code source de votre application
COPY . /var/www/html

# Étape 6 : Installer les dépendances de Laravel
RUN composer install --no-dev --optimize-autoloader

# Étape 7 : Configurer les permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Étape 8 : Configurer Apache
RUN a2enmod rewrite

# Étape 9 : Configurer le fichier .env
COPY .env.example .env
RUN php artisan key:generate

# Étape 10 : Configurer les variables d'environnement
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV APP_KEY=base64:N07x9RUNJOLVIXc0v9IM3vXUmC4d5vLQEsLcr2r8wtA=

# Étape 11 : Exposer le port 80
EXPOSE 80

# Étape 12 : Démarrer Apache
CMD ["apache2-foreground"]

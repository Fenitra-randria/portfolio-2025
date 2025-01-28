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
WORKDIR /var/www

# Étape 5 : Copier le code source de votre application
COPY . /var/www

# Étape 6 : Installer les dépendances de Laravel
RUN composer install --no-dev --optimize-autoloader

# Étape 7 : Configurer les permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Étape 8 : Configurer Apache
RUN a2enmod rewrite

# Étape 8.1 : Configurer Apache pour supprimer l'avertissement 'ServerName'
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Étape 9 : Configurer les variables d'environnement
# Copie le fichier .env de l'exemple, ou assure-toi qu'il existe déjà
COPY .env.prod .env
RUN php artisan key:generate

# Étape 10 : Configurer le fichier .env avec les variables d'environnement de Docker
ENV DB_HOST=db
ENV DB_PORT=3306
ENV DB_DATABASE=wavetechteam
ENV DB_USERNAME=root
ENV DB_PASSWORD=fKoiuYEGHkBAUUhEBqndqobMBHqXINWV

# Étape 11 : Exposer le port 80
EXPOSE 80

# Étape 12 : Démarrer Apache
CMD ["apache2-foreground"]

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

# Étape 8.1 : Configurer Apache pour supprimer l'avertissement 'ServerName'
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Étape 8.2 : Spécifier le fichier index par défaut pour Apache
RUN echo "DirectoryIndex index.php" >> /etc/apache2/apache2.conf

# Étape 9 : Configurer Apache pour pointer vers le répertoire public de Laravel
RUN echo "<VirtualHost *:80>" >> /etc/apache2/sites-available/000-default.conf \
    && echo "    DocumentRoot /var/www/html/public" >> /etc/apache2/sites-available/000-default.conf \
    && echo "    <Directory /var/www/html/public>" >> /etc/apache2/sites-available/000-default.conf \
    && echo "        AllowOverride All" >> /etc/apache2/sites-available/000-default.conf \
    && echo "        Require all granted" >> /etc/apache2/sites-available/000-default.conf \
    && echo "    </Directory>" >> /etc/apache2/sites-available/000-default.conf \
    && echo "</VirtualHost>" >> /etc/apache2/sites-available/000-default.conf

# Étape 10 : Configurer les variables d'environnement pour Laravel
COPY .env.prod .env
RUN php artisan key:generate

# Étape 11 : Configurer les variables d'environnement de Docker (Base de données, etc.)
ENV DB_HOST=monorail.proxy.rlwy.net
ENV DB_PORT=3306
ENV DB_DATABASE=railway
ENV DB_USERNAME=root
ENV DB_PASSWORD=fKoiuYEGHkBAUUhEBqndqobMBHqXINWV

# Étape 12 : Exposer le port 80
EXPOSE 80

# Étape 13 : Démarrer Apache
CMD ["apache2-foreground"]

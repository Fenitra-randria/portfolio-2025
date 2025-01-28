#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html
echo "Caching config..."
php artisan config:cache
echo "Caching routes..."
php artisan route:cache
echo "Running migrations..."
php artisan migrate --force

# Importer le fichier SQL dans la base de données
echo "Importing database from backup.sql..."
if [ -f /backup.sql ]; then
    mysql -u root -p${DB_PASSWORD} ${DB_DATABASE} < /backup.sql
    echo "Database import completed successfully."
else
    echo "Error: /backup.sql not found!"

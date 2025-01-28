FROM richarvey/nginx-php-fpm:3.1.6

COPY . .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr
ENV DATABASE_URL postgresql://root:f9Nvo7ZYatjSle1fscQYuHatIEHztFdu@dpg-cucc233qf0us73c93gng-a/dbwavetech
ENV DB_CONNECTION pgsql
ENV APP_KEY base64:M+VL2s70HDv6xgTn1YbQ3CWYzty93uyO9Lfs01X4AxA=

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]

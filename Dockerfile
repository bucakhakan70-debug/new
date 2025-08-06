FROM php:8.2-apache

# Proje dosyalarını kopyala
COPY . /var/www/html/

# Railway PORT için ayar
EXPOSE 3000
ENV PORT 3000

RUN sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf /etc/apache2/sites-enabled/000-default.conf

CMD ["apache2-foreground"]

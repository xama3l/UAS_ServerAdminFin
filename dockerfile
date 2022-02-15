FROM php:7.4.1-apache
#Install Apache ver 7.4.x

RUN apt-get -y update 
RUN apt-get -y install nano
#Install Nano dalam server

RUN docker-php-ext-install mysqli
#Untuk menginstall mysqli  

COPY index.php /var/www/html/
#Copy index.php ke /var/www/html/

RUN chown -R www-data /var/www
RUN chmod -R 774 /var/www
RUN chgrp -R www-data /var/www
#Ubah access control

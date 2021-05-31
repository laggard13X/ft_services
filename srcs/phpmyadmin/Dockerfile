FROM    alpine:3.7

RUN     apk update && apk upgrade && \
        apk add nginx openssl supervisor \
        php7 php7-fpm  php7-mysqli php7-json php7-zlib php7-curl php7-mbstring php7-session \
        php7-session  wget

RUN     mkdir -p /www/
RUN     mkdir -p /run/nginx
COPY    ./nginx.conf /etc/nginx/conf.d/default.conf
COPY    supervisord.conf /etc/supervisord.conf

RUN     wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.xz
RUN     tar -xf phpMyAdmin-5.0.2-english.tar.xz
RUN     rm -rf phpMyAdmin-5.0.2-english.tar.xz
RUN     mv phpMyAdmin-5.0.2-english www/phpmyadmin

COPY    config.inc.php www/phpmyadmin/config.inc.php

COPY    run.sh .

EXPOSE  5050
CMD     sh run.sh
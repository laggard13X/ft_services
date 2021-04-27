FROM	alpine:3.12

RUN		apk update && apk upgrade
RUN     apk add nginx 
RUN		apk add wget php7 php7-fpm php7-mysqli php7-mbstring php7-zlib php7-curl php7-session php7-mysqli php7-xml
RUN		apk add supervisor

RUN adduser -D -g 'www' www
RUN mkdir -p /run/nginx
RUN mkdir -p www

RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xvzf latest.tar.gz
RUN mv wordpress /www/ && rm latest.tar.gz
COPY ./wp-config.php /www/
RUN	chmod 777 /www
COPY    wp-config.php /www/wordpress/

RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www

COPY    ./nginx.conf /etc/nginx/conf.d/default.conf
COPY    supervisord.conf /etc/supervisord.conf
COPY    run.sh .


EXPOSE 5050
CMD sh run.sh
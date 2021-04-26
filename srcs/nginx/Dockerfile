FROM	alpine:3.12

RUN		apk update && apk upgrade
RUN		apk add nginx
RUN		apk add openssl


RUN		openssl req -x509 -nodes -days 365 -newkey rsa:2048  -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=RU/ST=Moscow/L=Moscow/O=Laggard/OU=Edread/CN=https:\/\/github.com\/laggard13x/emailAddress=i_i_i07@icloud.com"

COPY    ./nginx.conf /etc/nginx/conf.d/default.conf
COPY    ./run.sh .
COPY    ./index.html /www/index.html

RUN chmod +x run.sh
RUN mkdir -p /run/nginx
RUN mkdir -p www
RUN adduser -D -g 'www' www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www

EXPOSE  80 443

CMD sh run.sh
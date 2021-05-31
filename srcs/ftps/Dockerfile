FROM	alpine:3.12

RUN	apk update
RUN	apk add openssl vsftpd


RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048  -keyout /etc/ssl/private/vsftpd.key -out /etc/ssl/certs/vsftpd.crt -subj "/C=RU/ST=Moscow/L=Moscow/O=Laggard/OU=Edread/CN=https:\/\/github.com\/laggard13x/emailAddress=i_i_i07@icloud.com"

RUN adduser -D -g 'edread' edread
RUN echo "edread:root" | chpasswd

RUN mkdir -p /var/ftp

COPY ./ftps.conf /etc/vsftpd/vsftpd.conf

COPY run.sh .
RUN chmod 777 ./run.sh

CMD sh run.sh
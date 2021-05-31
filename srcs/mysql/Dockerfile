FROM    alpine:3.12

RUN apk update
RUN apk upgrade
RUN apk add mysql mysql-client openrc

RUN mkdir -p /run/mysql/

COPY ./mysql.sql /
COPY ./my.cnf /etc/
COPY ./wordpress.sql /

COPY run.sh .
RUN chmod 777 ./run.sh

CMD sh run.sh


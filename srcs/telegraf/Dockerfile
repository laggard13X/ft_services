FROM    alpine:3.12

RUN     apk update && apk upgrade &&\
        apk add telegraf --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/edge/community

COPY    telegraf.conf /etc/

CMD     telegraf --config /etc/telegraf.conf
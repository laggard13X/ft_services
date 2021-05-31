FROM    alpine:3.12

RUN     apk update && apk upgrade &&\
        apk add grafana --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/edge/community grafana


RUN     mkdir	            /usr/share/grafana/conf/dashboards
COPY datasource.yaml /usr/share/grafana/conf/provisioning/datasources/influxdb.yaml
COPY dashboards.yaml /usr/share/grafana/conf/provisioning/dashboards/dashboards.yaml
COPY js/* /usr/share/grafana/conf/dashboards/

CMD     grafana-server -homepath /usr/share/grafana
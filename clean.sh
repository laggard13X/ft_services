kubectl delete svc mysql-svc
kubectl delete svc ftps-svc
kubectl delete svc nginx-svc
kubectl delete svc phpmyadmin
kubectl delete svc wordpress-svc
kubectl delete svc cip-influxdb
kubectl delete svc influxdb-svc
kubectl delete svc grafana-svc
kubectl delete deployments --all

eval $(minikube docker-env)
#minikube addons enable metallb
kubectl apply -f ./srcs/configmap.yaml

#nginx
docker build -t nginx_image ./srcs/nginx 
kubectl apply -f ./srcs/nginx/nginx.yaml

#wordpress
docker build -t wordpress_image ./srcs/wordpress
kubectl apply -f ./srcs/wordpress/wordpress.yaml

#phpmyadmin
docker build -t php_image ./srcs/phpmyadmin
kubectl apply -f ./srcs/phpmyadmin/phpmyadmin.yaml

#mysql
docker build -t mysql_image ./srcs/mysql
kubectl apply -f ./srcs/mysql/mysql.yaml

#ftps
docker build -t ftps_image ./srcs/ftps
kubectl apply -f ./srcs/ftps/ftps.yaml


#telegraf
docker build -t telegraf_image ./srcs/telegraf
kubectl apply -f ./srcs/telegraf/telegraf.yaml


#influxdb
docker build -t influxdb_image ./srcs/influxdb
kubectl apply -f ./srcs/influxdb/influxdb.yaml

#grafana
docker build -t grafana_image ./srcs/grafana
kubectl apply -f ./srcs/grafana/grafana.yaml

minikube dashboard
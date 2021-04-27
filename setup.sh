#!/bin/bash

minikube start --vm-driver=virtualbox
eval $(minikube docker-env)
minikube addons enable metallb

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
minikube dashboard
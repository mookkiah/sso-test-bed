#!/bin/sh

# We need SSL certificate for IDP to encrypt/sign based on the need
openssl req -newkey rsa:2048 -keyout cert/server.pem -out cert/server.crt -config ssp-idp-csr.conf
kubectl create configmap x509keycert --from-file=cert/server.pem --from-file=cert/server.crt

kubectl delete configmap config.php
kubectl create configmap config.php --from-file=config/config.php

kubectl delete configmap authsources.php
kubectl create configmap authsources.php --from-file=config/authsources.php

kubectl delete configmap saml20-idp-hosted.php 
kubectl create configmap saml20-idp-hosted.php --from-file=metadata/saml20-idp-hosted.php

kubectl delete configmap httpdconf
kubectl create configmap httpdconf --from-file=httpd-conf/httpd.conf

kubectl apply -f ssp-idp-deployment.yaml 
kubectl exec -it $(kubectl get pod -l app=ssp-idp --output=name) -- ls -l /var/simplesamlphp/config
kubectl exec -it $(kubectl get pod -l app=ssp-idp --output=name) -- head /var/simplesamlphp/config/config.php
kubectl apply -f ssp-idp-service.yaml
kubectl apply -f ssp-idp-ingress.yaml    

open https://ssp-idp.mm-local.com/simplesaml/

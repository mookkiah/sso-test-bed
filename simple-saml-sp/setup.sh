#!/bin/sh

kubectl create namespace ssp-sp
kubectl config set-context --current --namespace ssp-sp
##### One Time or Validation commands are commented
# We need SSL certificate for SP to encrypt/sign based on the need
#openssl req -newkey rsa:2048 -keyout cert/server.pem -out cert/server.crt -config ssp-sp-csr.conf
#sudo bash -c 'echo "127.0.0.1    ssp-sp.mm-local.com" >> /etc/hosts'
#kubectl -n ssp-sp  create configmap x509keycert --from-file=cert/server.pem --from-file=cert/server.crt

kubectl -n ssp-sp  delete configmap config.php --ignore-not-found
kubectl -n ssp-sp  create configmap config.php --from-file=config/config.php

# kubectl -n ssp-sp  delete configmap authsources.php --ignore-not-found
# kubectl -n ssp-sp  create configmap authsources.php --from-file=config/authsources.php

kubectl -n ssp-sp  delete configmap saml20-idp-remote.php --ignore-not-found
kubectl -n ssp-sp  create configmap saml20-idp-remote.php --from-file=metadata/saml20-idp-remote.php

kubectl -n ssp-sp  delete configmap httpdconf --ignore-not-found
kubectl -n ssp-sp  create configmap httpdconf --from-file=httpd-conf/httpd.conf

kubectl -n ssp-sp  apply -f ssp-sp-deployment.yaml 
# kubectl -n ssp-sp  exec -it $(kubectl -n ssp-sp  get pod -l app=ssp-sp --output=name) -- ls -l /var/simplesamlphp/config
# kubectl -n ssp-sp  exec -it $(kubectl -n ssp-sp  get pod -l app=ssp-sp --output=name) -- head /var/simplesamlphp/config/config.php
kubectl -n ssp-sp  apply -f ssp-sp-service.yaml
kubectl -n ssp-sp  apply -f ssp-sp-ingress.yaml    

open https://ssp-sp.mm-local.com/simplesaml/

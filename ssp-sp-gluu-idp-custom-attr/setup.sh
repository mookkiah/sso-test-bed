#!/bin/sh

export NAMESPACE=ssp-sp-gluu-idp-custom-attr
env | grep 'NAMESPACE'

kubectl create namespace $NAMESPACE
kubectl config set-context --current --namespace $NAMESPACE
##### One Time or Validation commands are commented
# We need SSL certificate for SP to encrypt/sign based on the need
#mkdir -p cert
#openssl req -newkey rsa:2048 -new -x509 -nodes -keyout cert/server.pem -out cert/server.crt -config csr.conf
#sudo bash -c 'echo "127.0.0.1    $NAMESPACE.mm-local.com" >> /etc/hosts'

kubectl -n $NAMESPACE  delete configmap x509keycert --ignore-not-found
kubectl -n $NAMESPACE  create configmap x509keycert --from-file=cert/server.pem --from-file=cert/server.crt

kubectl -n $NAMESPACE  delete configmap config.php --ignore-not-found
kubectl -n $NAMESPACE  create configmap config.php --from-file=config/config.php

kubectl -n $NAMESPACE  delete configmap saml20-idp-remote.php --ignore-not-found
kubectl -n $NAMESPACE  create configmap saml20-idp-remote.php --from-file=metadata/saml20-idp-remote.php

kubectl -n $NAMESPACE  delete configmap httpdconf --ignore-not-found
kubectl -n $NAMESPACE  create configmap httpdconf --from-file=httpd-conf/httpd.conf

kubectl -n $NAMESPACE  apply -f deployment.yaml 
kubectl -n $NAMESPACE  apply -f service.yaml
kubectl -n $NAMESPACE  apply -f ingress.yaml    

open https://ssp-sp-gluu-idp-custom-attr.mm-local.com/simplesaml/


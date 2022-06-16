#!/bin/sh

export NAMESPACE=ssp-sp-gluu-idp
env | grep 'NAMESPACE'

kubectl create namespace $NAMESPACE --ignore-not-found
kubectl config set-context --current --namespace $NAMESPACE
cd `git rev-parse --show-toplevel`/ssp-sp-gluu-idp


##### One Time or Validation commands are commented
# We need SSL certificate for SP to encrypt/sign based on the need
#mkdir -p cert
#openssl req -newkey rsa:2048 -new -x509 -nodes -keyout cert/server.pem -out cert/server.crt -config csr.conf
#openssl x509 -in cert/server.crt -text -noout
#sudo bash -c 'echo "127.0.0.1    ssp-sp-gluu-idp.mm-local.com" >> /etc/hosts'

kubectl -n $NAMESPACE delete secret x509keycert --ignore-not-found
kubectl -n $NAMESPACE create secret generic x509keycert --from-file=cert/server.pem --from-file=cert/server.crt

kubectl -n $NAMESPACE  delete configmap config.php --ignore-not-found
kubectl -n $NAMESPACE  create configmap config.php --from-file=config/config.php

kubectl -n $NAMESPACE delete configmap authsources.php --ignore-not-found
kubectl -n $NAMESPACE create configmap authsources.php --from-file=config/authsources.php

kubectl -n $NAMESPACE  delete configmap saml20-idp-remote.php --ignore-not-found
kubectl -n $NAMESPACE  create configmap saml20-idp-remote.php --from-file=metadata/saml20-idp-remote.php

kubectl -n $NAMESPACE  delete configmap httpdconf --ignore-not-found
kubectl -n $NAMESPACE  create configmap httpdconf --from-file=httpd-conf/httpd.conf

kubectl -n $NAMESPACE  delete -f deployment.yaml 
kubectl -n $NAMESPACE  create -f deployment.yaml 

kubectl -n $NAMESPACE  apply -f service.yaml
kubectl -n $NAMESPACE  apply -f ingress.yaml    

open https://ssp-sp-gluu-idp.mm-local.com/simplesaml/

kubectl -n $NAMESPACE logs -f -l app=ssp-sp
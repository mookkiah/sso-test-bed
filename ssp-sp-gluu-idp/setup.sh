#!/bin/sh

kubectl create namespace ssp-sp-gluu-idp
kubectl config set-context --current --namespace ssp-sp-gluu-idp
##### One Time or Validation commands are commented
# We need SSL certificate for SP to encrypt/sign based on the need
#mkdir cert
#openssl req -newkey rsa:2048 -keyout cert/server.pem -out cert/server.crt -config csr.conf
#sudo bash -c 'echo "127.0.0.1    ssp-sp-gluu-idp.mm-local.com" >> /etc/hosts'
#kubectl -n ssp-sp-gluu-idp  create configmap x509keycert --from-file=cert/server.pem --from-file=cert/server.crt

kubectl -n ssp-sp-gluu-idp  delete configmap config.php --ignore-not-found
kubectl -n ssp-sp-gluu-idp  create configmap config.php --from-file=config/config.php

kubectl -n ssp-sp-gluu-idp  delete configmap saml20-idp-remote.php --ignore-not-found
kubectl -n ssp-sp-gluu-idp  create configmap saml20-idp-remote.php --from-file=metadata/saml20-idp-remote.php

kubectl -n ssp-sp-gluu-idp  delete configmap httpdconf --ignore-not-found
kubectl -n ssp-sp-gluu-idp  create configmap httpdconf --from-file=httpd-conf/httpd.conf

kubectl -n ssp-sp-gluu-idp  apply -f deployment.yaml 
kubectl -n ssp-sp-gluu-idp  apply -f service.yaml
kubectl -n ssp-sp-gluu-idp  apply -f ingress.yaml    

open https://ssp-sp-gluu-idp.mm-local.com/simplesaml/

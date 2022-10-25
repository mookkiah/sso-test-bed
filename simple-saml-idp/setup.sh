#!/bin/sh

export NAMESPACE=jenkins-ssp-idp
env | grep 'NAMESPACE'

kubectl create namespace $NAMESPACE
kubectl config set-context --current --namespace $NAMESPACE
cd `git rev-parse --show-toplevel`/simple-saml-idp



# We need SSL certificate for IDP to encrypt/sign based on the need
# mkdir -p cert
# openssl req -newkey rsa:2048 -new -x509 -nodes -keyout cert/server.pem -out cert/server.crt -config ssp-idp-csr.conf
# openssl x509 -in cert/server.crt -text -noout

kubectl -n $NAMESPACE delete secret x509keycert --ignore-not-found
kubectl -n $NAMESPACE create secret generic x509keycert --from-file=cert/server.pem --from-file=cert/server.crt

kubectl -n $NAMESPACE delete configmap config.php --ignore-not-found
kubectl -n $NAMESPACE create configmap config.php --from-file=config/config.php

kubectl -n $NAMESPACE delete configmap authsources.php --ignore-not-found
kubectl -n $NAMESPACE create configmap authsources.php --from-file=config/authsources.php

kubectl -n $NAMESPACE delete configmap saml20-idp-hosted.php --ignore-not-found
kubectl -n $NAMESPACE create configmap saml20-idp-hosted.php --from-file=metadata/saml20-idp-hosted.php

kubectl -n $NAMESPACE delete configmap exampleauth-enable --ignore-not-found
kubectl -n $NAMESPACE create configmap exampleauth-enable --from-file=modules/exampleauth/enable


kubectl -n $NAMESPACE delete configmap httpdconf --ignore-not-found
kubectl -n $NAMESPACE create configmap httpdconf --from-file=httpd-conf/httpd.conf

kubectl -n $NAMESPACE delete configmap saml20-sp-remote-php --ignore-not-found
kubectl -n $NAMESPACE create configmap saml20-sp-remote-php --from-file=metadata/saml20-sp-remote.php

kubectl -n $NAMESPACE delete -f ssp-idp-deployment.yaml
kubectl -n $NAMESPACE create -f ssp-idp-deployment.yaml 

# Verify
#kubectl -n $NAMESPACE exec -it $(kubectl -n $NAMESPACE get pod -l app=ssp-idp --output=name) -- ls -l /var/simplesamlphp/config
#kubectl -n $NAMESPACE exec -it $(kubectl -n $NAMESPACE get pod -l app=ssp-idp --output=name) -- head /var/simplesamlphp/config/config.php
kubectl -n $NAMESPACE apply -f ssp-idp-service.yaml
kubectl -n $NAMESPACE apply -f ssp-idp-ingress.yaml    

open https://ssp-idp.mm-local.com/simplesaml/

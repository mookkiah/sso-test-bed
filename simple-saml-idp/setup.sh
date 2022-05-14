#!/bin/sh

kubectl apply -f ssp-idp-deployment.yaml 
kubectl apply -f ssp-idp-ingress.yaml    
kubectl apply -f ssp-idp-service.yaml
open https://ssp-idp.mm-local.com/simplesaml/

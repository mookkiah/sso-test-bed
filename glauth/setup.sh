#!/bin/sh

export NAMESPACE=glauth
env | grep 'NAMESPACE'

kubectl create namespace $NAMESPACE
kubectl config set-context --current --namespace $NAMESPACE
cd `git rev-parse --show-toplevel`/glauth


helm repo add glauth https://glauth.github.io/helm-glauth
helm repo udate
helm upgrade -i my-glauth glauth/glauth -f values.yaml

kubectl cp gl.db glauth-sqlite-client:gl.db

# whenever gl.db changed outside of glauth context - ex using sqlite3.
kubectl rollout restart deployment -l app=my-glauth

export NODE_PORT=$(kubectl get --namespace glauth -o jsonpath="{.spec.ports[0].nodePort}" services my-glauth)
export NODE_IP=$(kubectl get nodes --namespace glauth -o jsonpath="{.items[0].status.addresses[0].address}")
echo http://$NODE_IP:$NODE_PORT


#!/bin/sh

export NAMESPACE=jenkins-gluu-idp
export RELEASE_NAME=jenkins
env | grep 'NAMESPACE\|RELEASE_NAME'

kubectl create namespace $NAMESPACE
kubectl config set-context --current --namespace $NAMESPACE
cd `git rev-parse --show-toplevel`/jenkins-gluu-idp

# To compare the real changes and adopt future helm chart changes... 
# helm show values jenkins/jenkins > values-as-is.yaml 

# One time and do not commit the password
kubectl create secret generic jenkins-credentials --namespace $NAMESPACE \
  --from-literal=jenkins-admin-user=admin \
  --from-literal=jenkins-admin-password=YourFavoritePassword
sudo bash -c 'echo "127.0.0.1    jenkins-gluu-idp.example.com" >> /etc/hosts'


helm -n $NAMESPACE uninstall $RELEASE_NAME
helm -n $NAMESPACE upgrade -i $RELEASE_NAME jenkins/jenkins  -f values.yaml --debug
kubectl -n $NAMESPACE rollout restart sts jenkins

# Reinstalling helm will generate new certificate in SP metadata
open https://jenkins-gluu-idp.example.com//securityRealm/metadata

open https://jenkins-gluu-idp.example.com
#!/bin/sh

export NAMESPACE=jenkins-ssp-idp
export RELEASE_NAME=jenkins
env | grep 'NAMESPACE\|RELEASE_NAME'

kubectl create namespace $NAMESPACE
kubectl config set-context --current --namespace $NAMESPACE
cd `git rev-parse --show-toplevel`/jenkins-ssp-idp


# To compare the real changes and adopt future helm chart changes... 
# helm show values jenkins/jenkins > values-as-is.yaml 

# One time and do not commit the password
kubectl create secret generic jenkins-credentials --namespace  $NAMESPACE \
  --from-literal=jenkins-admin-user=admin \
  --from-literal=jenkins-admin-password=YourFavoritePassword
sudo bash -c 'echo "127.0.0.1    jenkins-saml-sp.example.com" >> /etc/hosts'

# Reinstalling helm will create new SP Metadata
helm --namespace $NAMESPACE uninstall $RELEASE_NAME

helm --namespace $NAMESPACE upgrade -i $RELEASE_NAME jenkins/jenkins  -f values.yaml --debug

# SP Metadata
open https://jenkins-saml-sp.example.com/securityRealm/metadata

# Configure IDP 
# SimpleSAMLphp IDP
# https://ssp-idp.mm-local.com/simplesaml/admin/metadata-converter.php
# Tested with this configuration - Git link

open https://jenkins-saml-sp.example.com
#!/bin/sh

kubectl create namespace jenkins-ssp-idp
kubectl config set-context --current --namespace jenkins-ssp-idp
cd `git rev-parse --show-toplevel`/jenkins-ssp-idp

# To compare the real changes and adopt future helm chart changes... 
# helm show values jenkins/jenkins > values-as-is.yaml 
export RELEASE_NAME=jenkins-local

# One time and do not commit the password
# kubectl create secret generic jenkins-credentials --namespace  jenkins-ssp-idp \
#   --from-literal=jenkins-admin-user=admin \
#   --from-literal=jenkins-admin-password=YourFavoritePassword

# use the above image in values.yaml
helm --namespace jenkins-ssp-idp uninstall $RELEASE_NAME
helm --namespace jenkins-ssp-idp upgrade -i $RELEASE_NAME jenkins/jenkins  -f values.yaml --debug

kubectl exec --namespace jenkins-ssp-idp -it svc/$RELEASE_NAME -c jenkins -- /bin/cat /run/secrets/chart-admin-password && echo

sudo bash -c 'echo "127.0.0.1    jenkins-saml-sp.mm-local.com" >> /etc/hosts'

open https://jenkins-saml-sp.mm-local.com
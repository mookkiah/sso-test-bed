kubectl create namespace sonarqube-gluu-idp 
kubectl config set-context --current --namespace sonarqube-sp-gluu-idp 
cd `git rev-parse --show-toplevel`/sonarqube-sp-gluu-idp 

export RELEASE_NAME=sonarqube
export NAMESPACE=sonarqube-gluu-idp

helm repo add sonarqube https://SonarSource.github.io/helm-chart-sonarqube
helm repo update

# To compare the real changes and adopt future helm chart changes... 
# helm show values sonarqube/sonarqube > values-as-is.yaml 

helm --namespace $NAMESPACE upgrade -i $RELEASE_NAME sonarqube/sonarqube  -f values.yaml --debug

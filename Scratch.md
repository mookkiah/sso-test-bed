
```sh
export CLUSTERIP=127.0.0.1
kubectl get service -n kube-system traefik
export CLUSTERHTTP=`kubectl get service -n kube-system traefik -o json | jq '.spec.ports[0].nodePort'`
export CLUSTERHTTPS=`kubectl get service -n kube-system traefik -o json | jq '.spec.ports[1].nodePort'`

kubectl port-forward -n kube-system $(kubectl -n kube-system get pods --selector "app.kubernetes.io/name=traefik" --output=name) 9000:9000
# http://127.0.0.1:9000/dashboard/#/

kubectl -n kube-system expose deploy/traefik --port=9000 --target-port=9000 --name=traefik-dashboard
kubectl -n kube-system create ingress traefik-dashboard --rule="dashboard.traefik.mm-local.com/*=traefik-dashboard:9000"
# http://dashboard.traefik.mm-local.com/dashboard/#/

nerdctl run -d --restart always --name ssp-idp -p 7080:80 -p 7443:443 unicon/simplesamlphp
```
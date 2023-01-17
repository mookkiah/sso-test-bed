

curl -k -u $CLIENTID:$CLIENTSECRET \
       -d grant_type=client_credentials \
       https://${IDP_HOST}/oxauth/restv1/token 


export ACCESS_TOKEN=


curl -k -G -H 'Authorization: Bearer '${ACCESS_TOKEN} -d count=10 \
      --data-urlencode 'filter=userName co "mi"' https://${IDP_HOST}/scim/restv1/scim/v2/Users

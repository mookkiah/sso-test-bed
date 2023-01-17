
```
export CLIENTID=
export CLIENTSECRET=
export IDP_BASE_URL=
```

curl -u $CLIENTID:$CLIENTSECRET \
       -d grant_type=client_credentials \
       $IDP_BASE_URL/oxauth/restv1/token 
```


```
curl -G -H 'Authorization: Bearer c8baf33d-1aa9-433f-9d57-f411c2985316' -d count=10 \
      --data-urlencode 'filter=userName co "mi"' $IDP_BASE_URL/scim/restv1/scim/v2/Users
```
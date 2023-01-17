# Gluu SCIM Demo

Enable SCIM Test Mode client and use the credential to perform following demonstration curl commands.


```
export CLIENTID=
export CLIENTSECRET=
export IDP_BASE_URL=https://gluu.example.com
```

Following code snippet will return the access token.
```
curl -k -u $CLIENTID:$CLIENTSECRET \
       -d grant_type=client_credentials \
       $IDP_BASE_URL/oxauth/restv1/token 
```
extract `access_token` and export to a variable
```
export ACCESS_TOKEN=
```

Using the access token received, we can perform SCIM apis.

Find user name contains `mi`
```
curl -k -G -H 'Authorization: Bearer '${ACCESS_TOKEN} -d count=10 \
      --data-urlencode 'filter=userName co "mi"' $IDP_BASE_URL/scim/restv1/scim/v2/Users
```


Create user
```
curl -k -H 'Authorization: Bearer '${ACCESS_TOKEN} \
    -H 'Content-Type: application/scim+json' \
   $IDP_BASE_URL/scim/restv1/scim/v2/Users \
  -d '{"schemas":["urn:ietf:params:scim:schemas:core:2.0:User"], "userName":"ajsmith", "name":{ "familyName":"Smith",  "givenName":"Joe" }, "displayName":"Average Joe" }'
```
Output
```
{"schemas":["urn:ietf:params:scim:schemas:core:2.0:User"],"id":"5350ebc8-7258-46f5-bdff-bea3d5835019","meta":{"resourceType":"User","created":"2023-01-10T22:11:00.302Z","lastModified":"2023-01-10T22:11:00.302Z","location":"https://gluu.example.com/identity/restv1/scim/v2/Users/5350ebc8-7258-46f5-bdff-bea3d5835019"},"userName":"ajsmith","name":{"familyName":"Smith","givenName":"Joe","formatted":"Joe Smith"},"displayName":"Average Joe"}
```


```
curl -k -H 'Authorization: Bearer '${ACCESS_TOKEN} \
    -H 'Content-Type: application/scim+json' \
   $IDP_BASE_URL/scim/restv1/scim/v2/Users \
  -d '{"schemas":["urn:ietf:params:scim:schemas:core:2.0:User"], "userName":"john", "name":{ "familyName":"peter",  "givenName":"Peter" }, "displayName":"John Peter", "emails": [{ "value": "peterj@a.b.c.d.example.xy", "primary": true }] }'
```

Output
```
{"schemas":["urn:ietf:params:scim:schemas:core:2.0:User"],"id":"6c424875-15ce-439c-ba0f-92c40d25ce71","meta":{"resourceType":"User","created":"2023-01-17T03:31:00.689Z","lastModified":"2023-01-17T03:31:00.689Z","location":"https://gluu.example.com/scim/restv1/scim/v2/Users/6c424875-15ce-439c-ba0f-92c40d25ce71"},"userName":"john","name":{"familyName":"peter","givenName":"Peter","formatted":"Peter peter"},"displayName":"John Peter","emails":[{"value":"peterj@a.b.c.d.example.xy","primary":true}]}%  
```


## Reference:
- https://gluu.org/docs/gluu-server/4.1/user-management/scim2/
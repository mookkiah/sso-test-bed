# Gluu SCIM Demo

Enable SCIM Test Mode client and use the credential to perform following demonstration curl commands.


```
export CLIENTID=
export CLIENTSECRET=
export IDP_BASE_URL=https://gluu.example.com
```

Following code snippet will return the access token.
```
curl -u $CLIENTID:$CLIENTSECRET \
       -d grant_type=client_credentials \
       $IDP_BASE_URL/oxauth/restv1/token 
```


Using the access token received, we can perform SCIM apis.

Find user name contains `mi`
```
curl -G -H 'Authorization: Bearer ...token...' -d count=10 \
      --data-urlencode 'filter=userName co "mi"' $IDP_BASE_URL/scim/restv1/scim/v2/Users
```


Create user
```
curl -H 'Authorization: Bearer ...token...' \
    -H 'Content-Type: application/scim+json' \
   $IDP_BASE_URL/scim/restv1/scim/v2/Users \
  -d '{"schemas":["urn:ietf:params:scim:schemas:core:2.0:User"], "userName":"ajsmith", "name":{ "familyName":"Smith",  "givenName":"Joe" }, "displayName":"Average Joe" }'
```
Output
```
{"schemas":["urn:ietf:params:scim:schemas:core:2.0:User"],"id":"5350ebc8-7258-46f5-bdff-bea3d5835019","meta":{"resourceType":"User","created":"2023-01-10T22:11:00.302Z","lastModified":"2023-01-10T22:11:00.302Z","location":"https://gluu.example.com/identity/restv1/scim/v2/Users/5350ebc8-7258-46f5-bdff-bea3d5835019"},"userName":"ajsmith","name":{"familyName":"Smith","givenName":"Joe","formatted":"Joe Smith"},"displayName":"Average Joe"}
```

```
curl -H 'Authorization: Bearer ...token...' \
    -H 'Content-Type: application/scim+json' \
   $IDP_BASE_URL/scim/restv1/scim/v2/Users \
  -d '{"schemas":["urn:ietf:params:scim:schemas:core:2.0:User"], "userName":"jpeter", "name":{ "familyName":"Peter",  "givenName":"John" }, "displayName":"John Peter", "emails": [{ "value": "jpeter@a.b.c.d.example.xy", "primary": true }] }'
```

Output
```
{"schemas":["urn:ietf:params:scim:api:messages:2.0:Error"],"status":"400","scimType":"invalidValue","detail":"Unexpected value for attribute emails.value"}
```


```
curl -H 'Authorization: Bearer ...token...' \
    -H 'Content-Type: application/scim+json' \
   $IDP_BASE_URL/scim/restv1/scim/v2/Users \
  -d '{"schemas":["urn:ietf:params:scim:schemas:core:2.0:User"], "userName":"invoicefush", "name":{ "familyName":"fusheng",  "givenName":"invoice" }, "displayName":"John Peter", "emails": [{ "value": "invoice@e.fusheng.com.tw", "primary": true }] }'
```

Output
```
{"schemas":["urn:ietf:params:scim:schemas:core:2.0:User"],"id":"64ddbc5d-dfb5-4a4e-8992-bc842061b43b","meta":{"resourceType":"User","created":"2023-01-10T22:16:24.761Z","lastModified":"2023-01-10T22:16:24.761Z","location":"https://gluu.example.com/identity/restv1/scim/v2/Users/64ddbc5d-dfb5-4a4e-8992-bc842061b43b"},"userName":"jpeter","name":{"familyName":"Peter","givenName":"John","formatted":"John Peter"},"displayName":"John Peter","emails":[{"value":"jpeter@example.xy","primary":true}]}
```



## Reference:
- https://gluu.org/docs/gluu-server/4.1/user-management/scim2/
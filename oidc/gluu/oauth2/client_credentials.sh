# Client must have enabled with client_credentials grant type

curl -k -v -X POST --basic -u $CLIENT_ID:$CLIENT_SECRET \
    -H "Content-Type: application/x-www-form-urlencoded;charset=UTF-8" \
    -d "grant_type=client_credentials" -d "redirect_uri=${REDIRECT_URI}" $TOKEN_ENDPOINT


export ACCESS_TOKEN=5b90bb2f-5031-4a28-8d3b-e4a1383e146e
curl -v -X POST --basic -u $CLIENTID:$CLIENTSECRET \
    -H "Content-Type: application/x-www-form-urlencoded;charset=UTF-8" \
    -d "grant_type=client_credentials" -d "redirect_uri=$REDIRECTURI" $TOKEN_EP

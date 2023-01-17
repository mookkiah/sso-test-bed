curl -k --user "$CLIENTID:$CLIENTSECRET" -d "accessToken=$AT&grant_type=authorization_code&client_id=$CLIENTID&redirect_uri=$REDIRECTURI" $TOKEN_EP

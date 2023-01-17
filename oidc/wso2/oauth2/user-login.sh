curl -v -k -X POST --basic -u $CLIENTID:$CLIENTSECRET \
    -H "Content-Type: application/x-www-form-urlencoded;charset=UTF-8" \
    -d "grant_type=password&username=$USERNAME&password=$PASSWORD&scope=$SCOPE" \
    -d "redirect_uri=$REDIRECTURI"  $TOKEN_EP


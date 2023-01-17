alias urlencode='python -c "import sys, urllib as ul; print ul.quote_plus(sys.argv[1])"'

echo "Not working / tested"
curl -v -k -X POST  \
    -H "Content-Type: application/x-www-form-urlencoded;charset=UTF-8" \
    -d "grant_type=password&username=$USERNAME&password=$PASSWORD&scope=$( urlencode $SCOPE )&client_id=$( urlencode $CLIENTID )" \
    -d "redirect_uri=$( urlencode $REDIRECTURI )"  $TOKEN_EP


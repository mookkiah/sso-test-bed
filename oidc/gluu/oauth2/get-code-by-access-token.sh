export ENCODED_URL=`urlencode ${REDIRECT_URI}`
curl -k  -d "accessToken=${ACCESS_TOKEN}&grant_type=authorization_code&client_id=$CLIENT_ID&redirect_uri=${ENCODED_URL}" $TOKEN_ENDPOINT

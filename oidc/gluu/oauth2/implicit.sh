

echo "$LOGIN_PAGE?client_id=$( urlencode $CLIENT_ID )&redirect_uri=$( urlencode $REDIRECT_URI )&response_type=code&scope=$( urlencode $SCOPE )"

#Why implicit need a browser?

#ouput of this script is URL, access this in browser to get code
#REDIRECTURI?code=1e75101d-043a-408b-9f61-9c553ba46325
#&scope=openid
#&session_id=6dd19ff0-33af-4f5f-958c-6c44b18b42fe
#&state
#&session_state=17676693-0cbf-4be7-8ae2-ca88c8aad66d

export IDB_HOST=gluu.example.com
export authorization_uri=https:/${IDP_HOST}/oxauth/restv1/authorize

export token_uri=https:/${IDP_HOST}/oxauth/restv1/token

export user_info_uri=https:/${IDP_HOST}/oxauth/restv1/userinfo

export LOGIN_PAGE=https:/${IDP_HOST}/oxauth/restv1/authorize

# Resource server (application) - in SAML term SP
export CLIENTID=
export client_id=

export client_secret=
export CLIENTSECRET=



export USERINFO_EP=https://$GLUU_SERVER/oxauth/restv1/userinfo

# resource owner (end user - browser based)
export USERNAME=
echo "export PASSWORD with admin password"
export PASSWORD=

# redirect URI of the application
export REDIRECTURI=

export SCOPE="openid user_name email"
export URLSCOPE=openid%20user_name%20email

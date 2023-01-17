# Reference: https://developer.okta.com/docs/reference/api/oidc/
#https://wso2.example.com/.well-known/openid-configuration

export BASE_URL=
export AUTHZ_EP=${BASE_URL}/authorize

export LOGIN_PAGE=https://${BASE_URL}/oauth2/authorize

export TOKEN_EP=${baseUrl}/token

export CLIENTID=
export CLIENTSECRET=

export USERINFO_EP=${baseUrl}/userinfo

export USERNAME=
export PASSWORD=
echo "export PASSWORD with admin password"

export REDIRECTURI=

export SCOPE="openid"
export URLSCOPE=openid
export auth_code=
export AC=${auth_code}
export access_token=

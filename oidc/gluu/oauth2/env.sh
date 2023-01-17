export IDP_HOST=
# open https://${IDP_HOST}/.well-known/openid-configuration

export AUTHORIZATION_ENDPOINT=https:/${IDP_HOST}/oxauth/restv1/authorize
export TOKEN_ENDPOINT=https://${IDP_HOST}/oxauth/restv1/token
export USERINFO_ENDPOINT=https://${IDP_HOST}/oxauth/restv1/userinfo

export LOGIN_PAGE=https://${IDP_HOST}/oxauth/restv1/authorize

# Resource server (application) - in SAML term SP - 
# Ex: oxTrust Admin GUI (grantypes: authorization_code, implicit, refresh_token ; scopes: openid, user_name, email)
export CLIENT_ID=
export CLIENT_SECRET=


# resource owner (end user - browser based)
export USERNAME=
echo "export PASSWORD with admin password"
export PASSWORD=

# redirect URI of the application
export REDIRECT_URI=https://${IDP_HOST}/identity/authcode.htm 

export SCOPE="openid user_name email"


# Reference https://mm-notes.com/shell/command/alias/2023/01/17/useful-command-aliases.html
alias urldecode='python -c "import sys, urllib as ul; print ul.unquote_plus(sys.argv[1])"'
alias urlencode='python -c "import sys, urllib as ul; print ul.quote_plus(sys.argv[1])"'

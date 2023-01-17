curl -k -vvv -X POST \
-H "Authorization: Bearer ${access_token}" \
-H "Content-Type: application/x-www-form-urlencoded" \
${baseUrl}/userinfo
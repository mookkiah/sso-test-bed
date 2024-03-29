rawurlencode() {
  local string="${1}"
  local strlen=${#string}
  local encoded=""
  local pos c o

  for (( pos=0 ; pos<strlen ; pos++ )); do
  	c=${string:$pos:1}
    case "$c" in
		[-_.~a-zA-Z0-9] ) o="${c}" ;;
		* )               printf -v o '%%%02x' "'$c"
	esac
	encoded+="${o}"
	done
	echo "${encoded}"    # You can either set a return variable (FASTER) 
	REPLY="${encoded}"   #+or echo the result (EASIER)... or both... :p
}

echo "Not working"
curl -v -k -X POST  \
    -H "Content-Type: application/x-www-form-urlencoded;charset=UTF-8" \
    -d "grant_type=password&username=$USERNAME&password=$PASSWORD&scope=$( rawurlencode $SCOPE )&client_id=$( rawurlencode $CLIENTID )" \
    -d "redirect_uri=$REDIRECTURI"  $TOKEN_EP


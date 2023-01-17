
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

echo "$LOGIN_PAGE?client_id=$( rawurlencode $CLIENTID )&redirect_uri=$( rawurlencode $REDIRECTURI )&response_type=code&scope=$URLSCOPE"

#Why implicit need a browser?

#ouput of this script is URL, access this in browser to get code
#REDIRECTURI?code=1e75101d-043a-408b-9f61-9c553ba46325
#&scope=openid
#&session_id=6dd19ff0-33af-4f5f-958c-6c44b18b42fe
#&state
#&session_state=17676693-0cbf-4be7-8ae2-ca88c8aad66d

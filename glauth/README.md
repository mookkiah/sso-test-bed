# GLAuth



Download the dummy user database
```sh
curl -H "Accept:application/octet-stream" -L -o gl.db https://github.com/glauth/glauth/blob/master/v2/docker/assets/gl.db?raw=true
```

Verify the downloaded file is a good database
```
(⎈ |rancher-desktop:glauth)mm-lab:glauth mookkiahm$ sqlite3 gl.db 
SQLite version 3.39.5 2022-10-14 20:58:05
Enter ".help" for usage hints.
sqlite> select * from users;
1|hackers|5001|5501|||||||0|6478579e37aff45f013e14eeb30b3cc56c72ccdc310123bcdf53e0333e3f416a||||{}
2|johndoe|5002|5502|||||||0|6478579e37aff45f013e14eeb30b3cc56c72ccdc310123bcdf53e0333e3f416a||||{}
3|serviceuser|5003|5502||||serviceuser@example.com|||0|652c7dc687d98c9889304ed2e408c74b611e86a40caa51c4b43f1dd5913c5cd0||||{}
4|user4|5004|5504|5505,5506||||||0|652c7dc687d98c9889304ed2e408c74b611e86a40caa51c4b43f1dd5913c5cd0||||{"employeetype":["Intern","Temp"],"employeenumber":[12345,54321]}
sqlite> .exit
(⎈ |rancher-desktop:glauth)mm-lab:glauth mookkiahm$ 
```

Copy the user database into volume which is attached to both pods
```
kubectl cp gl.db glauth-sqlite-client:gl.db
```

Now you can query ldap


```
ldapsearch -LLL -H ldap://localhost:30389 \
    -D cn=serviceuser,ou=svcaccts,dc=glauth,dc=com -w mysecret \
    -x -b dc=glauth,dc=com cn=hackers
```

Example
```
(⎈ |rancher-desktop:glauth)mm-lab:glauth mookkiahm$ ldapsearch -LLL -H ldap://localhost:30389 \
>    -D cn=serviceuser,ou=svcaccts,dc=glauth,dc=com -w mysecret \
>    -x -bdc=glauth,dc=com cn=hackers
dn: cn=hackers,ou=superheros,dc=glauth,dc=com
cn: hackers
uid: hackers
ou: superheros
uidNumber: 5001
accountStatus: active
objectClass: posixAccount
loginShell: /bin/bash
homeDirectory: /home/hackers
description: hackers via LDAP
gecos: hackers via LDAP
gidNumber: 5501
memberOf: cn=caped,ou=groups,dc=glauth,dc=com
memberOf: cn=civilians,ou=groups,dc=glauth,dc=com
memberOf: cn=superheros,ou=groups,dc=glauth,dc=com

(⎈ |rancher-desktop:glauth)mm-lab:glauth mookkiahm$ 
```




Adding user using ldapadd (*permission issue)
```
ldapadd -H ldap://localhost:30389 \
    -D cn=serviceuser,ou=svcaccts,dc=glauth,dc=com -w mysecret \
    -f minions.ldif
```

Insert more user to database using sqlite 

1|hackers|5001|5501|||||||0|6478579e37aff45f013e14eeb30b3cc56c72ccdc310123bcdf53e0333e3f416a||||{}

INSERT INTO users (name, uidnumber, primarygroup, passsha256  ) VALUES
("joker", 5006, 5501, "6478579e37aff45f013e14eeb30b3cc56c72ccdc310123bcdf53e0333e3f416a");

Example
```
sqlite> INSERT INTO users (name, uidnumber, primarygroup, passsha256  ) VALUES
   ...> ("joker", 5006, 5501, "6478579e37aff45f013e14eeb30b3cc56c72ccdc310123bcdf53e0333e3f416a");
sqlite> select * from users;
1|hackers|5001|5501|||||||0|6478579e37aff45f013e14eeb30b3cc56c72ccdc310123bcdf53e0333e3f416a||||{}
2|johndoe|5002|5502|||||||0|6478579e37aff45f013e14eeb30b3cc56c72ccdc310123bcdf53e0333e3f416a||||{}
3|serviceuser|5003|5502||||serviceuser@example.com|||0|652c7dc687d98c9889304ed2e408c74b611e86a40caa51c4b43f1dd5913c5cd0||||{}
4|user4|5004|5504|5505,5506||||||0|652c7dc687d98c9889304ed2e408c74b611e86a40caa51c4b43f1dd5913c5cd0||||{"employeetype":["Intern","Temp"],"employeenumber":[12345,54321]}
5|joker|5006|5501|||||||0|6478579e37aff45f013e14eeb30b3cc56c72ccdc310123bcdf53e0333e3f416a||||{}
sqlite> 
```

```
(⎈ |rancher-desktop:glauth)mm-lab:glauth mookkiahm$ ldapsearch -LLL -H ldap://localhost:30389     -D cn=serviceuser,ou=svcaccts,dc=glauth,dc=com -w mysecret     -x -b dc=glauth,dc=com cn=joker
dn: cn=joker,ou=superheros,dc=glauth,dc=com
cn: joker
uid: joker
ou: superheros
uidNumber: 5006
accountStatus: active
objectClass: posixAccount
loginShell: /bin/bash
homeDirectory: /home/joker
description: joker via LDAP
gecos: joker via LDAP
gidNumber: 5501
memberOf: cn=caped,ou=groups,dc=glauth,dc=com
memberOf: cn=civilians,ou=groups,dc=glauth,dc=com
memberOf: cn=superheros,ou=groups,dc=glauth,dc=com
```


Using OpenDJ ldapsearch
```
/opt/opendj/bin/ldapsearch  -X -h 10.152.183.133 -p 3893 -D cn=serviceuser,ou=svcaccts,dc=glauth,dc=com -w mysecret  -b dc=glauth,dc=com cn=hackers 
```


Insert a user with special characters in name
```
INSERT INTO users (name, sn, givenname, mail, uidnumber, primarygroup, passsha256  ) VALUES
("renee", "François", "Renée François", "renee.francois@mailinator.com", 5007, 5501, "6478579e37aff45f013e14eeb30b3cc56c72ccdc310123bcdf53e0333e3f416a");
```
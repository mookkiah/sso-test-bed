
Thanks to Zico@Gluu for providing an environment to experiment and document the outcome in my blog.


For logout, visit this url,

https://centos423.gluu.org/idp/Authn/oxAuth/logout

ends up in a page

https://centos423.gluu.org/idp/profile/Logout?execution=e2s1
insert image

```

Replace or remove this logo

Attempting to log out of the following services:

  X mark -   https://ssp-sp-gluu-idp.mm-local.com/simplesaml/module.php/saml/sp/metadata.php/default-sp

    › Forgot your password?
    › Need Help?

 

Insert your footer text here.

```

The X mark actually representing  like a list item not a failure.

See log <insert link shibboleth-idp-process.log>


## What is not working
- SP initiated logout when logout clicked from SimpleSAMLphp application
- This may be the same reason Gluu is returing 400 response code on the last call during Global Logout (GLO)
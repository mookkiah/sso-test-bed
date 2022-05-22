# Changes


## May 22, 2022
### jenkins-ssp-idp
- [Setup Jenkins in Kubernetes](https://mm-notes.com/devops/jenkins/2021/10/30/jenkins-in-kubernetes.html)
- [Configure SAML based login for Jenkins](https://mm-notes.com/security/saml/2021/10/30/enabling-saml-sso-in-jenkins.html)
- [Jenkins SAML plugin](https://plugins.jenkins.io/saml/)
- JcasC used.

### ssp-sp-gluu-idp
- using secret for x509 key and secret
- added project level README.md to have context related to project
- added other files and image for learning or quick reference


## May 21, 2022

### ssp-sp-gluu-idp
- Kubernetes secret used instead of configmap for x509 key and cert.
- Commiting cert folder to avoid changing sp configuration when reinitializing the project.

### ssp-sp-gluu-sp
- Removed unwanted configuration and cert to keep the project as simple as possible.
- Added login and logout saml requests for reference.

## May 18, 2022
### ssp-sp-gluu-idp
- Gluu Trust Relationship setup [documentation](https://gluu.org/docs/gluu-server/4.0/admin-guide/saml/#create-a-trust-relationship).
- 

## May 14, 2022

simple-saml-idp
- This is simplesamlphp as IDP setup.
- Reference: [documentation](https://simplesamlphp.org/docs/latest/simplesamlphp-idp.html)

simple-saml-sp
- This is simplesamlphp as IDP setup
- Reference: [documentation](https://simplesamlphp.org/docs/latest/simplesamlphp-sp.html)

simple-saml-idp and simple-saml-sp integrated.
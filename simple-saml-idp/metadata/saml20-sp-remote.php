<?php

/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */
$metadata['https://saml2sp.example.org'] = [
    'AssertionConsumerService' => 'https://saml2sp.example.org/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
    'SingleLogoutService' => 'https://saml2sp.example.org/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
];

/*
 * This example shows an example config that works with Google Workspace (G Suite / Google Apps) for education.
 * What is important is that you have an attribute in your IdP that maps to the local part of the email address at
 * Google Workspace. In example, if your Google account is foo.com, and you have a user that has an email john@foo.com, then you
 * must set the simplesaml.nameidattribute to be the name of an attribute that for this user has the value of 'john'.
 */
$metadata['google.com'] = [
    'AssertionConsumerService' => 'https://www.google.com/a/g.feide.no/acs',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'uid',
    'simplesaml.attributes' => false,
];

$metadata['https://legacy.example.edu'] = [
    'AssertionConsumerService' => 'https://legacy.example.edu/saml/acs',
    /*
     * Currently, SimpleSAMLphp defaults to the SHA-256 hashing algorithm.
     * Uncomment the following option to use SHA-1 for signatures directed
     * at this specific service provider if it does not support SHA-256 yet.
     *
     * WARNING: SHA-1 is disallowed starting January the 1st, 2014.
     * Please refer to the following document for more information:
     * http://csrc.nist.gov/publications/nistpubs/800-131A/sp800-131A.pdf
     */
    //'signature.algorithm' => 'http://www.w3.org/2000/09/xmldsig#rsa-sha1',
];

$metadata['https://ssp-sp.mm-local.com/simplesaml/module.php/saml/sp/metadata.php/default-sp'] = [
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://ssp-sp.mm-local.com/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
        ],
    ],
    'AssertionConsumerService' => [
        [
            'index' => 0,
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://ssp-sp.mm-local.com/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
        ],
        [
            'index' => 1,
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
            'Location' => 'https://ssp-sp.mm-local.com/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp',
        ],
        [
            'index' => 2,
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://ssp-sp.mm-local.com/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
        ],
        [
            'index' => 3,
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
            'Location' => 'https://ssp-sp.mm-local.com/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
        ],
    ],
];


/**
 * This is the SP setup for the project jenkins-ssp-idp
 * Git link for JCasC.securityRealm.saml 
 */
$metadata['https://jenkins-saml-sp.example.com/securityRealm/finishLogin'] = [
    'entityid' => 'https://jenkins-saml-sp.example.com/securityRealm/finishLogin',
    'contacts' => [],
    'metadata-set' => 'saml20-sp-remote',
    'expire' => 2286791312,
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://jenkins-saml-sp.example.com/securityRealm/finishLogin',
            'index' => 0,
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://jenkins-saml-sp.example.com/securityRealm/finishLogin?logoutendpoint=true',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://jenkins-saml-sp.example.com/securityRealm/finishLogin?logoutendpoint=true',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://jenkins-saml-sp.example.com/securityRealm/finishLogin?logoutendpoint=true',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://jenkins-saml-sp.example.com/securityRealm/finishLogin?logoutendpoint=true',
        ],
    ],
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC+jCCAeKgAwIBAgIVAJUb6aLbAPtIDdAKWDSrt/hMF1jkMA0GCSqGSIb3DQEBCwUAMBcxFTATBgNVBAMMDFNBTUwtamVua2luczAeFw0yMjA2MTkxMTQ0NDZaFw0yMzA2MTkxMTQ0NDZaMBcxFTATBgNVBAMMDFNBTUwtamVua2luczCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANi9UHL8IllyUhbwGVlp4hvqHD0lJlBT8oKZR2RwXw2Ax5U2H3UJAmeYGt8IMNcMKgcqDtO0M8Ds7Y6QPMokHP5ZugscP0aRODbNkjGzGtlgNsaqqL9GywWWedLn7RuZChqTY2oHS51qYuxOFbHvl1V5A5PTapwWPhd4NrDcrYi5R4iHVnk/Km1Crvj1sdwWVunvG7A1RDUmKzKXKVOYpHa1AThvpDhnoft02ECa18ebre55VwJbs0g9g+lfWha8iJM9b5u3v4he+8EuLarZQxJ5KJrlp0P+quxHGCDd3iQxOo33HGqDjetLKdlEF60skm3zdEF34kXDry4a0LrB1lMCAwEAAaM9MDswHQYDVR0OBBYEFBsYSrW47n/A94wCg4pCsgr93r7+MBoGA1UdEQQTMBGCD2NuPVNBTUwtamVua2luczANBgkqhkiG9w0BAQsFAAOCAQEAHU8DVis1qjePOL2FLFX0D8A8c4ilUyvtkDB11Anp5NN2bYZGVOEuPJFdqeiXI3x1QB9ivys5qTvbteMULSUXNOwBDjh/r0WyykirX4Zo9Wr3aeP1hUNBd6Bxjw2JTrdc5Hd2C+Yvwg3i7WDkmZ2AxMzshjkdi3/trbyQWudq5If93BeQFzb4Un3HXvDangPIPNRnQR+eCXddR49tImFKIyGxrteX5Dzt45lrhZ59+8uXOqMhNhn3vxjU0rauOLSSJPMeQQixgYpQ9SSqy4SbRpQ99DXb12pZC4tXxhimU5GvY1dOI8ojdytSDc8qB+l/gv+GEoA1tMyPZFpXr4t3HQ==',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC+jCCAeKgAwIBAgIVAJUb6aLbAPtIDdAKWDSrt/hMF1jkMA0GCSqGSIb3DQEBCwUAMBcxFTATBgNVBAMMDFNBTUwtamVua2luczAeFw0yMjA2MTkxMTQ0NDZaFw0yMzA2MTkxMTQ0NDZaMBcxFTATBgNVBAMMDFNBTUwtamVua2luczCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANi9UHL8IllyUhbwGVlp4hvqHD0lJlBT8oKZR2RwXw2Ax5U2H3UJAmeYGt8IMNcMKgcqDtO0M8Ds7Y6QPMokHP5ZugscP0aRODbNkjGzGtlgNsaqqL9GywWWedLn7RuZChqTY2oHS51qYuxOFbHvl1V5A5PTapwWPhd4NrDcrYi5R4iHVnk/Km1Crvj1sdwWVunvG7A1RDUmKzKXKVOYpHa1AThvpDhnoft02ECa18ebre55VwJbs0g9g+lfWha8iJM9b5u3v4he+8EuLarZQxJ5KJrlp0P+quxHGCDd3iQxOo33HGqDjetLKdlEF60skm3zdEF34kXDry4a0LrB1lMCAwEAAaM9MDswHQYDVR0OBBYEFBsYSrW47n/A94wCg4pCsgr93r7+MBoGA1UdEQQTMBGCD2NuPVNBTUwtamVua2luczANBgkqhkiG9w0BAQsFAAOCAQEAHU8DVis1qjePOL2FLFX0D8A8c4ilUyvtkDB11Anp5NN2bYZGVOEuPJFdqeiXI3x1QB9ivys5qTvbteMULSUXNOwBDjh/r0WyykirX4Zo9Wr3aeP1hUNBd6Bxjw2JTrdc5Hd2C+Yvwg3i7WDkmZ2AxMzshjkdi3/trbyQWudq5If93BeQFzb4Un3HXvDangPIPNRnQR+eCXddR49tImFKIyGxrteX5Dzt45lrhZ59+8uXOqMhNhn3vxjU0rauOLSSJPMeQQixgYpQ9SSqy4SbRpQ99DXb12pZC4tXxhimU5GvY1dOI8ojdytSDc8qB+l/gv+GEoA1tMyPZFpXr4t3HQ==',
        ],
    ],
    'validate.authnrequest' => false,
    'saml20.sign.assertion' => false,
];
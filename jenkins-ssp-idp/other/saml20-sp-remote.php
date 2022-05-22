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


$metadata['https://jenkins-saml-sp.mm-local.com/securityRealm/finishLogin'] = [
    'entityid' => 'https://jenkins-saml-sp.mm-local.com/securityRealm/finishLogin',
    'contacts' => [],
    'metadata-set' => 'saml20-sp-remote',
    'expire' => 2284339155,
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://jenkins-saml-sp.mm-local.com/securityRealm/finishLogin',
            'index' => 0,
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://jenkins-saml-sp.mm-local.com/securityRealm/finishLogin?logoutendpoint=true',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://jenkins-saml-sp.mm-local.com/securityRealm/finishLogin?logoutendpoint=true',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://jenkins-saml-sp.mm-local.com/securityRealm/finishLogin?logoutendpoint=true',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://jenkins-saml-sp.mm-local.com/securityRealm/finishLogin?logoutendpoint=true',
        ],
    ],
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC+jCCAeKgAwIBAgIVANyEBTqhoX4kNbNCmBpkZk66fkB1MA0GCSqGSIb3DQEBCwUAMBcxFTATBgNVBAMMDFNBTUwtamVua2luczAeFw0yMjA1MjExNzE2NDNaFw0yMzA1MjExNzE2NDNaMBcxFTATBgNVBAMMDFNBTUwtamVua2luczCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAL05XAY+F1uRuFwLLOm/j27x+oLEW0dIr1rus4JcMFCYpdSkTxG5ADlYG0Q6hJkTJuUpHQRwuHiJTb+4Umo8JWdoYPQENq7Dzaf6YFXozaUFaw2ZJOdDEabiCY54wQQUoDYSwmTbRTHlXnLMCFp+SeIOQJsOXpyDTpM62aOk23eB3JGtqftp0HYY5z27uJ+f0nDKRG19sVtFo+v0A18AXuG0u6Ua7WBoyQ2xIJj29B4D6fKlqs2EkWiTFKc5DoKxpWnZakptVrJPzeJy6Cxn6eJa5ggicxIc17hXakIuRcLVkl5mlH6Vk8i6/Xz6Q1CuCmQA/pbjmT/Dq0mf9X6BqqUCAwEAAaM9MDswHQYDVR0OBBYEFI7zBGQdPgLha93NaX0Bmq5B87+CMBoGA1UdEQQTMBGCD2NuPVNBTUwtamVua2luczANBgkqhkiG9w0BAQsFAAOCAQEAoXsU8GjxpBIVkKoo817jl+50/v+ZitcGWTsnq80vXJbzvjxhKi6v1qBn0Y9rn2jjcveryV8fJ2vgw5qDJEdozjatxAISml8NbSF3eRLz9xnAQ/ObYPAmJ2mh528p2dSroncxyQ/JAqy93jO4/7Xa+hi5A4pQEUjS5f9ZhfJgNoLbhnSfEDKc+8SvrvZDmPI7LMBnfr0vH9nRnUX00To/03mrA862sc8J80ObKlQMXYBq8u3wUql2HQu/JxtGiREKKEMtnOZdZL1evCyARQLlUJGQ7UBkWW3IZEDVcTb4rRFQ8VvGrWvirSAinqF5vLG2jjZexOoFSx6urfNmPpxrGA==',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC+jCCAeKgAwIBAgIVANyEBTqhoX4kNbNCmBpkZk66fkB1MA0GCSqGSIb3DQEBCwUAMBcxFTATBgNVBAMMDFNBTUwtamVua2luczAeFw0yMjA1MjExNzE2NDNaFw0yMzA1MjExNzE2NDNaMBcxFTATBgNVBAMMDFNBTUwtamVua2luczCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAL05XAY+F1uRuFwLLOm/j27x+oLEW0dIr1rus4JcMFCYpdSkTxG5ADlYG0Q6hJkTJuUpHQRwuHiJTb+4Umo8JWdoYPQENq7Dzaf6YFXozaUFaw2ZJOdDEabiCY54wQQUoDYSwmTbRTHlXnLMCFp+SeIOQJsOXpyDTpM62aOk23eB3JGtqftp0HYY5z27uJ+f0nDKRG19sVtFo+v0A18AXuG0u6Ua7WBoyQ2xIJj29B4D6fKlqs2EkWiTFKc5DoKxpWnZakptVrJPzeJy6Cxn6eJa5ggicxIc17hXakIuRcLVkl5mlH6Vk8i6/Xz6Q1CuCmQA/pbjmT/Dq0mf9X6BqqUCAwEAAaM9MDswHQYDVR0OBBYEFI7zBGQdPgLha93NaX0Bmq5B87+CMBoGA1UdEQQTMBGCD2NuPVNBTUwtamVua2luczANBgkqhkiG9w0BAQsFAAOCAQEAoXsU8GjxpBIVkKoo817jl+50/v+ZitcGWTsnq80vXJbzvjxhKi6v1qBn0Y9rn2jjcveryV8fJ2vgw5qDJEdozjatxAISml8NbSF3eRLz9xnAQ/ObYPAmJ2mh528p2dSroncxyQ/JAqy93jO4/7Xa+hi5A4pQEUjS5f9ZhfJgNoLbhnSfEDKc+8SvrvZDmPI7LMBnfr0vH9nRnUX00To/03mrA862sc8J80ObKlQMXYBq8u3wUql2HQu/JxtGiREKKEMtnOZdZL1evCyARQLlUJGQ7UBkWW3IZEDVcTb4rRFQ8VvGrWvirSAinqF5vLG2jjZexOoFSx6urfNmPpxrGA==',
        ],
    ],
    'validate.authnrequest' => false,
    'saml20.sign.assertion' => false,
];

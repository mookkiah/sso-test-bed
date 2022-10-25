<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */


$metadata['https://centos423.gluu.org/idp/shibboleth'] = [
    'entityid' => 'https://centos423.gluu.org/idp/shibboleth',
    'description' => [
        'en' => 'Gluu Inc.',
    ],
    'OrganizationName' => [
        'en' => 'Gluu Inc.',
    ],
    'name' => [
        'en' => 'Gluu Inc.',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Gluu Inc.',
    ],
    'url' => [
        'en' => 'https://centos423.gluu.org',
    ],
    'OrganizationURL' => [
        'en' => 'https://centos423.gluu.org',
    ],
    'contacts' => [],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:mace:shibboleth:2.0:profiles:AuthnRequest',
            'Location' => 'https://centos423.gluu.org/idp/profile/SAML2/Unsolicited/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://centos423.gluu.org/idp/profile/SAML2/POST/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://centos423.gluu.org/idp/profile/SAML2/POST-SimpleSign/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://centos423.gluu.org/idp/profile/SAML2/Redirect/SSO',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://centos423.gluu.org/idp/profile/SAML2/Redirect/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://centos423.gluu.org/idp/profile/SAML2/POST/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://centos423.gluu.org/idp/profile/SAML2/POST-SimpleSign/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://centos423.gluu.org/idp/profile/SAML2/SOAP/SLO',
        ],
    ],
    'ArtifactResolutionService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://centos423.gluu.org/idp/profile/SAML2/SOAP/ArtifactResolution',
            'index' => 1,
        ],
    ],
    'NameIDFormats' => [
        'urn:mace:shibboleth:1.0:nameIdentifier',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIDdjCCAl4CCQDHUGQaLIe6RTANBgkqhkiG9w0BAQsFADB9MQswCQYDVQQGEwJVUzELMAkGA1UECAwCVFgxDzANBgNVBAcMBkF1c3RpbjESMBAGA1UECgwJR2x1dSBJbmMuMRswGQYDVQQDDBJjZW50b3M0MjMuZ2x1dS5vcmcxHzAdBgkqhkiG9w0BCQEWEHN1cHBvcnRAZ2x1dS5vcmcwHhcNMjIwNDE5MDUzMTM3WhcNMjMwNDE5MDUzMTM3WjB9MQswCQYDVQQGEwJVUzELMAkGA1UECAwCVFgxDzANBgNVBAcMBkF1c3RpbjESMBAGA1UECgwJR2x1dSBJbmMuMRswGQYDVQQDDBJjZW50b3M0MjMuZ2x1dS5vcmcxHzAdBgkqhkiG9w0BCQEWEHN1cHBvcnRAZ2x1dS5vcmcwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCqUsaeARvoxQexDvuakeSoJg8tpMRZdz5AExXAYVRjX0T8ioml+54KBsS0YOfd8Gt4MV3KvU82RyqLmwa8rfGBY7FtsjcVDBHB9el1XPZB8TNLe/mYkI6S1RKJQuNxNi7ba4ZZuWNXAS8aHPnzas/KMFFqEXabjN3MCptE3jTNDllg0PLjO09c9kNOeWlmWzEpB5kEkFVTxBKsxHzwfW0ttrhf6OeRrV0do/kyh0i9NyARgn4KBbh1uzWgL9S2OGTUcmjwM1VpCVOJ9L1BtPGOzRHS7ysZ7O11RDarPkztXIk1fK+eUpfRJNnccGnsvSzczF5NccOQfjP03ZHS4sHBAgMBAAEwDQYJKoZIhvcNAQELBQADggEBAEl60/eFm+TO7CWFCCszItvJA2fNgwfuYvFI9VmoChAZhKVp1qng1tBzO6aBzgdJvZ/yp3q+603Wzu0bzlAV16ohgCA+U6ztF7/H7WSZqGKjJ4oXl46C9Hwp6usMn9Kq7kPEGh8vZqqO0krK3z6PRjGsZ0FIZ6c2D+qS+yZbetixLhay+Z9CrnBS1gs641K50cMNKL1Iais2xTtCoSCLSt4Y5h6+HHT6yznUTy/cmdjXyzqQBBBjCIuAfFKoGzVtaA8cyRo6Q6qtKQOu4N8sMDKgEBWrUqk+aft2kQ6WZ6lqUtuOvkxbp/7CIS3XdAzDNe1oRO7YYD7lV6ZHuxzQsXA=',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIDdjCCAl4CCQDTtChkmDkd0jANBgkqhkiG9w0BAQsFADB9MQswCQYDVQQGEwJVUzELMAkGA1UECAwCVFgxDzANBgNVBAcMBkF1c3RpbjESMBAGA1UECgwJR2x1dSBJbmMuMRswGQYDVQQDDBJjZW50b3M0MjMuZ2x1dS5vcmcxHzAdBgkqhkiG9w0BCQEWEHN1cHBvcnRAZ2x1dS5vcmcwHhcNMjIwNDE5MDUzMTM2WhcNMjMwNDE5MDUzMTM2WjB9MQswCQYDVQQGEwJVUzELMAkGA1UECAwCVFgxDzANBgNVBAcMBkF1c3RpbjESMBAGA1UECgwJR2x1dSBJbmMuMRswGQYDVQQDDBJjZW50b3M0MjMuZ2x1dS5vcmcxHzAdBgkqhkiG9w0BCQEWEHN1cHBvcnRAZ2x1dS5vcmcwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQChmRLJD6n5wuG4vn2/R/Toi5IfZXjm2AUxJKbu4lNoNYIVxa7S11GkZb06eE2qPqrNET6IRfJLwWc89sH8z1lEoJYDVq/JsQgIB39Q/YYeb/twvwgNh59PzB9FaDmKEpqwwcqJFtaGNORVGfpOohmcMNW5cXwVLrvPKti8QcoqV4oZiNaGMIwklbIG6g9bziZeIoPDOI4ZbrCxRLsjMB5waSOY8uQTf5uaLhZBpOADaypyfuwc11HsQ7VJMmgGYy+R2q8eWaxWadw2pp0eFG7gcYmCdLLPYO0io66Q/CIJnE2K+5ZQzKMJVvG/rCKSEKnU+GE0GxxC6O5AiHVL56vdAgMBAAEwDQYJKoZIhvcNAQELBQADggEBADXIbbi6rrM60zG4EranlCJORghMnbREby9/4ZjxUHlBktwHM+TSXHTsUn3hz+JW7nJVHpwF87Cx7h2Pbgfs5gCifOC3osb5Da1dHtSYjgfHDBXG6gwPyRtzXzTCONfxQL+U+K41avNdaFDVrJsxZOBIj9IuZJbi5DaflAbpzunXhoZIYimS0hfiz24KG5sarJQAgd48az7PxAxqEqXaxTGTugHmoDCU5MpM9YcXHp43bh9UFwmIJRKTqVdmnfnaM34oomSuKxxijH32F8t3EMjrTp/LwWtE3IvP3gEP4oU3gB6ViHEZgVcxLdXUClOqfDVJBbZchNH5F9XpoFWi4uk=',
        ],
    ],
    'scope' => [
        'centos423.gluu.org',
    ],
];
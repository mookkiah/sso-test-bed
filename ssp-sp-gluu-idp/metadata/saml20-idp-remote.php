<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://mysso-sit.cevalogistics.com/idp/shibboleth'] = [
    'entityid' => 'https://mysso-sit.cevalogistics.com/idp/shibboleth',
    'description' => [
        'en' => 'CEVA Logistics',
    ],
    'OrganizationName' => [
        'en' => 'CEVA Logistics',
    ],
    'name' => [
        'en' => 'CEVA Logistics',
    ],
    'OrganizationDisplayName' => [
        'en' => 'CEVA Logistics',
    ],
    'url' => [
        'en' => 'https://mysso-sit.cevalogistics.com',
    ],
    'OrganizationURL' => [
        'en' => 'https://mysso-sit.cevalogistics.com',
    ],
    'contacts' => [],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:mace:shibboleth:2.0:profiles:AuthnRequest',
            'Location' => 'https://mysso-sit.cevalogistics.com/idp/profile/SAML2/Unsolicited/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://mysso-sit.cevalogistics.com/idp/profile/SAML2/POST/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://mysso-sit.cevalogistics.com/idp/profile/SAML2/POST-SimpleSign/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://mysso-sit.cevalogistics.com/idp/profile/SAML2/Redirect/SSO',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://mysso-sit.cevalogistics.com/idp/profile/SAML2/Redirect/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://mysso-sit.cevalogistics.com/idp/profile/SAML2/POST/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://mysso-sit.cevalogistics.com/idp/profile/SAML2/POST-SimpleSign/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://mysso-sit.cevalogistics.com/idp/profile/SAML2/SOAP/SLO',
        ],
    ],
    'ArtifactResolutionService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://mysso-sit.cevalogistics.com/idp/profile/SAML2/SOAP/ArtifactResolution',
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
            'X509Certificate' => 'MIIDwTCCAqkCFF9GT8H5YWHbEY8VaIQ0itebDnccMA0GCSqGSIb3DQEBCwUAMIGcMQswCQYDVQQGEwJVUzELMAkGA1UECAwCVFgxEDAOBgNVBAcMB0hvdXN0b24xFzAVBgNVBAoMDkNFVkEgTG9naXN0aWNzMSQwIgYDVQQDDBtteXNzby1zaXQuY2V2YWxvZ2lzdGljcy5jb20xLzAtBgkqhkiG9w0BCQEWIF9TSF8tR0wtVVMtQ0pGQENldmFsb2dpc3RpY3MuY29tMB4XDTIxMDgxNDA5NDAwMloXDTIyMDgxNDA5NDAwMlowgZwxCzAJBgNVBAYTAlVTMQswCQYDVQQIDAJUWDEQMA4GA1UEBwwHSG91c3RvbjEXMBUGA1UECgwOQ0VWQSBMb2dpc3RpY3MxJDAiBgNVBAMMG215c3NvLXNpdC5jZXZhbG9naXN0aWNzLmNvbTEvMC0GCSqGSIb3DQEJARYgX1NIXy1HTC1VUy1DSkZAQ2V2YWxvZ2lzdGljcy5jb20wggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCoZnAtQ8+JiduuXIuW6kVN49N4ZWiQ19u4WRRHtjhseVrs3YB6dZpOT7yggqtIohlajpSRBPpvknRtWUxof32PcQHQT2AjE+pSEWJMeJYMx2mHxcP+XLqg/HduQ8YWX9ZUxZH/KmC1j1RWa8dooEQ/XN2hi+xkmGegw+Mqheygu7bXu/BWxY1EKoGRdYzBtPWAofjeTpQYTPLtgPBuAItFkUkiOpZKvlw53nZ5PRcc816vsuEqyl59lOpyFkrOX/agwXJVlbS/EaggALOPjqnp+IRcyDlWUKJYSsVRTmjqzW/hqlCPcmHUFT7BySBT8IfzQIZUJ0ZUR5z0rqiW9KZvAgMBAAEwDQYJKoZIhvcNAQELBQADggEBAF6QKJ8XDqTOn67ZqYgzffjpInTBgZH3+zJq1wwFRdY4Zx6mBa0H0n09R1IXWDmuL+ajCdclgPn0qmB0AkhV+DA3TSJ8z7yEmU3rj97Pztx0qCckwzm4CS9YGy1y6Bm3w8D9tm3I+O9eni0EFY2AzZQK63j/8svkZSUdUTdytqUz2T45APhPN2SZQnmGLxJlDxNUD2ZOQrHRhsLyRZ4HXtFnrnBfuUMff2BPu/fAvuKDxsV/mH1X7MJgEK/FkmhQR7MLVx9h5e4AvdDTtFAgMni03fsldREpjIsRxau8Fl2wOUvpP9zf33QOX08QBd7fd9bI8AXB0x7ZVoXn0vNXvcY=',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIDwTCCAqkCFAjAN19gcmk+CNIKfGq/Fb8W2kuuMA0GCSqGSIb3DQEBCwUAMIGcMQswCQYDVQQGEwJVUzELMAkGA1UECAwCVFgxEDAOBgNVBAcMB0hvdXN0b24xFzAVBgNVBAoMDkNFVkEgTG9naXN0aWNzMSQwIgYDVQQDDBtteXNzby1zaXQuY2V2YWxvZ2lzdGljcy5jb20xLzAtBgkqhkiG9w0BCQEWIF9TSF8tR0wtVVMtQ0pGQENldmFsb2dpc3RpY3MuY29tMB4XDTIxMDgxNDA5NDAwM1oXDTIyMDgxNDA5NDAwM1owgZwxCzAJBgNVBAYTAlVTMQswCQYDVQQIDAJUWDEQMA4GA1UEBwwHSG91c3RvbjEXMBUGA1UECgwOQ0VWQSBMb2dpc3RpY3MxJDAiBgNVBAMMG215c3NvLXNpdC5jZXZhbG9naXN0aWNzLmNvbTEvMC0GCSqGSIb3DQEJARYgX1NIXy1HTC1VUy1DSkZAQ2V2YWxvZ2lzdGljcy5jb20wggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDgJfm4nXO1r4mKoGooKRjV69PW4hMkUAlAVLLsJ7C6UB1X/V/OW3mOQWeyI5LjOzRm2x4uJq/RZvQSUPSZdLRjuUvRYLSqoxLZYdkKaOK5vyf/1xBvSP/ZNu+UVFLRg/v9y+O+cf8TMvGo0ROXKxyoGcDsG8GVxnU+BJ0Ee4x8MjxVlXk6FrCkJVm1JPU3Kyfwre5QSAUcCIFW/FGN8/D6njqS+163y+LpQxyjo5MHF9+WY0P2zk5gXIb9g4sSv3+T1RrzAoGb+wTmfCkqmDuN9xzAzm+9JJ/nnKwLZ04tYBStQGVk9a4FtAJFVsiP3dG2YaxXWmLsckSIRZkYS4NlAgMBAAEwDQYJKoZIhvcNAQELBQADggEBAFTw6O0UU6h57jf8ExOud2tRTM845c4ntxbEwioa2GoxsMddRoQHpYAh/xBH5LRPS0zzejNeZwjDwpQkGGcZF0qRf74djrN9t0L2p6YprvtrX8VmrThMU2nKOp6zedRB2BLDMEzSQzR/Pwj0wpNjAOM6NjoSnQmqEPQGzKCtF/FqK2FQVhbgL+mx9YfhG+8iRq/RZJK851Iy0lNRchmz8B2OrBiPx0LykoqVn1Y4SI74OxFs8PaBGKIiEqZP7hUalVx2jGeBURgvQ9ieSYUs2DnKF5Y1Vt1e+61jfeg1JdnLe5ZnqPwxLzYNnq5po/ndL1haYH5fKS1qEYr7hkZ9dOg=',
        ],
    ],
    'scope' => [
        'mysso-sit.cevalogistics.com',
    ],
];


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
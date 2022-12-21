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
            'X509Certificate' => 'MIIEFzCCAv+gAwIBAgIUImZsaGddYAiO1TrDE4YkEkW4zLUwDQYJKoZIhvcNAQELBQAwgZwxCzAJBgNVBAYTAlVTMQswCQYDVQQIDAJUWDEQMA4GA1UEBwwHSG91c3RvbjEXMBUGA1UECgwOQ0VWQSBMb2dpc3RpY3MxJDAiBgNVBAMMG215c3NvLXNpdC5jZXZhbG9naXN0aWNzLmNvbTEvMC0GCSqGSIb3DQEJARYgX1NIXy1HTC1VUy1DSkZAQ2V2YWxvZ2lzdGljcy5jb20wHhcNMjIwODE1MTQzNDIxWhcNMjcwODE0MTQzNDIxWjCBnDELMAkGA1UEBhMCVVMxCzAJBgNVBAgMAlRYMRAwDgYDVQQHDAdIb3VzdG9uMRcwFQYDVQQKDA5DRVZBIExvZ2lzdGljczEkMCIGA1UEAwwbbXlzc28tc2l0LmNldmFsb2dpc3RpY3MuY29tMS8wLQYJKoZIhvcNAQkBFiBfU0hfLUdMLVVTLUNKRkBDZXZhbG9naXN0aWNzLmNvbTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAMJ/HpfIanE4G8VlpJPFXyh15I6MtbKtdGPViqfnqf3t580JhZo1BQ59fYHDWvG5kEnjBS4J5b7ha7bf8bgMmmBjV9B/YTP9jqgX8EEZcZCLE/dER7xTCBu+KZksOYgVTjWEoEAWDQpQgwWHyKOVwo4ubNARlUjEjNoF2+7LsESFsuGPv31ix+xF1u8w3jFm/Kkdy5isf19NTsDzsy/H/0XeuqmP1Vr4N8xX6oX29jeC4Y8yzyX3YmBqrprWpc0YdwPzA6umUEtY6B6SpbZ4PkWInUOMrD3z1s+r56f2/x67Dd2cmoCcr/pJVcFciR+ekpZ5KSPUZHClxK0TxBltleMCAwEAAaNPME0wCQYDVR0TBAIwADAzBgNVHREELDAqggtpZHAtc2lnbmluZ4IbbXlzc28tc2l0LmNldmFsb2dpc3RpY3MuY29tMAsGA1UdDwQEAwIF4DANBgkqhkiG9w0BAQsFAAOCAQEAdNPm3KKoCBTaf6dWOBjdBvWonhooyteVMUAzbu+1xsFQ5LcY4Mw0Ce8I4SURqMIlZPIwQF+g5eeHHaoC3h7/8yJl+reJI1D2/1iiALOEc57z2oNXIazeD/L4+aToHXENzXIMGpbR0CfLw7rir51mxIy9JvYGLhZoi+yd1ZVym6rGNsTzd6oONQfMis2Pch0+bki2R4J67cdj0WqVIc5NZH+OEKmRj75pZZjcK0j1lW0d5zGg/po0DO6u4M9tVkyx/yjbU5Wka+Gan350s4d4T0cqiPFI0GtRdPGjnKFSIZQ+xiM/jydY0WuC+2zCAnN+4G0LninInEtEcgJCkDpvxA==',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEGjCCAwKgAwIBAgIUcrnzCRfOoh6rEdvGhUSUmwUQ4h8wDQYJKoZIhvcNAQELBQAwgZwxCzAJBgNVBAYTAlVTMQswCQYDVQQIDAJUWDEQMA4GA1UEBwwHSG91c3RvbjEXMBUGA1UECgwOQ0VWQSBMb2dpc3RpY3MxJDAiBgNVBAMMG215c3NvLXNpdC5jZXZhbG9naXN0aWNzLmNvbTEvMC0GCSqGSIb3DQEJARYgX1NIXy1HTC1VUy1DSkZAQ2V2YWxvZ2lzdGljcy5jb20wHhcNMjIwODE1MTQzNDIxWhcNMjcwODE0MTQzNDIxWjCBnDELMAkGA1UEBhMCVVMxCzAJBgNVBAgMAlRYMRAwDgYDVQQHDAdIb3VzdG9uMRcwFQYDVQQKDA5DRVZBIExvZ2lzdGljczEkMCIGA1UEAwwbbXlzc28tc2l0LmNldmFsb2dpc3RpY3MuY29tMS8wLQYJKoZIhvcNAQkBFiBfU0hfLUdMLVVTLUNKRkBDZXZhbG9naXN0aWNzLmNvbTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANUmqcWZphMuZzfj6PpAbMdri+cEpb/VydutSS0QBpcbaZoSdCe1zydAZRMCOVGK5SrnKNlVM0zrr2DRbN+vQQcpBQQA7zNqoiX4AKsz4XdEi7nEO8v4JBpap+M8HEtHg1XrRIUR4APaQqCqrIa9VPU9u0SHEJMid2Ih7JArMCRnciDViW+GGqmy3mnKtsINU+YGbxq9NIyxiIWVDNBpcMn1oAo/W3v/zYIJ0GD9k5K6nllOsZaWu8G52/bmdXlZhXiGO1HblPIwnwQXy2vLOqaTvDjvsvQDhHMt6QT+1Bo0RxMLTj+A1mJSlMWJBQOQRhFEHoLsrrTAe5FkKbLNFukCAwEAAaNSMFAwCQYDVR0TBAIwADA2BgNVHREELzAtghtteXNzby1zaXQuY2V2YWxvZ2lzdGljcy5jb22CDmlkcC1lbmNyeXB0aW9uMAsGA1UdDwQEAwIF4DANBgkqhkiG9w0BAQsFAAOCAQEAoTLuhTaFMa+9lw8wqiF+8HYtYrK6BhmUnJ9ZJPYUvf0W+DKxapZxiuYfVjnHGyKnr9vPnzj+kw5vaQCAFa4rmQZ09xe1FnvXXdftwIwvTIc5LHATzsaxN6lB8mYa8s9pANY8+jcc8z+UwUOw8yy9J/zPUhn2TtQH0969OgfU0ZNwKRlg0LLZAParL5Y1kIl5o94RdhcyNKq3gjARGrz8hwKGmm7v0643Sz6lDtXdO6cvlTYRKcJb23wvh12tP5GsjM+5O3JSV2YQVijMVXepEr9j+uKL1PytYd+A/x+tCxxAY++Dq+TWYnfZ2b0v6cK3bkjPV2ocJymRz+5NKxZFsw==',
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



$metadata['https://testshibcn.gluu.info/idp/shibboleth'] = [
    'entityid' => 'https://testshibcn.gluu.info/idp/shibboleth',
    'description' => [
        'en' => 'testshibcn.gluu.info',
    ],
    'OrganizationName' => [
        'en' => 'testshibcn.gluu.info',
    ],
    'name' => [
        'en' => 'testshibcn.gluu.info',
    ],
    'OrganizationDisplayName' => [
        'en' => 'testshibcn.gluu.info',
    ],
    'url' => [
        'en' => 'https://testshibcn.gluu.info',
    ],
    'OrganizationURL' => [
        'en' => 'https://testshibcn.gluu.info',
    ],
    'contacts' => [],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:mace:shibboleth:2.0:profiles:AuthnRequest',
            'Location' => 'https://testshibcn.gluu.info/idp/profile/SAML2/Unsolicited/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://testshibcn.gluu.info/idp/profile/SAML2/POST/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://testshibcn.gluu.info/idp/profile/SAML2/POST-SimpleSign/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://testshibcn.gluu.info/idp/profile/SAML2/Redirect/SSO',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://testshibcn.gluu.info/idp/profile/SAML2/Redirect/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://testshibcn.gluu.info/idp/profile/SAML2/POST/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://testshibcn.gluu.info/idp/profile/SAML2/POST-SimpleSign/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://testshibcn.gluu.info/idp/profile/SAML2/SOAP/SLO',
        ],
    ],
    'ArtifactResolutionService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://testshibcn.gluu.info/idp/profile/SAML2/SOAP/ArtifactResolution',
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
            'X509Certificate' => 'MIIDyjCCArKgAwIBAgIUHCmxfddtNpRcpg2i0KjRddG35GowDQYJKoZIhvcNAQELBQAwejELMAkGA1UEBhMCVVMxCzAJBgNVBAgMAlRYMQ8wDQYDVQQHDAZBdXN0aW4xDTALBgNVBAoMBEdsdXUxHTAbBgNVBAMMFHRlc3RzaGliY24uZ2x1dS5pbmZvMR8wHQYJKoZIhvcNAQkBFhBzdXBwb3J0QGdsdXUub3JnMB4XDTIyMTEyNjAzNTg0MloXDTIzMTEyNjAzNTg0MlowejELMAkGA1UEBhMCVVMxCzAJBgNVBAgMAlRYMQ8wDQYDVQQHDAZBdXN0aW4xDTALBgNVBAoMBEdsdXUxHTAbBgNVBAMMFHRlc3RzaGliY24uZ2x1dS5pbmZvMR8wHQYJKoZIhvcNAQkBFhBzdXBwb3J0QGdsdXUub3JnMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxoNeCPFFSeoi2Q59uPv/zGGeTpFquTsOmA3dc0IBS++SJetpjRfWyzHIdrwEFOfwAJRPEeNKqz93d1EPAvQt4csTSc8IYP9ixhTR+yJNapZ40gTeyHJas212XZOqqXrXiePIHnGzP6F0gqSd7bDoCT6fde4AaNf0fRm/3h0knqWALj0Q4U1N8cPYuk9HQaCrullvoOOJE/90pscy5SRfoiFalloaxb+kuMzlzVv4BZ7SWlBuYovov9iAbnMbHdm8P+AkBmvuz86BnXoicsNYamnppDdpBEVyXKTyUmA7EgEvfGai6d+qA50QT156MOltShgH81PnWbqp0d7a75I5XwIDAQABo0gwRjAJBgNVHRMEAjAAMCwGA1UdEQQlMCOCFHRlc3RzaGliY24uZ2x1dS5pbmZvggtpZHAtc2lnbmluZzALBgNVHQ8EBAMCBeAwDQYJKoZIhvcNAQELBQADggEBADXNII9OxFGHxavnOeEd7YZmUkPEv+NCChJh5aFxcXrMiTn0Qwd1KlgCVNdUnGSLt4XTVJYXPGBZ5PtJveabwLAJg5MH/Obs0jBySgzLjTxkrZOOwbIIkZt6skh19PzKF174cG4WN4QSxr41QV7LDZJ++ioMcBYYilDKt7Wu3nMI4DEgptXOA5Oo0RXoSggGfk+RXIB0tN5REsbVT3UWDPHjtQRlznOYEEQFEjbphM8M2qjIgyOcnhXxajL2hYxjo0x88EmoCa020t1JzbbriIb/d7txat08fYmaJh59lRiV5XrWoBafEbgQcOGGDx6Aj2t7WD0mfv4famNV4yiKbpI=',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIDzTCCArWgAwIBAgIUerl+6tlySY5e5RrL+U4DLRcpP1UwDQYJKoZIhvcNAQELBQAwejELMAkGA1UEBhMCVVMxCzAJBgNVBAgMAlRYMQ8wDQYDVQQHDAZBdXN0aW4xDTALBgNVBAoMBEdsdXUxHTAbBgNVBAMMFHRlc3RzaGliY24uZ2x1dS5pbmZvMR8wHQYJKoZIhvcNAQkBFhBzdXBwb3J0QGdsdXUub3JnMB4XDTIyMTEyNjAzNTg0M1oXDTIzMTEyNjAzNTg0M1owejELMAkGA1UEBhMCVVMxCzAJBgNVBAgMAlRYMQ8wDQYDVQQHDAZBdXN0aW4xDTALBgNVBAoMBEdsdXUxHTAbBgNVBAMMFHRlc3RzaGliY24uZ2x1dS5pbmZvMR8wHQYJKoZIhvcNAQkBFhBzdXBwb3J0QGdsdXUub3JnMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwLZYBPDUGyDw5Pg6iu4zOkCngSA855uLzi8xGrSDfsrOmCYoookRat5PeXTnVOHfTgrt/nr4rIYbhgBW42yEec10yp+cRUaSCjMat5fB/TZYfMecpA7d+dOF0Nq3kh6vTpBCz8qItZ8EhBsCN5C8a2uzkRysNPzCL4dTdAOnM+0C86czABP5DNPUwTgh/uOtvUwGhO7X3BRP2ooBfHSd+04k6I7Kz75aCyx3CJ+rwlyyTMyNfjLHsk2S7Hhph+T0OPi0BZ7Yma3N6NAmEx07GykOD2wk4kL/BYkCluuRKtew/gsvhaBeSNR5mphQrsaED7TXVjBXpzSAKSLewxxizwIDAQABo0swSTAJBgNVHRMEAjAAMC8GA1UdEQQoMCaCDmlkcC1lbmNyeXB0aW9ughR0ZXN0c2hpYmNuLmdsdXUuaW5mbzALBgNVHQ8EBAMCBeAwDQYJKoZIhvcNAQELBQADggEBALMRcpnGmVrsvL9929uqtgC13HYqHJGzxqHRcIbIrXvav98x3BNw261pCOpQuz0+nZs2whkwHKR6p1K6D21BuTw3c+bP4OVJptZSwuyQbkCtU+w6LjNj35WS7VtxFrQ33AIZEGaoMsWkWNMyRshA4dRVz1vuL8OpkaBRGPKRjPZmTl022DjAxC3oTOLC8LXWH2yhaW2hmu2nHuCn+Z2oc8ui9iH2eEtonHjhVIusPcBDdFYoz3mgjQYIRHwTAcntXNNzeP1CFsjhxuoOOzyJHLb0YYZPKteBm1lxRUaSRrDeRWS30YL9tbeMbxy/8qp9I4d9pikmEMHupGbJtVlHplw=',
        ],
    ],
    'scope' => [
        'testshibcn.gluu.info',
    ],
];


$metadata['https://latest441.gluu.info/idp/shibboleth'] = [
    'entityid' => 'https://latest441.gluu.info/idp/shibboleth',
    'description' => [
        'en' => 'latest441 Gluu Inc.',
    ],
    'OrganizationName' => [
        'en' => 'latest441 Gluu Inc.',
    ],
    'name' => [
        'en' => 'latest441 Gluu Inc.',
    ],
    'OrganizationDisplayName' => [
        'en' => 'latest441 Gluu Inc.',
    ],
    'url' => [
        'en' => 'https://latest441.gluu.info',
    ],
    'OrganizationURL' => [
        'en' => 'https://latest441.gluu.info',
    ],
    'contacts' => [],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:mace:shibboleth:2.0:profiles:AuthnRequest',
            'Location' => 'https://latest441.gluu.info/idp/profile/SAML2/Unsolicited/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://latest441.gluu.info/idp/profile/SAML2/POST/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://latest441.gluu.info/idp/profile/SAML2/POST-SimpleSign/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://latest441.gluu.info/idp/profile/SAML2/Redirect/SSO',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://latest441.gluu.info/idp/profile/SAML2/Redirect/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://latest441.gluu.info/idp/profile/SAML2/POST/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://latest441.gluu.info/idp/profile/SAML2/POST-SimpleSign/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://latest441.gluu.info/idp/profile/SAML2/SOAP/SLO',
        ],
    ],
    'ArtifactResolutionService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://latest441.gluu.info/idp/profile/SAML2/SOAP/ArtifactResolution',
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
            'X509Certificate' => 'MIID3TCCAsWgAwIBAgIUJge9gz6/oJgZYR9RDIYoBInRHXowDQYJKoZIhvcNAQELBQAwfjELMAkGA1UEBhMCVVMxCzAJBgNVBAgMAlRYMQ8wDQYDVQQHDAZBdXN0aW4xEjAQBgNVBAoMCUdsdXUgSW5jLjEcMBoGA1UEAwwTbGF0ZXN0NDQxLmdsdXUuaW5mbzEfMB0GCSqGSIb3DQEJARYQc3VwcG9ydEBnbHV1Lm9yZzAeFw0yMjEwMDYxNzM1MzlaFw0yMzEwMDYxNzM1MzlaMH4xCzAJBgNVBAYTAlVTMQswCQYDVQQIDAJUWDEPMA0GA1UEBwwGQXVzdGluMRIwEAYDVQQKDAlHbHV1IEluYy4xHDAaBgNVBAMME2xhdGVzdDQ0MS5nbHV1LmluZm8xHzAdBgkqhkiG9w0BCQEWEHN1cHBvcnRAZ2x1dS5vcmcwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDPCc6sCwUD5YSBzAssSKAQSDOLixLCG/dLZ3eF9FIzR5jLibV0f/kbWA96VkFgBEvsBizs18JnoeriNJ1sNOsRTvaqtlbST5Y7pihMTAAU6jNT8HQPwJzrrPJECtF/IgFS+uUVsffH4cAMXSl+vvWncFcVAvS1smkQDPshi/jJdP3nWD11Zxsl0/VhpWOnah10vuHaR1bCca5sLf7alc1m2YRyMpXKa3+kI+LLTw4EbEZV9Nh++IPVUk0NQAtZhSey9FFuL+yrEa5FN+sQZWsSNo9/MHysLeKwg6vwiwpBez3HK1UTII8w0dTDe2zVQlBepVuBQCzZJd6Owqzu7YSVAgMBAAGjUzBRMB0GA1UdDgQWBBRXwY6APOfYuLeGl2oEvu6818KTbTAfBgNVHSMEGDAWgBRXwY6APOfYuLeGl2oEvu6818KTbTAPBgNVHRMBAf8EBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBAQBdX79pnw1beo0mYK2/25CZ7uZgFiKXjsBNiDNZpnVz3bZZVUiDyxTYpXdYhB+AgqLTVOY2+Sn3HKxMBV1pcG1eV5zZlj5Mss6FLpTNPjWVg2Qc1DlfZl0y0m56qjoz1Vx9MOM88hgc8+6KlzT1g4Lat1HKniJqQPEbbHpjOVajFxoE6u7Ru75AvzWqts3b0TZ+GkgBenigNSDAa8gk7C2hS9nflYJVNz9/+qhSOP22b3BLVg97XuFpzQMu3geoJO+1faF6VlnCBycDtJI89YEM4g/OxZMkC+nBJWe8cN9c1Yz3zymBNmgR7ZUu0JvhWHgX/+7418Y+16QGPc733XUc',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIID3TCCAsWgAwIBAgIUFzKOPJUri3Kq0b1gy4NcUB1AFkYwDQYJKoZIhvcNAQELBQAwfjELMAkGA1UEBhMCVVMxCzAJBgNVBAgMAlRYMQ8wDQYDVQQHDAZBdXN0aW4xEjAQBgNVBAoMCUdsdXUgSW5jLjEcMBoGA1UEAwwTbGF0ZXN0NDQxLmdsdXUuaW5mbzEfMB0GCSqGSIb3DQEJARYQc3VwcG9ydEBnbHV1Lm9yZzAeFw0yMjEwMDYxNzMzMjlaFw0yMzEwMDYxNzMzMjlaMH4xCzAJBgNVBAYTAlVTMQswCQYDVQQIDAJUWDEPMA0GA1UEBwwGQXVzdGluMRIwEAYDVQQKDAlHbHV1IEluYy4xHDAaBgNVBAMME2xhdGVzdDQ0MS5nbHV1LmluZm8xHzAdBgkqhkiG9w0BCQEWEHN1cHBvcnRAZ2x1dS5vcmcwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQC9VGz8bHlLuscVJolZwq6lJYS+Bu8XQAPYPmjggFtyR7bnOPtXE+nhfvsmVadKhe0Id116YqeNsLm1kwju7LjYhHYhCDz/oTsH0uM2h/LND6tkEti6aR0GFwwZg6KjRvTT117nNc8kdd+nHx9sjrKQ+DHlEatSATW6wRwX0BfpLE1DuLs79lPh0LGSgWsHjbgfCTwI9TqfV1bwEzGTKWZ2hb+oJ4HhyCcVLSIsvVcyyAkW5VlNyibzV+32jlP00nzSPCaglztVFR4K3i3hGjkCBuqCXz+WNLXgE0qaoK90bXvrcO+Ir5w716UPbkKSTJ9GdiEm/ptYmSZ8RwhJCcL9AgMBAAGjUzBRMB0GA1UdDgQWBBR7xhFICGqyk1EwnDIq0MHe6RxeTDAfBgNVHSMEGDAWgBR7xhFICGqyk1EwnDIq0MHe6RxeTDAPBgNVHRMBAf8EBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBAQBp/1lub8WKMFkYzmp0tRFQ9k0xvZfYjJv2mzaEDGOCl0Px870t8OZn2tnAMx3XMD/mpb2Kyj4SoFiVvAKN217MvGdE6GcjLtnJhUGMWJJ6SiZUDCnWOytytRWEEFlmVpCLBUli07Yh526ImD854l55i+ff+V3lja2LtONrjjmGcu9w7/scdC2OUEBlmOPTwhJv5LgUYtM+F/EUUOZCY+b9hTkgT55k8yYTmdlOenxnasaMHyD7i82AhERnj5natjl2pxRI0A6Bts+75YCfjROftJ6pU933Mm/CLa+eyWnBWhBUFwtOgcEK1dyq1C6t8rSZwNphV/bIw8s7L1Q5jQFi',
        ],
    ],
    'scope' => [
        'latest441.gluu.info',
    ],
];
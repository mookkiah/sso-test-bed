<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://ssp-idp.mm-local.com/simplesaml/saml2/idp/metadata.php'] = [
    'metadata-set' => 'saml20-idp-remote',
    'entityid' => 'https://ssp-idp.mm-local.com/simplesaml/saml2/idp/metadata.php',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://ssp-idp.mm-local.com/simplesaml/saml2/idp/SSOService.php',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://ssp-idp.mm-local.com/simplesaml/saml2/idp/SingleLogoutService.php',
        ],
    ],
    'certData' => 'MIIEDDCCAvQCCQCAj36VTq0mEjANBgkqhkiG9w0BAQ0FADCBxzELMAkGA1UEBhMCVVMxEDAOBgNVBAgMB0Zsb3JpZGExFTATBgNVBAcMDEphY2tzb252aWxsZTEOMAwGA1UEEQwFMzIyMTYxGzAZBgNVBAkMEjQyMjEgTWFyYmxld29vZCBsbjEQMA4GA1UECgwHTU0gTGFiczEWMBQGA1UECwwNSVQgRGVwYXJ0bWVudDEVMBMGA1UEAwwMbW0tbG9jYWwuY29tMSEwHwYJKoZIhvcNAQkBFhJhZG1pbkBtbS1sb2NhbC5jb20wHhcNMjIwNTE0MTgxMjE2WhcNMjIwNjEzMTgxMjE2WjCBxzELMAkGA1UEBhMCVVMxEDAOBgNVBAgMB0Zsb3JpZGExFTATBgNVBAcMDEphY2tzb252aWxsZTEOMAwGA1UEEQwFMzIyMTYxGzAZBgNVBAkMEjQyMjEgTWFyYmxld29vZCBsbjEQMA4GA1UECgwHTU0gTGFiczEWMBQGA1UECwwNSVQgRGVwYXJ0bWVudDEVMBMGA1UEAwwMbW0tbG9jYWwuY29tMSEwHwYJKoZIhvcNAQkBFhJhZG1pbkBtbS1sb2NhbC5jb20wggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDJpjo4Wy/4+DxR8lAk/mNzFF1ljcX7WT9MiYmewFx5oqXynaznV3Lz3xk7qoNcGWPadlzTJaHqqJXDe/QgSAMz31QcdTB7k3jHx90hTBrYvreq0FOJKQGEKkLIh9ZPN4sNpkm6beFotUbLOaFWV7UaW5QmkMWla1qTNSHUMVqrdtfHp+ZU+7/UaKaHZfjBbbeUkcS1mvYvVY4PgvPdjD2F/sR6hPBo1D/SALIysuQP+JqhhP3QJjm/GbYTNvzQeRBXJiySOk+el0A5STGnkR3av42sNIxvIRlWw+1egtnbrYk1XEDR3zNqFVp1zEMnflmRg+uAkAAYtTbVNTmDTEA9AgMBAAEwDQYJKoZIhvcNAQENBQADggEBAAccm5aC6lGcW4iTpDqmvduTTvhTLjGqliD8zt7nLg9zq5iZaQNGucDF4oVNV/mR8LkTqfv8A4qXBzBIznU+B2QBBBuD5Ta9YIrw/VnIBjgPwHY86VLjRv+em+BC/Fib9hrbjwjE3wNRXt2dXjP1qrZBb97T6cXydAqO0o+zdsUTNmNrUmI3q2dyeVAAcigjThKKrovpJwFHeSREqmiqmyMYcYK/ywNiX99ZPWfdGu5EuhJvcP/q5XjmiED1u4R5ebdY+L1mRdLII9pyb85LUWRdnQaWZBfWK47AEahCK2Bqw+Nboj8NxGTuGHMxIiNhMSILspQLftUfDuz5zHtIDxw=',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    'contacts' => [
        [
            'emailAddress' => 'admin@mm-local.com',
            'contactType' => 'technical',
            'givenName' => 'Administrator',
        ],
    ],
];


$metadata['https://accounts.cevalogistics.com/idp/shibboleth'] = [
    'entityid' => 'https://accounts.cevalogistics.com/idp/shibboleth',
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
        'en' => 'https://accounts.cevalogistics.com',
    ],
    'OrganizationURL' => [
        'en' => 'https://accounts.cevalogistics.com',
    ],
    'contacts' => [],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:mace:shibboleth:2.0:profiles:AuthnRequest',
            'Location' => 'https://accounts.cevalogistics.com/idp/profile/SAML2/Unsolicited/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://accounts.cevalogistics.com/idp/profile/SAML2/POST/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://accounts.cevalogistics.com/idp/profile/SAML2/POST-SimpleSign/SSO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://accounts.cevalogistics.com/idp/profile/SAML2/Redirect/SSO',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://accounts.cevalogistics.com/idp/profile/SAML2/Redirect/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://accounts.cevalogistics.com/idp/profile/SAML2/POST/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://accounts.cevalogistics.com/idp/profile/SAML2/POST-SimpleSign/SLO',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://accounts.cevalogistics.com/idp/profile/SAML2/SOAP/SLO',
        ],
    ],
    'ArtifactResolutionService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://accounts.cevalogistics.com/idp/profile/SAML2/SOAP/ArtifactResolution',
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
            'X509Certificate' => 'MIIDvzCCAqcCFGku1sF5HX2XDLkDbqi/IV9ysZ/LMA0GCSqGSIb3DQEBCwUAMIGbMQswCQYDVQQGEwJVUzELMAkGA1UECAwCVFgxEDAOBgNVBAcMB0hvdXN0b24xFzAVBgNVBAoMDkNFVkEgTG9naXN0aWNzMSMwIQYDVQQDDBphY2NvdW50cy5jZXZhbG9naXN0aWNzLmNvbTEvMC0GCSqGSIb3DQEJARYgX1NIXy1HTC1VUy1DSkZAQ2V2YWxvZ2lzdGljcy5jb20wHhcNMjEwNjMwMDE0ODU1WhcNMjIwNjMwMDE0ODU1WjCBmzELMAkGA1UEBhMCVVMxCzAJBgNVBAgMAlRYMRAwDgYDVQQHDAdIb3VzdG9uMRcwFQYDVQQKDA5DRVZBIExvZ2lzdGljczEjMCEGA1UEAwwaYWNjb3VudHMuY2V2YWxvZ2lzdGljcy5jb20xLzAtBgkqhkiG9w0BCQEWIF9TSF8tR0wtVVMtQ0pGQENldmFsb2dpc3RpY3MuY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA3hqZ1L+6BgFmemJKbJ5ERRzXIyABEUJUeqrrSSzkOmGEklMk83aWn89ssaxai/gkWrSDaJfhWyfONq9VRiC4BnlYbo/lPu85At6Gz3msnwo8klVqEJRTdkGfQ/v0LhOJzE7DlJzIjaEw5Ib/n85sBEQtE4t0Q1NEmMtNZ//tc0DqOySKK/2B7pivhhpGRk2zonausBAQqdY2ggjRriu2/ZMBh7JY9LDe09obf8BDg+dEFq1arOyJ5Tu/MkjbOL8IrBe/xOhXmXJFyC6RFxo06n+BHoj2JcEi3sQEZ8Ns4BJieE1Cg9loAl5eReVWamh9El4EUijztlzepRf9U8JP+QIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQCWQVuIQwcZGlrr0lfXPEfJrXzgVnfdh4taEprAa6Zuj142Tiw1PrpLslSrX1DjKMQ31p426GBNqn6kE8fZq0Zwwjxcgn5YTDiC+htEW39PvWQQFmcujBJVg2iMTKe1CiKS0Z2uoTe0sMkHH4fMDzPqK48kaVC4noplDY+Giyt3QJnqpkB3RCuVq8zPxMKUA03xbZzqmf8DspaxANYlXbP5vd3ku8mRjmL7ZCq+dKXQNURwPC9fIi3DXIFdf1z7KMk9TdUnSxk2Uf7O+RWGY7BFITQH9vBArC6W3iiLlKhaUP/aYZc+NuVdoCuLmavDDu7ILO3FITiIfsxtfgtjV7R0',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIDvzCCAqcCFFqwZ9AHI6PkPhUeXWae60pfOQUgMA0GCSqGSIb3DQEBCwUAMIGbMQswCQYDVQQGEwJVUzELMAkGA1UECAwCVFgxEDAOBgNVBAcMB0hvdXN0b24xFzAVBgNVBAoMDkNFVkEgTG9naXN0aWNzMSMwIQYDVQQDDBphY2NvdW50cy5jZXZhbG9naXN0aWNzLmNvbTEvMC0GCSqGSIb3DQEJARYgX1NIXy1HTC1VUy1DSkZAQ2V2YWxvZ2lzdGljcy5jb20wHhcNMjEwNjMwMDE0ODU1WhcNMjIwNjMwMDE0ODU1WjCBmzELMAkGA1UEBhMCVVMxCzAJBgNVBAgMAlRYMRAwDgYDVQQHDAdIb3VzdG9uMRcwFQYDVQQKDA5DRVZBIExvZ2lzdGljczEjMCEGA1UEAwwaYWNjb3VudHMuY2V2YWxvZ2lzdGljcy5jb20xLzAtBgkqhkiG9w0BCQEWIF9TSF8tR0wtVVMtQ0pGQENldmFsb2dpc3RpY3MuY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxbkV9TeNDSUjIikxy5RaWv9STmvTCGGxqEOp5GzqTNB5rXjnyhmOCWfkk8Kcbb73VyBM6SZI2pDUyCC1yggvC4aekDNp8ndwFAezZaoh6sOuBf2DKocK+SqtKpj8j6zwDW/zJYPuY/P0pnSOzmEwdlVyB6u/oOnHuhLYupMSsQygMTnB7rmkiko+oxUUNHk4ZPnCuD2hhU6VsErntsmds4bCo+us51bW0ayJHUURfY/FVSbZU4Fi11SeJPSik6vwJ8K57UrcldjMpEUkTXwZ0zovA5iyGwCaw+jzr1AgECYAgnUKMCxdKN+/jf+goRQRsRfZrHLD1OQ9EpL3QUOwiQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQAUWDJfGJmLolLGw1lfGuYb8QlKK0oE+UiGbqBhJZ4ZPSB7MaBJxnQO5G+27ibVg5Tg6W+lx0bZY3bBPKbaCg82fstAGpZfNUKaNU5gfMSSPz5tNbn3WVZxZf9cgqJun9Fr/dz34b04S99iz7CDaZCM/5SBgOlangzM5YkJWdL+dCoApHR/7sN6qXjjjcpQ9JwCKSRB2xkiUVXYL5DFDL6oNX2GBgwFRV2ApV4AL9OkRiDawBmoOk+3tVnI6jE3bHPpJZIIQ0oeI/t0xizrpcqX4SNT1I1yYAQhT7KM+Tn4U+lKoZrzbCSDFnkAZnwqGyQ01reOPKAcBQXwKQ1NT7S4',
        ],
    ],
    'scope' => [
        'accounts.cevalogistics.com',
    ],
];
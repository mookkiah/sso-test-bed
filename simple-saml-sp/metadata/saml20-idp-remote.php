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

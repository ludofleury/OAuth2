<?php

namespace OAuth2\AuthorizationCodeGrant\AccessToken;

/**
 * Access token request interface
 *
 * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.4.1.3 Authorization grant flow
 * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.4.3.2 Resource Owner Password Credentials Grant flow
 *
 * @author Ludovic Fleury <ludo.fleury@gmail.com>
 */
interface RequestInterface
{
    /**
     * Return the grant type
     *
     * REQUIRED - Value MUST be set to authorization_code
     *
     * @api
     *
     * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.4.2.2 Authorization grant flow
     *
     * @return string A string with the value "authorization_code"
     */
    public function getGrantType();

    /**
     * Return the authorization code
     *
     * REQUIRED - Code delivered
     * by the authorization server to (and provided by) the client
     *
     * @api
     *
     * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.4.1.2 Authorization Response
     *
     * @return string The authorization code
     */
    public function getCode();

    /**
     * Return the redirect uri
     *
     * REQUIRED (if the redirect_uri parameter was included in the authorization request)
     * their values MUST be identical
     *
     * @api
     *
     * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.3.1.2 Specification
     *
     * @return string An absolute url with optional query components and without fragment
     */
    public function getRedirectUri();
}
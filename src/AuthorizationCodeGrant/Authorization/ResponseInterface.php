<?php

namespace OAuth2\AuthorizationCodeGrant\Authorization;

/**
 * Authorization response interface
 *
 * To request an access token, the client obtains authorization from the resource owner.
 * The authorization is expressed in the form of an authorization grant.
 * OAuth defines four grant types, yet only 2 require an authorization request
 *   - authorization code (authorization request -issue-> authorization code)
 *   - implicit           (authorization request -issue-> access token)
 *
 * @version draft-ietf-oauth-v2-25
 *
 * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.4     Specification
 * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.4.1.1 Authorization Code Grant flow
 * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.4.2.1 Implicit Grant flow
 *
 * @author Ludovic Fleury <ludo.fleury@gmail.com>
 */
interface ResponseInterface
{
    /**
     * Return the response type provided by the client
     *
     * REQUIRED - Single string varying with the protocol flow.
     * "Authorization Code Grant" expects "code"
     * "Implicit Grant" expects "token"
     *
     * @api
     *
     * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.3.1.1 Specification
     * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.4.1.1 Authorization Code Grant flow
     * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.4.2.1 Implicit Grant flow
     *
     * @return string
     */
    public function getResponseType();

    /**
     * Return the client identifier provided by the client
     *
     * REQUIRED - Unique string representing
     * the registration information provided by the client
     *
     * @api
     *
     * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.2.2 Specification
     *
     * @return string
     */
    public function getClientId();

    /**
     * Return the client redirect uri provided by the client
     *
     * OPTIONAL - The redirect uri is a client callback uri
     * where the resource owner is redirected by the authorization server
     *
     * @api
     *
     * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.3.1.2 Specification
     *
     * @return string An absolute url with optional query components and without fragment
     */
    public function getRedirectUri();

    /**
     * Return the list of scope provided by the client
     *
     * OPTIONAL - List of space-delimited, case sensitive strings
     * provided by the client
     *
     * @api
     *
     * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.3.3 Specification
     *
     * @return string A space-delimited list of scope
     */
    public function getScope();

    /**
     * Return the state provided by the client
     *
     * RECOMMENDED - An opaque value used by the client
     * to maintain state between the request and callback (to prevent CSRF, etc.)
     *
     * @api
     *
     * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#CSRF Security Considerations
     *
     * @return string
     */
    public function getState();
}
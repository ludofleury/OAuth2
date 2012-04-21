<?php

namespace OAuth2;

/**
 * Client
 *
 * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.1.1 Role definition
 * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.2   Client specifications
 *
 * @author Ludovic Fleury <ludo.fleury@gmail.com>
 */
interface ClientInterface
{
    /**
     * Return the client identifier
     *
     * An unique string representing the registration information provided by the client
     *
     * @api
     *
     * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.2.2 Specification
     *
     * @return string
     */
    public function getClientId();

    /**
     * Return the client type
     *
     * Define the ability to maintain the confidentiality of their client credentials
     *
     * @api
     *
     * @link http://tools.ietf.org/id/draft-ietf-oauth-v2-25.html#rfc.section.2.1 Specification
     *
     * @return string confidential|public
     */
    public function getClientType();
}
<?php
/**
 * LoginRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Hydra\SDK
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ORY Hydra - Cloud Native OAuth 2.0 and OpenID Connect Server
 *
 * Welcome to the ORY Hydra HTTP API documentation. You will find documentation for all HTTP APIs here. Keep in mind that this document reflects the latest branch, always. Support for versioned documentation is coming in the future.
 *
 * OpenAPI spec version: Latest
 * Contact: hi@ory.am
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Hydra\SDK\Model;

use \ArrayAccess;

/**
 * LoginRequest Class Doc Comment
 *
 * @category    Class
 * @package     Hydra\SDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LoginRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'loginRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'challenge' => 'string',
        'client' => '\Hydra\SDK\Model\OAuth2Client',
        'oidc_context' => '\Hydra\SDK\Model\OpenIDConnectContext',
        'request_url' => 'string',
        'requested_scope' => 'string[]',
        'session_id' => 'string',
        'skip' => 'bool',
        'subject' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'challenge' => null,
        'client' => null,
        'oidc_context' => null,
        'request_url' => null,
        'requested_scope' => null,
        'session_id' => null,
        'skip' => null,
        'subject' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'challenge' => 'challenge',
        'client' => 'client',
        'oidc_context' => 'oidc_context',
        'request_url' => 'request_url',
        'requested_scope' => 'requested_scope',
        'session_id' => 'session_id',
        'skip' => 'skip',
        'subject' => 'subject'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'challenge' => 'setChallenge',
        'client' => 'setClient',
        'oidc_context' => 'setOidcContext',
        'request_url' => 'setRequestUrl',
        'requested_scope' => 'setRequestedScope',
        'session_id' => 'setSessionId',
        'skip' => 'setSkip',
        'subject' => 'setSubject'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'challenge' => 'getChallenge',
        'client' => 'getClient',
        'oidc_context' => 'getOidcContext',
        'request_url' => 'getRequestUrl',
        'requested_scope' => 'getRequestedScope',
        'session_id' => 'getSessionId',
        'skip' => 'getSkip',
        'subject' => 'getSubject'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['challenge'] = isset($data['challenge']) ? $data['challenge'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['oidc_context'] = isset($data['oidc_context']) ? $data['oidc_context'] : null;
        $this->container['request_url'] = isset($data['request_url']) ? $data['request_url'] : null;
        $this->container['requested_scope'] = isset($data['requested_scope']) ? $data['requested_scope'] : null;
        $this->container['session_id'] = isset($data['session_id']) ? $data['session_id'] : null;
        $this->container['skip'] = isset($data['skip']) ? $data['skip'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets challenge
     * @return string
     */
    public function getChallenge()
    {
        return $this->container['challenge'];
    }

    /**
     * Sets challenge
     * @param string $challenge Challenge is the identifier (\"authentication challenge\") of the consent authentication request. It is used to identify the session.
     * @return $this
     */
    public function setChallenge($challenge)
    {
        $this->container['challenge'] = $challenge;

        return $this;
    }

    /**
     * Gets client
     * @return \Hydra\SDK\Model\OAuth2Client
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     * @param \Hydra\SDK\Model\OAuth2Client $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets oidc_context
     * @return \Hydra\SDK\Model\OpenIDConnectContext
     */
    public function getOidcContext()
    {
        return $this->container['oidc_context'];
    }

    /**
     * Sets oidc_context
     * @param \Hydra\SDK\Model\OpenIDConnectContext $oidc_context
     * @return $this
     */
    public function setOidcContext($oidc_context)
    {
        $this->container['oidc_context'] = $oidc_context;

        return $this;
    }

    /**
     * Gets request_url
     * @return string
     */
    public function getRequestUrl()
    {
        return $this->container['request_url'];
    }

    /**
     * Sets request_url
     * @param string $request_url RequestURL is the original OAuth 2.0 Authorization URL requested by the OAuth 2.0 client. It is the URL which initiates the OAuth 2.0 Authorization Code or OAuth 2.0 Implicit flow. This URL is typically not needed, but might come in handy if you want to deal with additional request parameters.
     * @return $this
     */
    public function setRequestUrl($request_url)
    {
        $this->container['request_url'] = $request_url;

        return $this;
    }

    /**
     * Gets requested_scope
     * @return string[]
     */
    public function getRequestedScope()
    {
        return $this->container['requested_scope'];
    }

    /**
     * Sets requested_scope
     * @param string[] $requested_scope RequestedScope contains all scopes requested by the OAuth 2.0 client.
     * @return $this
     */
    public function setRequestedScope($requested_scope)
    {
        $this->container['requested_scope'] = $requested_scope;

        return $this;
    }

    /**
     * Gets session_id
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     * @param string $session_id SessionID is the authentication session ID. It is set if the browser had a valid authentication session at ORY Hydra during the login flow. It can be used to associate consecutive login requests by a certain user.
     * @return $this
     */
    public function setSessionId($session_id)
    {
        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets skip
     * @return bool
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     * @param bool $skip Skip, if true, implies that the client has requested the same scopes from the same user previously. If true, you can skip asking the user to grant the requested scopes, and simply forward the user to the redirect URL.  This feature allows you to update / set session information.
     * @return $this
     */
    public function setSkip($skip)
    {
        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     * @param string $subject Subject is the user ID of the end-user that authenticated. Now, that end user needs to grant or deny the scope requested by the OAuth 2.0 client. If this value is set and `skip` is true, you MUST include this subject type when accepting the login request, or the request will fail.
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Hydra\SDK\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Hydra\SDK\ObjectSerializer::sanitizeForSerialization($this));
    }
}



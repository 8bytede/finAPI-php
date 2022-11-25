<?php
/**
 * TppCredentialsParams
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * finAPI Access V2
 *
 * <strong>RESTful API for Account Information Services (AIS) and Payment Initiation Services (PIS)</strong> <br/> <strong>Application Version:</strong> 2.2.0 <br/>  The following pages give you some general information on how to use our APIs.<br/> The actual API services documentation then follows further below. You can use the menu to jump between API sections. <br/> <br/> This page has a built-in HTTP(S) client, so you can test the services directly from within this page, by filling in the request parameters and/or body in the respective services, and then hitting the TRY button. Note that you need to be authorized to make a successful API call. To authorize, refer to the 'Authorization' section of the API, or just use the OAUTH button that can be found near the TRY button. <br/>  <h2 id=\"general-information\">General information</h2>  <h3 id=\"general-error-responses\"><strong>Error Responses</strong></h3> When an API call returns with an error, then in general it has the structure shown in the following example:  <pre> {   \"errors\": [     {       \"message\": \"Interface 'FINTS_SERVER' is not supported for this operation.\",       \"code\": \"BAD_REQUEST\",       \"type\": \"TECHNICAL\"     }   ],   \"date\": \"2020-11-19T16:54:06.854+01:00\",   \"requestId\": \"selfgen-312042e7-df55-47e4-bffd-956a68ef37b5\",   \"endpoint\": \"POST /api/v2/bankConnections/import\",   \"authContext\": \"1/21\",   \"bank\": \"DEMO0002 - finAPI Test Redirect Bank\" } </pre>  If an API call requires an additional authentication by the user, HTTP code 510 is returned and the error response contains the additional \"multiStepAuthentication\" object, see the following example:  <pre> {   \"errors\": [     {       \"message\": \"Es ist eine zusätzliche Authentifizierung erforderlich. Bitte geben Sie folgenden Code an: 123456\",       \"code\": \"ADDITIONAL_AUTHENTICATION_REQUIRED\",       \"type\": \"BUSINESS\",       \"multiStepAuthentication\": {         \"hash\": \"678b13f4be9ed7d981a840af8131223a\",         \"status\": \"CHALLENGE_RESPONSE_REQUIRED\",         \"challengeMessage\": \"Es ist eine zusätzliche Authentifizierung erforderlich. Bitte geben Sie folgenden Code an: 123456\",         \"answerFieldLabel\": \"TAN\",         \"redirectUrl\": null,         \"redirectContext\": null,         \"redirectContextField\": null,         \"twoStepProcedures\": null,         \"photoTanMimeType\": null,         \"photoTanData\": null,         \"opticalData\": null,         \"opticalDataAsReinerSct\": false       }     }   ],   \"date\": \"2019-11-29T09:51:55.931+01:00\",   \"requestId\": \"selfgen-45059c99-1b14-4df7-9bd3-9d5f126df294\",   \"endpoint\": \"POST /api/v2/bankConnections/import\",   \"authContext\": \"1/18\",   \"bank\": \"DEMO0001 - finAPI Test Bank\" } </pre>  An exception to this error format are API authentication errors, where the following structure is returned:  <pre> {   \"error\": \"invalid_token\",   \"error_description\": \"Invalid access token: cccbce46-xxxx-xxxx-xxxx-xxxxxxxxxx\" } </pre>  <h3 id=\"general-paging\"><strong>Paging</strong></h3> API services that may potentially return a lot of data implement paging. They return a limited number of entries within a \"page\". Further entries must be fetched with subsequent calls. <br/><br/> Any API service that implements paging provides the following input parameters:<br/> &bull; \"page\": the number of the page to be retrieved (starting with 1).<br/> &bull; \"perPage\": the number of entries within a page. The default and maximum value is stated in the documentation of the respective services.  A paged response contains an additional \"paging\" object with the following structure:  <pre> {   ...   ,   \"paging\": {     \"page\": 1,     \"perPage\": 20,     \"pageCount\": 234,     \"totalCount\": 4662   } } </pre>  <h3 id=\"general-internationalization\"><strong>Internationalization</strong></h3> The finAPI services support internationalization which means you can define the language you prefer for API service responses. <br/><br/> The following languages are available: German, English, Czech, Slovak. <br/><br/> The preferred language can be defined by providing the official HTTP <strong>Accept-Language</strong> header. <br/><br/> finAPI reacts on the official iso language codes &quot;de&quot;, &quot;en&quot;, &quot;cs&quot; and &quot;sk&quot; for the named languages. Additional subtags supported by the Accept-Language header may be provided, e.g. &quot;en-US&quot;, but are ignored. <br/> If no Accept-Language header is given, German is used as the default language. <br/><br/> Exceptions:<br/> &bull; Bank login hints and login fields are only available in the language of the bank and not being translated.<br/> &bull; Direct messages from the bank systems typically returned as BUSINESS errors will not be translated.<br/> &bull; BUSINESS errors created by finAPI directly are available in German and English.<br/> &bull; TECHNICAL errors messages meant for developers are mostly in English, but also may be translated.  <h3 id=\"general-request-ids\"><strong>Request IDs</strong></h3> With any API call, you can pass a request ID via a header with name \"X-Request-Id\". The request ID can be an arbitrary string with up to 255 characters. Passing a longer string will result in an error. <br/><br/> If you don't pass a request ID for a call, finAPI will generate a random ID internally. <br/><br/> The request ID is always returned back in the response of a service, as a header with name \"X-Request-Id\". <br/><br/> We highly recommend to always pass a (preferably unique) request ID, and include it into your client application logs whenever you make a request or receive a response (especially in the case of an error response). finAPI is also logging request IDs on its end. Having a request ID can help the finAPI support team to work more efficiently and solve tickets faster.  <h3 id=\"general-overriding-http-methods\"><strong>Overriding HTTP methods</strong></h3> Some HTTP clients do not support the HTTP methods PATCH or DELETE. If you are using such a client in your application, you can use a POST request instead with a special HTTP header indicating the originally intended HTTP method. <br/><br/> The header's name is <strong>X-HTTP-Method-Override</strong>. Set its value to either <strong>PATCH</strong> or <strong>DELETE</strong>. POST Requests having this header set will be treated either as PATCH or DELETE by the finAPI servers. <br/><br/> Example: <br/><br/> <strong>X-HTTP-Method-Override: PATCH</strong><br/> POST /api/v2/label/51<br/> {\"name\": \"changed label\"}<br/><br/> will be interpreted by finAPI as:<br/><br/> PATCH /api/v2/label/51<br/> {\"name\": \"changed label\"}<br/>  <h3 id=\"general-user-metadata\"><strong>User metadata</strong></h3> With the migration to PSD2 APIs, a new term called \"User metadata\" (also known as \"PSU metadata\") has been introduced to the API. This user metadata aims to inform the banking API if there was a real end-user behind an HTTP request or if the request was triggered by a system (e.g. by an automatic batch update). In the latter case, the bank may apply some restrictions such as limiting the number of HTTP requests for a single consent. Also, some operations may be forbidden entirely by the banking API. For example, some banks do not allow issuing a new consent without the end-user being involved. Therefore, it is certainly necessary and obligatory for the customer to provide the PSU metadata for such operations. <br/><br/> As finAPI does not have direct interaction with the end-user, it is the client application's responsibility to provide all the necessary information about the end-user. This must be done by sending additional headers with every request triggered on behalf of the end-user. <br/><br/> At the moment, the following headers are supported by the API:<br/> &bull; \"PSU-IP-Address\" - the IP address of the user's device.<br/> &bull; \"PSU-Device-OS\" - the user's device and/or operating system identification.<br/> &bull; \"PSU-User-Agent\" - the user's web browser or other client device identification.  <h3 id=\"general-faq\"><strong>FAQ</strong></h3> <strong>Is there a finAPI SDK?</strong> <br/> Currently we do not offer a native SDK, but there is the option to generate an SDK for almost any target language via OpenAPI. Use the 'Download SDK' button on this page for SDK generation. <br/> <br/> <strong>How can I enable finAPI's automatic batch update?</strong> <br/> Currently there is no way to set up the batch update via the API. Please contact support@finapi.io for this. <br/> <br/> <strong>Why do I need to keep authorizing when calling services on this page?</strong> <br/> This page is a \"one-page-app\". Reloading the page resets the OAuth authorization context. There is generally no need to reload the page, so just don't do it and your authorization will persist.
 *
 * The version of the OpenAPI document: 2022.46.1
 * Contact: kontakt@finapi.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * TppCredentialsParams Class Doc Comment
 *
 * @category Class
 * @description A container for new TPP client credentials data
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TppCredentialsParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TppCredentialsParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tpp_authentication_group_id' => 'int',
        'label' => 'string',
        'tpp_client_id' => 'string',
        'tpp_client_secret' => 'string',
        'tpp_api_key' => 'string',
        'tpp_name' => 'string',
        'valid_from_date' => '\DateTime',
        'valid_until_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tpp_authentication_group_id' => 'int64',
        'label' => null,
        'tpp_client_id' => null,
        'tpp_client_secret' => null,
        'tpp_api_key' => null,
        'tpp_name' => null,
        'valid_from_date' => 'date',
        'valid_until_date' => 'date'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tpp_authentication_group_id' => false,
		'label' => false,
		'tpp_client_id' => false,
		'tpp_client_secret' => false,
		'tpp_api_key' => false,
		'tpp_name' => false,
		'valid_from_date' => false,
		'valid_until_date' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'tpp_authentication_group_id' => 'tppAuthenticationGroupId',
        'label' => 'label',
        'tpp_client_id' => 'tppClientId',
        'tpp_client_secret' => 'tppClientSecret',
        'tpp_api_key' => 'tppApiKey',
        'tpp_name' => 'tppName',
        'valid_from_date' => 'validFromDate',
        'valid_until_date' => 'validUntilDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tpp_authentication_group_id' => 'setTppAuthenticationGroupId',
        'label' => 'setLabel',
        'tpp_client_id' => 'setTppClientId',
        'tpp_client_secret' => 'setTppClientSecret',
        'tpp_api_key' => 'setTppApiKey',
        'tpp_name' => 'setTppName',
        'valid_from_date' => 'setValidFromDate',
        'valid_until_date' => 'setValidUntilDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tpp_authentication_group_id' => 'getTppAuthenticationGroupId',
        'label' => 'getLabel',
        'tpp_client_id' => 'getTppClientId',
        'tpp_client_secret' => 'getTppClientSecret',
        'tpp_api_key' => 'getTppApiKey',
        'tpp_name' => 'getTppName',
        'valid_from_date' => 'getValidFromDate',
        'valid_until_date' => 'getValidUntilDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('tpp_authentication_group_id', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('tpp_client_id', $data ?? [], null);
        $this->setIfExists('tpp_client_secret', $data ?? [], null);
        $this->setIfExists('tpp_api_key', $data ?? [], null);
        $this->setIfExists('tpp_name', $data ?? [], null);
        $this->setIfExists('valid_from_date', $data ?? [], null);
        $this->setIfExists('valid_until_date', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tpp_authentication_group_id'] === null) {
            $invalidProperties[] = "'tpp_authentication_group_id' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets tpp_authentication_group_id
     *
     * @return int
     */
    public function getTppAuthenticationGroupId()
    {
        return $this->container['tpp_authentication_group_id'];
    }

    /**
     * Sets tpp_authentication_group_id
     *
     * @param int $tpp_authentication_group_id The TPP Authentication Group Id for which the credentials can be used
     *
     * @return self
     */
    public function setTppAuthenticationGroupId($tpp_authentication_group_id)
    {

        if (is_null($tpp_authentication_group_id)) {
            throw new \InvalidArgumentException('non-nullable tpp_authentication_group_id cannot be null');
        }

        $this->container['tpp_authentication_group_id'] = $tpp_authentication_group_id;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Label to credentials.
     *
     * @return self
     */
    public function setLabel($label)
    {

        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets tpp_client_id
     *
     * @return string|null
     */
    public function getTppClientId()
    {
        return $this->container['tpp_client_id'];
    }

    /**
     * Sets tpp_client_id
     *
     * @param string|null $tpp_client_id ID of the TPP accessing the ASPSP API, as provided by the ASPSP as the result of registration
     *
     * @return self
     */
    public function setTppClientId($tpp_client_id)
    {

        if (is_null($tpp_client_id)) {
            throw new \InvalidArgumentException('non-nullable tpp_client_id cannot be null');
        }

        $this->container['tpp_client_id'] = $tpp_client_id;

        return $this;
    }

    /**
     * Gets tpp_client_secret
     *
     * @return string|null
     */
    public function getTppClientSecret()
    {
        return $this->container['tpp_client_secret'];
    }

    /**
     * Sets tpp_client_secret
     *
     * @param string|null $tpp_client_secret Secret of the TPP accessing the ASPSP API, as provided by the ASPSP as the result of registration
     *
     * @return self
     */
    public function setTppClientSecret($tpp_client_secret)
    {

        if (is_null($tpp_client_secret)) {
            throw new \InvalidArgumentException('non-nullable tpp_client_secret cannot be null');
        }

        $this->container['tpp_client_secret'] = $tpp_client_secret;

        return $this;
    }

    /**
     * Gets tpp_api_key
     *
     * @return string|null
     */
    public function getTppApiKey()
    {
        return $this->container['tpp_api_key'];
    }

    /**
     * Sets tpp_api_key
     *
     * @param string|null $tpp_api_key API Key provided by ASPSP as the result of registration
     *
     * @return self
     */
    public function setTppApiKey($tpp_api_key)
    {

        if (is_null($tpp_api_key)) {
            throw new \InvalidArgumentException('non-nullable tpp_api_key cannot be null');
        }

        $this->container['tpp_api_key'] = $tpp_api_key;

        return $this;
    }

    /**
     * Gets tpp_name
     *
     * @return string|null
     */
    public function getTppName()
    {
        return $this->container['tpp_name'];
    }

    /**
     * Sets tpp_name
     *
     * @param string|null $tpp_name TPP name
     *
     * @return self
     */
    public function setTppName($tpp_name)
    {

        if (is_null($tpp_name)) {
            throw new \InvalidArgumentException('non-nullable tpp_name cannot be null');
        }

        $this->container['tpp_name'] = $tpp_name;

        return $this;
    }

    /**
     * Gets valid_from_date
     *
     * @return \DateTime|null
     */
    public function getValidFromDate()
    {
        return $this->container['valid_from_date'];
    }

    /**
     * Sets valid_from_date
     *
     * @param \DateTime|null $valid_from_date <strong>Format:</strong> 'YYYY-MM-DD'<br/>Credentials \"valid from\" date. Default is today's date
     *
     * @return self
     */
    public function setValidFromDate($valid_from_date)
    {

        if (is_null($valid_from_date)) {
            throw new \InvalidArgumentException('non-nullable valid_from_date cannot be null');
        }

        $this->container['valid_from_date'] = $valid_from_date;

        return $this;
    }

    /**
     * Gets valid_until_date
     *
     * @return \DateTime|null
     */
    public function getValidUntilDate()
    {
        return $this->container['valid_until_date'];
    }

    /**
     * Sets valid_until_date
     *
     * @param \DateTime|null $valid_until_date <strong>Format:</strong> 'YYYY-MM-DD'<br/>Credentials \"valid until\" date. Default is null which means \"indefinite\" (no limit)
     *
     * @return self
     */
    public function setValidUntilDate($valid_until_date)
    {

        if (is_null($valid_until_date)) {
            throw new \InvalidArgumentException('non-nullable valid_until_date cannot be null');
        }

        $this->container['valid_until_date'] = $valid_until_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



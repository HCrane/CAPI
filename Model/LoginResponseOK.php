<?php
/**
 * LoginResponseOK
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Server\Model
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: 1.0.2
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the LoginResponseOK model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class LoginResponseOK 
{
        /**
     * @var string|null
     * @SerializedName("token")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $token;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->token = isset($data['token']) ? $data['token'] : null;
    }

    /**
     * Gets token.
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets token.
     *
     * @param string|null $token
     *
     * @return $this
     */
    public function setToken($token = null)
    {
        $this->token = $token;

        return $this;
    }
}



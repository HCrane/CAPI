<?php
/**
 * NotificationContent.
 *
 * PHP version 7.1.3
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.51
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the NotificationContent model.
 *
 * @author  OpenAPI Generator team
 */
class NotificationContent
{
  /**
   * Id of the user who caused the notification.
   *
   * @var string|null
   * @SerializedName("from")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $from;

  /**
   * Username of the user who caused the notification.
   *
   * @var string|null
   * @SerializedName("from_name")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $from_name;

  /**
   * Id of the program for which the notification is about.
   *
   * @var string|null
   * @SerializedName("program")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $program;

  /**
   * Name of the program for which the notification is about.
   *
   * @var string|null
   * @SerializedName("program_name")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $program_name;

  /**
   * Avatar of the user who caused the notification.
   *
   * @var string|null
   * @SerializedName("avatar")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $avatar;

  /**
   * Id of the remixed program.
   *
   * @var string|null
   * @SerializedName("remixed_program")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $remixed_program;

  /**
   * Name of the remixed program.
   *
   * @var string|null
   * @SerializedName("remixed_program_name")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $remixed_program_name;

  /**
   * Notification message.
   *
   * @var string|null
   * @SerializedName("message")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $message;

  /**
   * Prize for anniversary notifications.
   *
   * @var string|null
   * @SerializedName("prize")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $prize;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->from = isset($data['from']) ? $data['from'] : null;
    $this->from_name = isset($data['from_name']) ? $data['from_name'] : null;
    $this->program = isset($data['program']) ? $data['program'] : null;
    $this->program_name = isset($data['program_name']) ? $data['program_name'] : null;
    $this->avatar = isset($data['avatar']) ? $data['avatar'] : null;
    $this->remixed_program = isset($data['remixed_program']) ? $data['remixed_program'] : null;
    $this->remixed_program_name = isset($data['remixed_program_name']) ? $data['remixed_program_name'] : null;
    $this->message = isset($data['message']) ? $data['message'] : null;
    $this->prize = isset($data['prize']) ? $data['prize'] : null;
  }

  /**
   * Gets from.
   */
  public function getFrom(): ?string
  {
    return $this->from;
  }

  /**
   * Sets from.
   *
   * @param string|null $from Id of the user who caused the notification
   *
   * @return $this
   */
  public function setFrom(string $from = null)
  {
    $this->from = $from;

    return $this;
  }

  /**
   * Gets from_name.
   */
  public function getFromName(): ?string
  {
    return $this->from_name;
  }

  /**
   * Sets from_name.
   *
   * @param string|null $from_name Username of the user who caused the notification
   *
   * @return $this
   */
  public function setFromName(string $from_name = null)
  {
    $this->from_name = $from_name;

    return $this;
  }

  /**
   * Gets program.
   */
  public function getProgram(): ?string
  {
    return $this->program;
  }

  /**
   * Sets program.
   *
   * @param string|null $program Id of the program for which the notification is about
   *
   * @return $this
   */
  public function setProgram(string $program = null)
  {
    $this->program = $program;

    return $this;
  }

  /**
   * Gets program_name.
   */
  public function getProgramName(): ?string
  {
    return $this->program_name;
  }

  /**
   * Sets program_name.
   *
   * @param string|null $program_name Name of the program for which the notification is about
   *
   * @return $this
   */
  public function setProgramName(string $program_name = null)
  {
    $this->program_name = $program_name;

    return $this;
  }

  /**
   * Gets avatar.
   */
  public function getAvatar(): ?string
  {
    return $this->avatar;
  }

  /**
   * Sets avatar.
   *
   * @param string|null $avatar Avatar of the user who caused the notification
   *
   * @return $this
   */
  public function setAvatar(string $avatar = null)
  {
    $this->avatar = $avatar;

    return $this;
  }

  /**
   * Gets remixed_program.
   */
  public function getRemixedProgram(): ?string
  {
    return $this->remixed_program;
  }

  /**
   * Sets remixed_program.
   *
   * @param string|null $remixed_program Id of the remixed program
   *
   * @return $this
   */
  public function setRemixedProgram(string $remixed_program = null)
  {
    $this->remixed_program = $remixed_program;

    return $this;
  }

  /**
   * Gets remixed_program_name.
   */
  public function getRemixedProgramName(): ?string
  {
    return $this->remixed_program_name;
  }

  /**
   * Sets remixed_program_name.
   *
   * @param string|null $remixed_program_name Name of the remixed program
   *
   * @return $this
   */
  public function setRemixedProgramName(string $remixed_program_name = null)
  {
    $this->remixed_program_name = $remixed_program_name;

    return $this;
  }

  /**
   * Gets message.
   */
  public function getMessage(): ?string
  {
    return $this->message;
  }

  /**
   * Sets message.
   *
   * @param string|null $message Notification message
   *
   * @return $this
   */
  public function setMessage(string $message = null)
  {
    $this->message = $message;

    return $this;
  }

  /**
   * Gets prize.
   */
  public function getPrize(): ?string
  {
    return $this->prize;
  }

  /**
   * Sets prize.
   *
   * @param string|null $prize Prize for anniversary notifications
   *
   * @return $this
   */
  public function setPrize(string $prize = null)
  {
    $this->prize = $prize;

    return $this;
  }
}

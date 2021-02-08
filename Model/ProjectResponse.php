<?php
/**
 * ProjectResponse.
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
 * The version of the OpenAPI document: v1.0.54
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
 * Class representing the ProjectResponse model.
 *
 * @author  OpenAPI Generator team
 */
class ProjectResponse
{
  /**
   * @var string|null
   * @SerializedName("id")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $id;

  /**
   * @var string|null
   * @SerializedName("name")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $name;

  /**
   * @var string|null
   * @SerializedName("author")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $author;

  /**
   * @var string|null
   * @SerializedName("description")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $description;

  /**
   * @var string|null
   * @SerializedName("version")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $version;

  /**
   * @var int|null
   * @SerializedName("views")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $views;

  /**
   * @var int|null
   * @SerializedName("download")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $download;

  /**
   * @var bool|null
   * @SerializedName("private")
   * @Assert\Type("bool")
   * @Type("bool")
   */
  protected $private;

  /**
   * @var string|null
   * @SerializedName("flavor")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $flavor;

  /**
   * @var string[]|null
   * @SerializedName("tags")
   * @Assert\All({
   *     @Assert\Type("string")
   * })
   * @Type("array<string>")
   */
  protected $tags;

  /**
   * @var int|null
   * @SerializedName("uploaded")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $uploaded;

  /**
   * @var string|null
   * @SerializedName("uploaded_string")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $uploaded_string;

  /**
   * @var string|null
   * @SerializedName("screenshot_large")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $screenshot_large;

  /**
   * @var string|null
   * @SerializedName("screenshot_small")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $screenshot_small;

  /**
   * @var string|null
   * @SerializedName("project_url")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $project_url;

  /**
   * @var string|null
   * @SerializedName("download_url")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $download_url;

  /**
   * filesize in megabytes.
   *
   * @var float|null
   * @SerializedName("filesize")
   * @Assert\Type("float")
   * @Type("float")
   */
  protected $filesize;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = isset($data['id']) ? $data['id'] : null;
    $this->name = isset($data['name']) ? $data['name'] : null;
    $this->author = isset($data['author']) ? $data['author'] : null;
    $this->description = isset($data['description']) ? $data['description'] : null;
    $this->version = isset($data['version']) ? $data['version'] : null;
    $this->views = isset($data['views']) ? $data['views'] : null;
    $this->download = isset($data['download']) ? $data['download'] : null;
    $this->private = isset($data['private']) ? $data['private'] : null;
    $this->flavor = isset($data['flavor']) ? $data['flavor'] : null;
    $this->tags = isset($data['tags']) ? $data['tags'] : null;
    $this->uploaded = isset($data['uploaded']) ? $data['uploaded'] : null;
    $this->uploaded_string = isset($data['uploaded_string']) ? $data['uploaded_string'] : null;
    $this->screenshot_large = isset($data['screenshot_large']) ? $data['screenshot_large'] : null;
    $this->screenshot_small = isset($data['screenshot_small']) ? $data['screenshot_small'] : null;
    $this->project_url = isset($data['project_url']) ? $data['project_url'] : null;
    $this->download_url = isset($data['download_url']) ? $data['download_url'] : null;
    $this->filesize = isset($data['filesize']) ? $data['filesize'] : null;
  }

  /**
   * Gets id.
   */
  public function getId(): ?string
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @return $this
   */
  public function setId(string $id = null)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Gets name.
   */
  public function getName(): ?string
  {
    return $this->name;
  }

  /**
   * Sets name.
   *
   * @return $this
   */
  public function setName(string $name = null)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Gets author.
   */
  public function getAuthor(): ?string
  {
    return $this->author;
  }

  /**
   * Sets author.
   *
   * @return $this
   */
  public function setAuthor(string $author = null)
  {
    $this->author = $author;

    return $this;
  }

  /**
   * Gets description.
   */
  public function getDescription(): ?string
  {
    return $this->description;
  }

  /**
   * Sets description.
   *
   * @return $this
   */
  public function setDescription(string $description = null)
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Gets version.
   */
  public function getVersion(): ?string
  {
    return $this->version;
  }

  /**
   * Sets version.
   *
   * @return $this
   */
  public function setVersion(string $version = null)
  {
    $this->version = $version;

    return $this;
  }

  /**
   * Gets views.
   */
  public function getViews(): ?int
  {
    return $this->views;
  }

  /**
   * Sets views.
   *
   * @return $this
   */
  public function setViews(int $views = null)
  {
    $this->views = $views;

    return $this;
  }

  /**
   * Gets download.
   */
  public function getDownload(): ?int
  {
    return $this->download;
  }

  /**
   * Sets download.
   *
   * @return $this
   */
  public function setDownload(int $download = null)
  {
    $this->download = $download;

    return $this;
  }

  /**
   * Gets private.
   */
  public function isPrivate(): ?bool
  {
    return $this->private;
  }

  /**
   * Sets private.
   *
   * @return $this
   */
  public function setPrivate(bool $private = null)
  {
    $this->private = $private;

    return $this;
  }

  /**
   * Gets flavor.
   */
  public function getFlavor(): ?string
  {
    return $this->flavor;
  }

  /**
   * Sets flavor.
   *
   * @return $this
   */
  public function setFlavor(string $flavor = null)
  {
    $this->flavor = $flavor;

    return $this;
  }

  /**
   * Gets tags.
   *
   * @return string[]|null
   */
  public function getTags(): ?array
  {
    return $this->tags;
  }

  /**
   * Sets tags.
   *
   * @param string[]|null $tags
   *
   * @return $this
   */
  public function setTags(array $tags = null)
  {
    $this->tags = $tags;

    return $this;
  }

  /**
   * Gets uploaded.
   */
  public function getUploaded(): ?int
  {
    return $this->uploaded;
  }

  /**
   * Sets uploaded.
   *
   * @return $this
   */
  public function setUploaded(int $uploaded = null)
  {
    $this->uploaded = $uploaded;

    return $this;
  }

  /**
   * Gets uploaded_string.
   */
  public function getUploadedString(): ?string
  {
    return $this->uploaded_string;
  }

  /**
   * Sets uploaded_string.
   *
   * @return $this
   */
  public function setUploadedString(string $uploaded_string = null)
  {
    $this->uploaded_string = $uploaded_string;

    return $this;
  }

  /**
   * Gets screenshot_large.
   */
  public function getScreenshotLarge(): ?string
  {
    return $this->screenshot_large;
  }

  /**
   * Sets screenshot_large.
   *
   * @return $this
   */
  public function setScreenshotLarge(string $screenshot_large = null)
  {
    $this->screenshot_large = $screenshot_large;

    return $this;
  }

  /**
   * Gets screenshot_small.
   */
  public function getScreenshotSmall(): ?string
  {
    return $this->screenshot_small;
  }

  /**
   * Sets screenshot_small.
   *
   * @return $this
   */
  public function setScreenshotSmall(string $screenshot_small = null)
  {
    $this->screenshot_small = $screenshot_small;

    return $this;
  }

  /**
   * Gets project_url.
   */
  public function getProjectUrl(): ?string
  {
    return $this->project_url;
  }

  /**
   * Sets project_url.
   *
   * @return $this
   */
  public function setProjectUrl(string $project_url = null)
  {
    $this->project_url = $project_url;

    return $this;
  }

  /**
   * Gets download_url.
   */
  public function getDownloadUrl(): ?string
  {
    return $this->download_url;
  }

  /**
   * Sets download_url.
   *
   * @return $this
   */
  public function setDownloadUrl(string $download_url = null)
  {
    $this->download_url = $download_url;

    return $this;
  }

  /**
   * Gets filesize.
   */
  public function getFilesize(): ?float
  {
    return $this->filesize;
  }

  /**
   * Sets filesize.
   *
   * @param float|null $filesize filesize in megabytes
   *
   * @return $this
   */
  public function setFilesize(float $filesize = null)
  {
    $this->filesize = $filesize;

    return $this;
  }
}

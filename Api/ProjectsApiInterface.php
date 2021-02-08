<?php
/**
 * ProjectsApiInterface
 * PHP version 7.1.3.
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

namespace OpenAPI\Server\Api;

use OpenAPI\Server\Model\ProjectReportRequest;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * ProjectsApiInterface Interface Doc Comment.
 *
 * @category Interface
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
interface ProjectsApiInterface
{
  /**
   * Sets authentication method PandaAuth.
   *
   * @param string $value value of the PandaAuth authentication method
   */
  public function setPandaAuth($value);

  /**
   * Operation projectIdGet.
   *
   * Get the information of a project
   *
   * @param string $id              (required)
   * @param int    $responseCode    The HTTP response code to return
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return OpenAPI\Server\Model\ProjectResponse
   */
  public function projectIdGet(string $id, &$responseCode, array &$responseHeaders);

  /**
   * Operation projectIdRecommendationsGet.
   *
   * Get recommended projects related to the specific project
   *
   * @param string $id              (required)
   * @param string $category        * &#x60;similar&#x60; - Get similar projects to the specific project * &#x60;also downloaded&#x60; - Get projects that users who downloaded the specific project also downloaded * &#x60;more from user&#x60; - Get more projects from the owner of the specific project (required)
   * @param string $accept_language (optional)
   * @param string $max_version     (optional)
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $flavor          (optional)
   * @param int    $responseCode    The HTTP response code to return
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return OpenAPI\Server\Model\ProjectResponse[]
   */
  public function projectIdRecommendationsGet(string $id, string $category, string $accept_language = null, string $max_version = null, int $limit = 20, int $offset = 0, string $flavor = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation projectIdReportPost.
   *
   * Report a project
   *
   * @param string                                    $id                     (required)
   * @param OpenAPI\Server\Model\ProjectReportRequest $project_report_request (required)
   * @param int                                       $responseCode           The HTTP response code to return
   * @param array                                     $responseHeaders        Additional HTTP headers to return with the response ()
   */
  public function projectIdReportPost(string $id, ProjectReportRequest $project_report_request, &$responseCode, array &$responseHeaders);

  /**
   * Operation projectsFeaturedGet.
   *
   * Get the currently featured projects
   *
   * @param string $platform        (optional)
   * @param string $max_version     (optional)
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $flavor          (optional)
   * @param int    $responseCode    The HTTP response code to return
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return OpenAPI\Server\Model\FeaturedProjectResponse[]
   */
  public function projectsFeaturedGet(string $platform = null, string $max_version = null, int $limit = 20, int $offset = 0, string $flavor = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation projectsGet.
   *
   * Get projects
   *
   * @param string $category        (required)
   * @param string $accept_language (optional)
   * @param string $max_version     (optional)
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $flavor          (optional)
   * @param int    $responseCode    The HTTP response code to return
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return OpenAPI\Server\Model\ProjectResponse[]
   */
  public function projectsGet(string $category, string $accept_language = null, string $max_version = null, int $limit = 20, int $offset = 0, string $flavor = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation projectsPost.
   *
   * Upload a catrobat project
   *
   * @param string       $checksum        Checksum of the *.catrobat file (required)
   * @param UploadedFile $file            *.catrobat file (required)
   * @param string       $accept_language (optional)
   * @param string       $flavor          The flavor of this project. (optional)
   * @param bool         $private         Indicates whether a program should be private from the start. (optional)
   * @param int          $responseCode    The HTTP response code to return
   * @param array        $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return array
   */
  public function projectsPost(string $checksum, UploadedFile $file, string $accept_language = null, string $flavor = null, bool $private = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation projectsSearchGet.
   *
   * Search for projects associated with a keywords
   *
   * @param string $query           (required)
   * @param string $max_version     (optional)
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $flavor          (optional)
   * @param int    $responseCode    The HTTP response code to return
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return OpenAPI\Server\Model\ProjectResponse[]
   */
  public function projectsSearchGet(string $query, string $max_version = null, int $limit = 20, int $offset = 0, string $flavor = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation projectsUserGet.
   *
   * Get the projects of the logged in user
   *
   * @param string $max_version     (optional)
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $flavor          (optional)
   * @param int    $responseCode    The HTTP response code to return
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return OpenAPI\Server\Model\ProjectResponse[]
   */
  public function projectsUserGet(string $max_version = null, int $limit = 20, int $offset = 0, string $flavor = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation projectsUserIdGet.
   *
   * Get the public projects of a given user
   *
   * @param string $id              (required)
   * @param string $max_version     (optional)
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $flavor          (optional)
   * @param int    $responseCode    The HTTP response code to return
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return OpenAPI\Server\Model\ProjectResponse[]
   */
  public function projectsUserIdGet(string $id, string $max_version = null, int $limit = 20, int $offset = 0, string $flavor = null, &$responseCode, array &$responseHeaders);
}

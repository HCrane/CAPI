<?php
/**
 * MediaLibraryApiInterfaceTest
 * PHP version 5.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: 1.0.7
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Server\Tests\Api;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * MediaLibraryApiInterfaceTest Class Doc Comment.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 *
 * @internal
 * @coversNothing
 */
class MediaLibraryApiInterfaceTest extends WebTestCase
{
  /**
   * Setup before running any test cases.
   */
  public static function setUpBeforeClass()
  {
  }

  /**
   * Clean up after running all test cases.
   */
  public static function tearDownAfterClass()
  {
  }

  /**
   * Setup before running each test case.
   */
  public function setUp()
  {
  }

  /**
   * Clean up after running each test case.
   */
  public function tearDown()
  {
  }

  /**
   * Test case for mediaPackagePackageNameGet.
   *
   * Get media-library asstes of a named package.
   */
  public function testMediaPackagePackageNameGet()
  {
    $client = static::createClient();

    $path = '/media/package/{packageName}';
    $pattern = '{packageName}';
    $data = $this->genTestData('[a-z0-9]+');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('GET', $path);
  }

  protected function genTestData($regexp)
  {
    $grammar = new \Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
    $compiler = \Hoa\Compiler\Llk\Llk::load($grammar);
    $ast = $compiler->parse($regexp);
    $generator = new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random());

    return $generator->visit($ast);
  }
}

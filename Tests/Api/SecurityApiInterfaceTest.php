<?php
/**
 * SecurityApiInterfaceTest
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
 * SecurityApiInterfaceTest Class Doc Comment.
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
class SecurityApiInterfaceTest extends WebTestCase
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
   * Test case for checkTokenPost.
   *
   * Checking token.
   */
  public function testCheckTokenPost()
  {
    $client = static::createClient();

    $path = '/checkToken';

    $crawler = $client->request('POST', $path);
  }

  /**
   * Test case for loginPost.
   *
   * Login a user.
   */
  public function testLoginPost()
  {
    $client = static::createClient();

    $path = '/login';

    $crawler = $client->request('POST', $path);
  }

  /**
   * Test case for logoutPost.
   *
   * Log out a user.
   */
  public function testLogoutPost()
  {
    $client = static::createClient();

    $path = '/logout';

    $crawler = $client->request('POST', $path);
  }

  /**
   * Test case for registerUserPost.
   *
   * Registering a user.
   */
  public function testRegisterUserPost()
  {
    $client = static::createClient();

    $path = '/registerUser';

    $crawler = $client->request('POST', $path);
  }

  /**
   * Test case for registerValidationPost.
   *
   * Validation of user input in the registration process.
   */
  public function testRegisterValidationPost()
  {
    $client = static::createClient();

    $path = '/registerValidation';

    $crawler = $client->request('POST', $path);
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

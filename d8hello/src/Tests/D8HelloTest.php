<?php

namespace Drupal\d8hello\Tests;

use Drupal\simpletest\DrupalUnitTestBase;

class D8HelloTest extends DrupalUnitTestBase {

  public static $modules = ['d8hello'];

  public static function getInfo() {
    return array(
      'name' => 'd8Hello test',
      'description' => 'No test case here, allways true.',
      'group' => 'D8Hello',
    );
  }

  /**
   * @group hello
   */
  public function testD8Hello() {
    $this->assertTrue(true, 'Allways correct :D!');
  }

}

<?php
/**
 * This file is part of sveneisenschmidt/selenium-server-standalone
 *
 * (c) Sven Eisenschmidt <sven.eisenschmidt@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SE\SeleniumServerStandalone\Test;

class ExecutableTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @test
     */
    public function old_binary_triggers_deprecation()
    {

        $directory = sprintf('%s/../composer/bin', TESTS_DIR);
        $executable = sprintf('%s/selenium-server-standalone 2>&1', realpath($directory));

        $this->expectOutputRegex('/PHP Deprecated/');
        passthru($executable);
    }
}
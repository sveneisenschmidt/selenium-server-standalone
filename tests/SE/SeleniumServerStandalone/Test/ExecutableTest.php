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

    /**
     *
     * @test
     */
    public function java_is_available_and_accessable()
    {
        $executable = 'java -version 2>&1';

        $this->expectOutputRegex('/java version \"(.*)\"/');
        passthru($executable);
    }

    /**
     *
     * @test
     */
    public function selenium_server_executable_is_callable()
    {
        $directory = sprintf('%s/../bin', TESTS_DIR);
        $executable = sprintf('%s/selenium-server-standalone -h 2>&1', realpath($directory));

        $this->expectOutputRegex('/Usage: (.*)/');
        passthru($executable);
    }

    /**
     *
     * @test
     */
    public function selenium_server_executable_supports_arguments()
    {
        $this->markTestIncomplete( 'This test has not been implemented yet.');
    }

    /**
     *
     * @test
     */
    public function selenium_server_executable_runs_chromedriver()
    {
        $this->markTestIncomplete( 'This test has not been implemented yet.');
    }
}

<?php

namespace Composer\Test\SelfUpdate;

use Composer\SelfUpdate\Versions;
use PHPUnit\Framework\TestCase;
use Composer\Config;
use Composer\Test\Mock\RemoteFilesystemMock;

class VersionsTest extends TestCase
{

    public function testGetChannelFriendlyNonExistingHomePath()
    {
        $config = new Config(false, '/foo/bar');;
        $config->merge(array('config' => array(
            'home' => '/does/not/exist/',
        )));
        $rfs = new RemoteFilesystemMock(array());
        $versions = new Versions($config, $rfs);

        $channel = $versions->getChannelFriendly();
        $this->assertSame('stable', $channel);
    }

    public function testGetChannelFriendlyNumericChannel()
    {
        $config = new Config(false, '/foo/bar');;
        $config->merge(array('config' => array(
            'home' => __DIR__ . '/../../Data/',
        )));
        $rfs = new RemoteFilesystemMock(array());
        $versions = new Versions($config, $rfs);

        $channel = $versions->getChannelFriendly();
        $this->assertSame('stable', $channel);
    }

    public function testSetChannel()
    {

    }

    public function testGetChannel()
    {

    }

    public function testGetLatest()
    {

    }

    public function test__construct()
    {

    }
}

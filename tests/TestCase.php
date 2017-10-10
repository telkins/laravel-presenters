<?php 

namespace Olymbytes\Presenters\Test;

use Orchestra\Testbench\TestCase as Orchestra;
use Olymbytes\Presenters\PresentersServiceProvider;

abstract class TestCase extends Orchestra
{
    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
        $app['config']->set('app.key', 'base64:9e0yNQB60wgU/cqbP09uphPo3aglW3iQJy+u4JQgnQE=');
        $app['config']->set('presenters.namespace', 'Olymbytes\\Presenters\\Test\\Models\\Presenters');
    }

    protected function getPackageProviders($app)
    {
        return [
            PresentersServiceProvider::class,
        ];
    }
}

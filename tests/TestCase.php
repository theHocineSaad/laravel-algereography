<?php

namespace TheHocineSaad\LaravelAlgereography\Tests;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use TheHocineSaad\LaravelAlgereography\LaravelAlgereographyServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelAlgereographyServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        Schema::hasTable('wilayas') ?? Schema::drop('wilayas');
        Schema::hasTable('dairas') ?? Schema::drop('dairas');

        $migration = include __DIR__.'/../database/migrations/1999_03_11_000000_create_wilayas_table.php';
        $migration->up();

        $migration = include __DIR__.'/../database/migrations/1999_03_11_000001_create_dairas_table.php';
        $migration->up();

        Artisan::call('db:seed');
    }
}

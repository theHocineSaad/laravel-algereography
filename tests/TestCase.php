<?php
namespace TheHocineSaad\LaravelAlgereographyTests;

use Database\Seeders\WilayaDairaSeeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Override the standard PHPUnit testcase with the Testbench testcase
 *
 * @see https://github.com/orchestral/testbench#usage
 */
class TestCase extends \Orchestra\Testbench\TestCase
{
    use RefreshDatabase;
    public function getEnvironmentSetUp($app)
    {

        Artisan::call('migrate:refresh');
        Artisan::call('db:seed', ['--class' => WilayaDairaSeeder::class]);
        dd("aa");

    }

    /** @test */
    public function TestUsing(){
    }
    /**
     * Include the package's service provider(s)
     *
     * @see https://packages.tools/testbench/basic/testcase.html#package-service-providers
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \TheHocineSaad\LaravelAlgereography\LaravelAlgereographyServiceProvider::class
        ];
    }
}

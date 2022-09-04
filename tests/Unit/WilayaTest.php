<?php

namespace TheHocineSaad\LaravelAlgereography\Tests\Unit;

use Illuminate\Support\Facades\Schema;
use TheHocineSaad\LaravelAlgereography\Models\Wilaya;
use TheHocineSaad\LaravelAlgereography\Tests\TestCase;

class WilayaTest extends TestCase
{
    public function test_if_wilayas_table_is_created()
    {
        $this->assertTrue(Schema::hasTable('wilayas'));
    }

    public function test_if_wilayas_table_has_all_columns()
    {
        $this->assertTrue(Schema::hasColumns('wilayas', ['id', 'name', 'ar_name']));
    }

    public function test_if_all_wilayas_exists()
    {
        $this->assertDatabaseCount('wilayas', 58);
    }

    public function test_if_relationship_with_dairas_is_working()
    {
        $wilaya = Wilaya::find(1);
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $wilaya->dairas);
    }
}

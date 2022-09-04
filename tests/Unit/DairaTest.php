<?php

namespace TheHocineSaad\LaravelAlgereography\Tests\Unit;

use Illuminate\Support\Facades\Schema;
use TheHocineSaad\LaravelAlgereography\Models\Daira;
use TheHocineSaad\LaravelAlgereography\Models\Wilaya;
use TheHocineSaad\LaravelAlgereography\Tests\TestCase;

class DairaTest extends TestCase
{
    public function test_if_dairas_table_is_created()
    {
        $this->assertTrue(Schema::hasTable('dairas'));
    }

    public function test_if_dairas_table_has_all_columns()
    {
        $this->assertTrue(Schema::hasColumns('dairas', ['id', 'name', 'ar_name', 'wilaya_id']));
    }

    public function test_if_all_dairas_exists()
    {
        $this->assertDatabaseCount('dairas', 548);
    }

    public function test_if_relationship_with_wilayas_is_working()
    {
        $daira = Daira::find(1);
        $this->assertInstanceOf(Wilaya::class, $daira->wilaya);
    }
}

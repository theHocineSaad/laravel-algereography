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

    public function test_if_wilayas_helper_without_params_is_working_properly()
    {
        $this->assertEquals(['id', 'name', 'ar_name'], array_keys(wilayas()[0]->toArray()));
    }

    public function test_if_wilayas_helper_with_lang_param_is_working_properly()
    {
        $this->assertEquals('تيزي وزو', wilayas('ar')[14]->name);
    }

    public function test_if_wilaya_helper_without_lang_param_is_working_properly()
    {
        $this->assertEquals(['id', 'name', 'ar_name'], array_keys(wilaya(15)->toArray()));
    }

    public function test_if_wilaya_helper_with_lang_param_is_working_properly()
    {
        $this->assertEquals('تيزي وزو', wilaya(15, 'ar')->name);
    }

    public function test_if_dairas_helper_without_params_is_working_properly()
    {
        $this->assertEquals(['id', 'name', 'ar_name', 'wilaya_id'], array_keys(dairas()[0]->toArray()));
    }

    public function test_if_dairas_helper_with_lang_param_is_working_properly()
    {
        $this->assertEquals('تيزي وزو', dairas('ar')[205]->name);
    }
}

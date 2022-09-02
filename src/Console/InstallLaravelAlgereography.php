<?php

namespace theHocineSaad\LaravelAlgereography\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InstallLaravelAlgereography extends Command
{
    protected $signature = 'algereography:install';

    protected $description = 'Seed the database with Wilayas and Dairas.';

    public function handle()
    {
        $this->newLine();
        $this->line('Publishing models...');
        Artisan::call('vendor:publish --tag=models');
        $this->info('Models successfully published to "app/Models"');

        $this->newLine();

        $this->line('Publishing migrations...');
        Artisan::call('vendor:publish --tag=migrations');
        $this->info('Migrations successfully published to "database/migrations"');

        $this->newLine();

        $this->line('Publishing seeders...');
        Artisan::call('vendor:publish --tag=seeders');
        $this->info('Seeders successfully published to "database/seeders"');

        $this->newLine();

        if (Schema::hasTable('Dairas')) {
            $this->line('Dropping Dairas table...');
            Schema::drop('dairas');
            DB::table('migrations')->where('migration', '1999_03_11_000001_create_dairas_table')->delete();
            $this->info('Dairas table successfully dropped');
            $this->newLine();
        }

        if (Schema::hasTable('Wilayas')) {
            $this->line('Dropping Wilayas table...');
            Schema::drop('wilayas');
            DB::table('migrations')->where('migration', '1999_03_11_000000_create_wilayas_table')->delete();
            $this->info('Wilayas table successfully dropped');
            $this->newLine();
        }

        $this->line('Creating Wilayas table...');
        Artisan::call('migrate --path=/database/migrations/1999_03_11_000000_create_wilayas_table.php');
        $this->info('Wilayas table successfully created');

        $this->newLine();

        $this->line('Creating Dairas table...');
        Artisan::call('migrate --path=/database/migrations/1999_03_11_000001_create_dairas_table.php');
        $this->info('Dairas table successfully created');

        $this->newLine();

        $this->line('Seeding Wilayas table...');
        Artisan::call('db:seed --class=WilayaSeeder');
        $this->info('Wilayas table successfully seeded');

        $this->newLine();

        $this->line('Seeding Dairas table...');
        Artisan::call('db:seed --class=DairaSeeder');
        $this->info('Dairas table successfully seeded');

        $this->newLine();

        $this->info('Done!');
        $this->question('1 2 3 Viva l\'Algérie!');
    }
}

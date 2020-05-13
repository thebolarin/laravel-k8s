<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "Laravel's Blog",
            'address' => 'Lagos, Nigeria',
            'contact_number' =>'08147793653',
            'contact_email' => 'odutusinmoses@gmail.com'

        ]);
    }
}

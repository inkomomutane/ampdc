<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Organization;
use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $this->call(OrganizationSeeder::class);
        User::updateOrInsert(['id' => 1 ],[
            'id' => 1,
            'name' => 'Administrator',
            'email' => 'administrator@ampdc.org',
            'organization_id' => Organization::first()->id,
            'password' => Hash::make(env('ADMIN_PASSOWRD')),
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}

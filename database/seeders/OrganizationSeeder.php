<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(['AMPDC', 'POSTO DE SAÚDE', 'IPAJ', 'AÇÃO SOCIAL'])->map(fn ($organization, int $index) => Organization::updateOrInsert(['id' => $index + 1], [
            'id' => $index + 1,
            'name' => $organization,
            'created_at' => now(),
            'updated_at' => now(),
        ]));
    }
}

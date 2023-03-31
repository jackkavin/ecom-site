<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->create([
            'firstname' => 'Super',
            'lastname' => 'Admin',
            'email' => 'superadmin@admin.com',
            'password' => '$2y$10$CBtSr/Ixk3eL/V3NCuifLOgZsC3dtfgMxlrWLpAwH1pwe0FcDMpEC',
            'active' => '1',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
    }
}

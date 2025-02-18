<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        role::insert([
            ["name"=>"gest1"],
            ["name"=>"gest2"],
            ["name"=>"gest3"],
            ["name"=>"gest4"]
           
        

        ]);
    }
}

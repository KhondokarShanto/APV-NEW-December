<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{

    public function run()
    {
        Role::create([

	        'name'=>'distributor',
        
        ]);

        factory(Role::class, 3)->create();
    }
}

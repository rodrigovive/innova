<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role =[
             ['name' => 'admin', 
             'display_name' => 'Admin',
             'description' => 'Full Permission'
            ],
            [
            'name' => 'client', 
            'display_name' => 'Client', 
            'description' => 'Full Permission'
            ]
        ];
        foreach ($role as $key => $value) {
            Role::create($value);
        }
    }
}

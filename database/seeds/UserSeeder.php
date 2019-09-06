<?php

use SDA\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            ['full_name' => 'System Administrator', 'avatar' => null, 'login_id' => 'sysadmin', 'password' => bcrypt('sdasys@111'), 'email' => 'mangesh_rg@yahoo.com', 'role' => 'System Administrator', 'is_active' => 1, 'language' =>'en', 'email_confirmed' => 1, 'email_confirmation_code' => null, 'first_login' => null, 'owner' => 'sysadmin', 'last_updated_by' => 'sysadmin', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['full_name' => 'Administrator', 'avatar' => null, 'login_id' => 'mangesh', 'password' => bcrypt('vsmsda@111'), 'email' => 'mangesh.ghadigaonkar@gmail.com', 'role' => 'Administrator', 'is_active' => 1, 'language' =>'en', 'email_confirmed' => 1, 'email_confirmation_code' => null, 'first_login' => null, 'owner' => 'mangesh', 'last_updated_by' => 'mangesh', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]
        );

        User::insert($users);

        // factory(App\User::class, 500)->create();
    }
}

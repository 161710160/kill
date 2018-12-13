<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        // membuat role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        // membuat sample admin
        $admin = new User();
        $admin->name = "Admin Project";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('password');
        $admin->save();
        $admin->attachRole($adminRole);

        // membuat sample member
        $member = new User();
        $member->name = "Member Project";
        $member->email = "member@gmail.com";
        $member->password = bcrypt('password');
        $member->save();
        $member->attachRole($memberRole);
    }
}

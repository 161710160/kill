<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {$administrator = new \App\User;
		$administrator->username = "Admin";
		$administrator->name = "Admin";
		$administrator->address = "Bandung,Jawa Barat";
		$administrator->phone = "086909258955";
		$administrator->avatar = "N/A";		
		$administrator->email = "asleatherofficial@gmail.com";
		$administrator->roles = json_encode(["ADMIN"]);
		$administrator->password = \Hash::make("asleather");
		
		$administrator->save();

		$this->command->info("User Admin berhasil diinsert");
    }
}

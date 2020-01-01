<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

     
        // Model::unguard();

        \DB::table('admins')->insert([
        'name' =>'VanTien',
         'email' =>'nvtien.18it1@sict.udn.vn',
         'password' =>bcrypt('tien290900')
        ]);
    
    }
}

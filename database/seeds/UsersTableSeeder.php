<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
      { 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user =  App\User::create([
            'name' => 'odutusin moses',
            'email' => 'odutusinmoses@yahoo.com',
            'password' => bcrypt('bola16'),
            'admin' => 1 
        ]);


        App\Profile::create([
            'user_id' => $user->id, 
            'avatar' => 'uploads/avatars/dog.jpg',
            'about' =>' Error veniam recusandae adipisci quibusdam consequatur temporibus, eius, tempore asperiores molestiae debitis fugiat soluta fugit numquam a tempora quo nobis porro beatae?' ,
            'facebook' =>'facebook.com' ,
            'youtube' => 'youtube.com' 
        ]);
    }
}
 
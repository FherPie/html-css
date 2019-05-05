<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new \App\User([
            'name' => 'andres',
            'email' => 'pieandres@yahoo.com',
            'password' => '123456'
        ]);
        $user->save();
        
        $user=new \App\User([
            'name' => 'may',
            'email' => 'may@yahoo.com',
            'password' => '123456'
        ]);
        $user->save();
    }
}

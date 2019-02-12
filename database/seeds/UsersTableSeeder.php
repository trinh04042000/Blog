<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name =  'Trinh';
        $user->email = 'letrinh04042000@gmail.com';
        $user->password = Hash::make('letrinh123');
        $user->phone = '02437583265';
        $user->address =  'Ha Noi';
        $user->save();

        $user = new \App\User();
        $user->name = 'Diep';
        $user->email = 'diep@gmail.com';
        $user->password = Hash::make('diep123');
        $user->phone = '01286490654';
        $user->address = 'Ha Noi';
        $user->save();
    }
}

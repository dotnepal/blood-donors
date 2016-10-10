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

      \App\User::create(array(
        'first_name' => 'Swornim',
        'last_name'=> 'Shrestha',
        'email' => 'srestaswrnm@gmail.com',
        'username' => 'swornim',
        'password' => \Hash::make('secret'),
        'phone' => '9813004402',
        'address' => 'Chautara, Sindhupalchok',
        'gender' => 'Male',
        'blood_group' => 'A+',
        'user_type_id' => '1',
        'remember_token' => '',
      ));

      \App\User::create(array(
        'first_name' => 'Samundra',
        'last_name'=> 'Shrestha',
        'email' => 'samundra_shr@gmail.com',
        'username' => 'samundra',
        'password' => \Hash::make('secret'),
        'phone' => '981800203',
        'address' => 'Kuala Lumpur, Malayisa',
        'gender' => 'Male',
        'blood_group' => 'AB+',
        'user_type_id' => '1',
        'remember_token' => '',
      ));

      \App\User::create(array(
        'first_name' => 'Pranish',
        'last_name'=> 'Shrestha',
        'email' => 'stha_pro@gmail.com',
        'username' => 'pranish',
        'password' => \Hash::make('secret'),
        'phone' => '9818276249',
        'address' => 'Chautara, Sindhupalchok',
        'gender' => 'Male',
        'blood_group' => 'A+',
        'user_type_id' => '2',
        'remember_token' => '',
      ));


      \App\User::create(array(
        'first_name' => 'Pranisha',
        'last_name'=> 'Shrestha',
        'email' => 'stha_pro1@gmail.com',
        'username' => 'pranisha',
        'password' => \Hash::make('secret'),
        'phone' => '9818278249',
        'address' => 'Chautara, Sindhupalchok',
        'gender' => 'Female',
        'blood_group' => 'A+',
        'user_type_id' => '2',
        'remember_token' => '',
        ));


        \App\User::create(array(
        'first_name' => 'Sylvia',
        'last_name'=> 'Shrestha',
        'email' => 'sylvia_stha@gmail.com',
        'username' => 'sylvia',
        'password' => \Hash::make('secret'),
        'phone' => '9841181282',
        'address' => 'Chautara, Sindhupalchok',
        'gender' => 'Female',
        'blood_group' => 'O+',
        'user_type_id' => '2',
        'remember_token' => '',
        ));


        \App\User::create(array(
        'first_name' => 'Rabin',
        'last_name'=> 'Shrestha',
        'email' => 'rabin@gmail.com',
        'username' => 'rabin',
        'password' => \Hash::make('secret'),
        'phone' => '9898981389',
        'address' => 'Chautara, Sindhupalchok',
        'gender' => 'Male',
        'blood_group' => 'AB+',
        'user_type_id' => '2',
        'remember_token' => '',
        ));

        \App\User::create(array(
        'first_name' => 'Shreeja',
        'last_name'=> 'Shrestha',
        'email' => 'shreejan@gmail.com',
        'username' => 'shreejan',
        'password' => \Hash::make('secret'),
        'phone' => '9813606523',
        'address' => 'Baneshowr, Kathmandu',
        'gender' => 'Male',
        'blood_group' => 'O-',
        'user_type_id' => '2',
        'remember_token' => '',
        ));
    }
}

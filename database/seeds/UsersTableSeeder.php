<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      $blood_group = array('A+','A-','B+','B-','O+','O-','AB+','AB-'); // Blood Groups
      $gender_data = array('Male','Female'); //Gender Data
      //Admin Data
      \App\User::create(array(
        'first_name' => $faker->firstNameMale,
        'last_name'=> $faker->lastName,
        'email' => $faker->email,
        'username' => $faker->userName,
        'password' => \Hash::make('secret'),
        'phone' => '9810'.rand(100000,999999), // For Creating nepali Cellphone number
        'address' => $faker->address,
        'gender' => 'Male',
        'blood_group' => $blood_group[rand(0,7)],
        'user_type_id' => '1',
        'remember_token' => '',
      ));


      //User Data
      foreach(range(1,15) as $x){

      \App\User::create(array(
        'first_name' => $faker->firstName($gender = $gender_data[rand(0,1)]),
        'last_name'=> $faker->lastName,
        'email' => $faker->email,
        'username' => $faker->userName,
        'password' => \Hash::make('secret'),
        'phone' => '9813'.rand(100000,999999),
        'address' => $faker->address,
        'gender' => $gender_data[rand(0,1)],
        'blood_group' => $blood_group[rand(0,7)],
        'user_type_id' => '2',
        'remember_token' => '',
      ));
    }

  }
}

<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
	    DB::table('users')->delete();
	    User::create(array(
	        'name'     => 'Sergey',
	        'username' => 'sergio',
	        'email'    => 'sr@mail.ru',
	        'password' => Hash::make('qwerty'),
	    ));
	}

}
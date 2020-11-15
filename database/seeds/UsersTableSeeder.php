<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $kaderRole = Role::where('name', 'kader')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
        	'name' => 'Admin User',
        	'email' => 'admin@admin.com',
        	'password' => Hash::make('password')
        ]);

        $kader = User::create([
            'name' => 'Joko Riyadi',
            'email' => 'joko.riyadi97@gmail.com',
            'password' => Hash::make('password')
        ]);

        $author = User::create([
            'name' => 'Author User',
            'email' => 'author@author.com',
            'password' => Hash::make('password')
        ]);

        $user = User::create([
        	'name' => 'User User',
        	'email' => 'user@user.com',
        	'password' => Hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $kader->roles()->attach($kaderRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}

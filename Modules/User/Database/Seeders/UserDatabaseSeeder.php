<?php

namespace Modules\User\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        User::updateOrCreate(
            [
                'email' => 'admin@taskarr.com'
            ],
            [
                'name' => 'Admin',
                'email_verified_at' => now(),
                'password' => Hash::make('605185'),
                'remember_token' => Str::random(10),
                'is_admin' => true
            ]
        );

        User::updateOrCreate(
            [
                'email' => 'moderator@taskarr.com'
            ],
            [
                'name' => 'Moderator',
                'email_verified_at' => now(),
                'password' => Hash::make('605185'),
                'remember_token' => Str::random(10)
            ]
        );

        User::updateOrCreate(
            [
                'email' => 'user@taskarr.com'
            ],
            [
                'name' => 'User',
                'email_verified_at' => now(),
                'password' => Hash::make('605185'),
                'remember_token' => Str::random(10)
            ]
        );
    }
}

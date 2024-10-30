<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create();

        User::create([
            'name' => Str::random(10),
            'email' => 'target-user@ecmm463.edu',
            'password' => Hash::make('Password1'),
        ])->markEmailAsVerified();

        User::create([
            'name' => Str::random(10),
            'email' => 'attacker-user@ecmm463.edu',
            'password' => Hash::make('Password1'),
        ])->markEmailAsVerified();
    }
}
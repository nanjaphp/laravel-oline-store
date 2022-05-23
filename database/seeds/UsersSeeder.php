<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emails = [];

        for ($i = 1; $i <= 10; $i++) {
            $emails[] = "test_user$i@mail.com";
        }

        foreach ($emails as $email) {
            $user = [
                'email'      => $email,
                'name'  => "Test",
                'password'   => Hash::make('test'),
                'email_verified_at' => time(),
            ];

            DB::table('users')->insert($user);
        }
    }
}

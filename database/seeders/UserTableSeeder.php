<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Armstrong';
        $user->email = 'admin@eriggalive.com';
        $user->password = bcrypt('123456');
        $user->user_type = 'admin';
        $user->uuid = (string) Str::uuid();
        $user->save();

        $user = new User;
        $user->name = 'Audrey';
        $user->email = 'user@errigalive.com';
        $user->password = bcrypt('123456');
        $user->user_type = 'regular';
        $user->uuid = (string) Str::uuid();
        $user->save();

        $user = new User;
        $user->name = 'Erriga';
        $user->email = 'support@errigalive.com';
        $user->password = bcrypt('123456');
        $user->user_type = 'support';
        $user->uuid = (string) Str::uuid();
        $user->save();
    }
}

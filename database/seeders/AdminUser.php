<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = User::updateOrCreate(['email' => 'superadmin@admin.com'], [
            'name' => 'Super Admin',
            'email' => 'superadmin@admin.com',
            'password' => Hash::make('1Pakistan?'),
        ]);

    }
}

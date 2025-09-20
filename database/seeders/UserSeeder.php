<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
public function run()
{

User::factory()->create([
'id' => 'GUARD001',
'email' => 'guard@example.com',
'password' => Hash::make('password'),
'company' => 'Company A',
'department' => 'Security',
'full_name' => 'Security Guard',
'job_role' => 'Security Guard',
'role' => 'guard',
]);


User::factory()->create([
'id' => 'ADMIN001',
'email' => 'admin@example.com',
'password' => Hash::make('password'),
'company' => 'Company A',
'department' => 'Management',
'full_name' => 'Administrator',
'job_role' => 'System Administrator',
'role' => 'admin',
]);
}
}
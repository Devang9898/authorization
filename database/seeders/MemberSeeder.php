<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Member;
use App\Models\Role;
class MemberSeeder extends Seeder
{
    public function run()
    {
        // Create 10 roles
        $roles = Role::factory()->count(10)->create();
        // Create 10 members and attach roles to them
        Member::factory()->count(10)->create()->each(function ($member) use ($roles) {
            $member->roles()->attach($roles->random(rand(1, 3))->pluck('id')->toArray());
        });
    }
}
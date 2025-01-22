<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // User::factory(10)->create();

    //     // User::factory()->create([
    //     //     'name' => 'Aaditya Gandhi',
    //     //     'email' => 'aadi@example.com',
    //     //     'password' => Hash::make('secret')
    //     // ]);
    //     // User::factory()->create([
    //     //     'name' => 'Sam Curran',
    //     //     'email' => 'sam@example.com',
    //     //     'password' => Hash::make('passcode')
    //     // ]);
        
    // }
    public function run()
    {
        $this->call(ProductsTableSeeder::class);
        $this->call(BookTableSeeder::class);
        $this->call(MemberSeeder::class);
    }
}

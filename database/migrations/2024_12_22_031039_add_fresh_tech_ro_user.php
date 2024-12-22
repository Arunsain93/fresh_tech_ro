<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Insert user into the users table
        DB::table('users')->insert([
            'name' => 'fresh_tech_ro',
            'email' => 'fresh_tech_ro@yopmail.com',
            'password' => Hash::make('fresh_tech_ro'), // Securely hash the password
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('users')
        ->where('email', 'fresh_tech_ro@yopmail.com')
        ->delete();
    }
};

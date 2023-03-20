<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PHPUnit\Framework\Test;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('dosen')->insert([
            'nidn' => 91299,
            'namaDosen' => 'Dr Rico',
            'email' => 'Rico@gmail.com'
        ]);
    }
}
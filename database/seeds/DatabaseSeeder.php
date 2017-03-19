<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toTruncate = [
            'surah',
        ];

        foreach ($toTruncate as $table) {
            DB::table($table)->truncate();
        }

        // $this->call('UsersTableSeeder');
        $this->call('GenerateSurahSeeder');
    }
}

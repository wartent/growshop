<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      DB::table('users')->insert([
          'name' => 'user',
          'email' => 'user@email.com',
          'password' => bcrypt('senha'),
      ]);
    }
}

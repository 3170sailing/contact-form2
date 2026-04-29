<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'name' => 'テスト太郎',
                'email' => 'test1@example.com',
                'tell' => '09012345678',
                'content' => 'テストお問い合わせ1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'テスト花子',
                'email' => 'test2@example.com',
                'tell' => '08087654321',
                'content' => 'テストお問い合わせ2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'gender' => '男性'
        ];
        Gender::create($param);

        $param = [
            'gender' => '女性'
        ];
        Gender::create($param);
    }
}

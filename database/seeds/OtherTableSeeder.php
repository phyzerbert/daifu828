<?php

use Illuminate\Database\Seeder;

use App\Models\Country;
use App\Models\Currency;

class OtherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create(['name' => '美国', 'number' => 1, 'code' => 'US']);
        Country::create(['name' => '英国', 'number' => 44, 'code' => 'GB']);
        Country::create(['name' => '马来西亚', 'number' => 60, 'code' => 'MY']);
        Country::create(['name' => '新加坡', 'number' => 65, 'code' => 'SG']);
        Country::create(['name' => '中国', 'number' => 86, 'code' => 'CN']);

        Currency::create(['name' => '澳大利亚元', 'rate' => 4.5507]);
        Currency::create(['name' => '加拿大元', 'rate' => 4.8824]);
        Currency::create(['name' => '瑞士法郎', 'rate' => 7.0352]);
        Currency::create(['name' => '欧元', 'rate' => 7.5296]);
        Currency::create(['name' => '英镑', 'rate' => 8.3494]);
        Currency::create(['name' => '港币', 'rate' => 0.8545]);
        Currency::create(['name' => '日元', 'rate' => 0.061686]);
        Currency::create(['name' => '新西兰元', 'rate' => 4.2832]);
        Currency::create(['name' => '瑞典克朗', 'rate' => 0.7249]);
        Currency::create(['name' => '新加坡元', 'rate' => 4.736]);
        Currency::create(['name' => '美元', 'rate' => 6.7551]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GreetMorningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert = [
            ['greet' => 'おらぁ おきろしゃちくども'],
            ['greet' => 'きょうもしゃちくっすか ごくろうさんです']
        ];
        foreach ($insert as $key => $val) {
            $insert[$key]['updated_at'] = Carbon::now();
            $insert[$key]['created_at'] = Carbon::now();
        }

        DB::table('greet_morning')->insert($insert);
    }
}

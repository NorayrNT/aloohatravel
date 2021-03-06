<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            ['main_id' => null,'lang_id' => '1',
            'cnt' => 'armenia','addr' => 'Yerevan, Abovyan 25','phone' => '+37433999999,+37493333333','email'=>'aloohatravel@gmail.com',
            'map'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.0371007309745!2d44.51893351522503!3d40.185987777564634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abce124637e8d%3A0x18598723afdfedc7!2s25%20Abovyan%20St%2C%20Yerevan%200001%2C%20Armenia!5e0!3m2!1sen!2s!4v1592917052068!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
            ],
            ['main_id' => '1','lang_id' => '2',
            'cnt' => 'армения','addr' => 'Ереван, Абовян 25','phone' => '+37433999999,+37493333333','email'=>'aloohatravel@gmail.com',
            'map'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.0371007309745!2d44.51893351522503!3d40.185987777564634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abce124637e8d%3A0x18598723afdfedc7!2s25%20Abovyan%20St%2C%20Yerevan%200001%2C%20Armenia!5e0!3m2!1sen!2s!4v1592917052068!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
            ],
        ]);
    }
}

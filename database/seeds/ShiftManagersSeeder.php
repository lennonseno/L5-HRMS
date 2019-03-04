<?php

use Illuminate\Database\Seeder;

class ShiftManagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('shift_managers')->insert([
            [
                'name' => '6:00 AM - 2:00 PM',
                'in_time' => '6:00',
                'out_time' => '14:00',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '2:00 PM - 10:00 PM',
                'in_time' => '14:00',
                'out_time' => '22:00',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '8:00 PM - 5:00 AM',
                'in_time' => '20:00',
                'out_time' => '5:00',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '8:30 PM - 5:30 AM',
                'in_time' => '20:30',
                'out_time' => '5:30',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '9:00 PM - 6:00 AM',
                'in_time' => '21:00',
                'out_time' => '6:00',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '9:30 PM - 6:30 AM',
                'in_time' => '21:30',
                'out_time' => '6:30',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '10:00 PM - 6:00 AM',
                'in_time' => '22:00',
                'out_time' => '6:00',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '10:00 PM - 7:00 AM',
                'in_time' => '22:00',
                'out_time' => '7:00',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '10:30 PM - 7:30 AM',
                'in_time' => '22:30',
                'out_time' => '7:30',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '11:00 PM - 8:00 AM',
                'in_time' => '23:00',
                'out_time' => '8:00',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '11:30 PM - 8:30 AM',
                'in_time' => '23:30',
                'out_time' => '8:30',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '12:00 AM - 9:00 AM',
                'in_time' => '0:00',
                'out_time' => '9:00',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '12:30 AM - 9:30 AM',
                'in_time' => '0:30',
                'out_time' => '9:30',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '1:00 AM - 10:00 AM',
                'in_time' => '1:00',
                'out_time' => '10:00',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '1:30 AM - 10:30 AM',
                'in_time' => '0:30',
                'out_time' => '9:30',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '2:00 AM - 11:00 AM',
                'in_time' => '1:00',
                'out_time' => '10:00',
                'type' => 'Fixed',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '10:00 PM - 6:00 AM (Flexi)',
                'in_time' => '22:00',
                'out_time' => '6:00',
                'type' => 'Flexi',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '6:00 AM - 2:00 PM (Flexi)',
                'in_time' => '6:00',
                'out_time' => '14:00',
                'type' => 'Flexi',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '2:00 PM - 10:00 PM (Flexi)',
                'in_time' => '14:00',
                'out_time' => '22:00',
                'type' => 'Flexi',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ]);
    }
}

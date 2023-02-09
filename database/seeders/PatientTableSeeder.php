<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;
use App\Models\User;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);
        
        $patient = new Patient();
        #$patient->user_id = $user->id;
        $patient->name = "Patient";
        $patient->email = "patient@mail.com";
        $patient->birthdate = "1999-10-15";
        $patient->sex = "Female";
        $patient->user()->associate($user);
        $patient->save();

    }
}
